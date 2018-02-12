<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use org\util\HttpCurl;
use think\Request;
use think\Config;
use think\Db;

/**
 * 系统首页信息控制器
 * Class Index
 * @package app\admin\controller
 */
class Index extends Base{

	public function index(){
		return $this->fetch();
	}

	public function welcome(){

		$this->assign('access_list', self::accessData()); 		// 访问统计数据

		$this->assign('source_list', self::sourceData());		// 访问来源统计数据

		$this->assign('document_list', self::documentData());	// 文档统计数据

		$this->assign('map_list', self::mapData());				// 地图统计数据

		$this->assign('server_list', self::serverData());		// 服务器环境

		return $this->fetch();
	}

	# 访问统计数据
	static private function accessData(){
		return [
			'x' => '["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"]',
			'y' => '[10,20,15,25,20,40,35,20,15,25,20,40]'
		];
	}

	# 访问来源统计数据
	static private function sourceData(){
		return [
			'source' => "['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']",
			'value' => "[
	            {value:335, name:'直接访问'},
	            {value:310, name:'邮件营销'},
	            {value:234, name:'联盟广告'},
	            {value:135, name:'视频广告'},
	            {value:1548, name:'搜索引擎'}
        	]"
		];
	}

	# 文档统计数据
	static private function documentData(){
		return [
			'x' => '["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"]',
			'y' => '[8,10,15,9,15,20,12,10,18,10,15,12]'
		];
	}	

	# 地图统计数据
	static private function mapData(){
		$map = Db::name('map_statistics');
		$result = $map->select();
		foreach($result as $value){
			$arr[] = [
		        'name' => $value['province'], 
		        'value' => $value['count'] 
		    ];
		}
		return [
			'min' => $map->min('count'),
			'max' => $map->max('count'),
			'map' => json_encode($arr)
		];
	}

	# 服务器环境
	static private function serverData(){
		return [
			0  => ['name' => '系统类型及版本号', 'val' => php_uname()],
			1  => ['name' => 'PHP运行方式', 'val' => php_sapi_name()],
			2  => ['name' => 'PHP版本', 'val' => PHP_VERSION],
			3  => ['name' => 'Zend版本', 'val' => Zend_Version()],
			4  => ['name' => '数据库大小', 'val'=>truesize(mysql_db_size())],
			5  => ['name' => '系统上传大小', 'val' => ini_get("file_uploads") ? ini_get("upload_max_filesize") : "禁用"],
			6  => ['name' => '最大运行时间', 'val' => ini_get("max_execution_time")."秒"],
			7  => ['name' => 'PHP安装路径', 'val' => DEFAULT_INCLUDE_PATH],
			8  => ['name' => '应用根目录', 'val' => ROOT_PATH],
			9  => ['name' => '磁盘大小', 'val' => function_exists('disk_free_space') ? truesize(floor(disk_free_space(ROOT_PATH))) : "禁用"],
			10 => ['name' => '服务器IP地址', 'val' => GetHostByName($_SERVER['SERVER_NAME'])],
			11 => ['name' => '客户端IP地址', 'val' => request()->ip()],
			12 => ['name' => '服务器解译引擎', 'val' => $_SERVER['SERVER_SOFTWARE']],
			13 => ['name' => '服务器语言', 'val' => $_SERVER['HTTP_ACCEPT_LANGUAGE']],
			14 => ['name' => '端口号', 'val' => $_SERVER['SERVER_PORT']],
			15 => ['name' => 'ThinkPHP框架版本号', 'val' => THINK_VERSION]
		];
	}

}
