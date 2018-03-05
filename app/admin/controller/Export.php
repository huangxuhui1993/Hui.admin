<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use \XLSXWriter;
use think\Db;
use think\Request;
use think\Config;
use app\admin\model\Logs;
use app\admin\model\Export as ExportModel;

/**
 * Office导出控制器
 * Class Export
 * @package app\admin\controller
 */
class Export extends Base{

	// 类初始化函数
    public function _initialize(){
        parent::_initialize();
        set_time_limit(0);
        ini_set('memory_limit','300M');
		error_reporting(E_ALL);
		date_default_timezone_set('Asia/Shanghai');	
    }

    /**
     * xlsx导出信息
     * @param  Request $request
     * @return json
     */
    public function xlsxExport(){
    	$fileName = 'Hui.admin系统日志信息';
		$header = ['ID', '管理员', '客户端IP', '操作', '状态', '时间'];
		$data = Db::name('logs')->order('id asc')->select();
		foreach($data as $key => $value){
			$data[$key]['time'] = date('Y-m-d H:i:s',$value['time']);
			if($value['status'] == 1){
				$data[$key]['status'] = '成功';
			}elseif($value['status'] == 0){
				$data[$key]['status'] = '失败';
			}

		}
		$result = self::writer($fileName,$header,$data);
		return json($result);
    }

    /**
     * 导出操作
     * @Author   Hui
     * @DateTime 2017-07-26T23:26
     * @param    string $header 标题
     * @param    array  $data   数据
     * @return
     */
    private static function writer($fileName,$header,$data){
		$writer = new XLSXWriter();

		$writer->writeSheetRow('Sheet1', $header, [
			'font'=>'宋体',
			'font-size'=>10,
			'font-style'=>'bold',
			'fill'=>'#eee',
			'halign'=>'center',
			'border'=>'left,right,top,bottom'
		]);
		
		foreach($data as $row){
			$writer->writeSheetRow('Sheet1', $row);
		}
		
		$dir = HUI_FILES . Config::get('websetup.export_dir') . DS;
		$file_name = date('YmdHis') . '.xlsx';
		
		$writer->writeToFile($dir . $file_name);
        $url = Config::get('websetup.export_dir') . DS . $file_name;
		# 记录导出文件信息
		$db = new ExportModel();
		$edata = [
			'uid'   => session('uid'),
			'title' => $fileName,
			'name'  => $file_name,
			'url'   => $url,
			'ext'   => 'csv'
		];
		if($db->save($edata)){
			return [
				'error' => 0,
				'file' => DS . Config::get('hui_files_path') . DS . $url
			];
		}else{
			return [
				'error' => 1,
				'msg'  => '导出文件记录失败！'
			];	
		}
    }

}
