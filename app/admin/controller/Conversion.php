<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Attach;
use app\admin\model\Convert as ConvertModel;
use think\Config;
use think\Request;
use think\Validate;
use org\util\Convert;

/**
 * 文件转换控制器
 * Class Conversion
 * @package app\admin\controller
 */
class Conversion extends Base{

    public function _initialize(){
        // 设置脚本运行时间
        ini_set("magic_quotes_runtime",0);
        parent::_initialize();
    }

    /**
     * 文件列表
     * @Author   Hui
     * @DateTime 2017-06-27T22:19:08+0800
     * @return   mixed
     */
    public function lis(){
        $db = new ConvertModel();
        $list = $db->order('id desc')->paginate(12);
        $this->assign('list',$list);
        $count = $db->count();
        $this->assign('count',$count);
        return $this->fetch();
    }

    /**
     * 查看转换文件
     * @param Request $request
     * @return mixed
     */
    public function preview(Request $request){
        if($request->isGet()){
            $id = $request->param('id/d');
            // 获取全部原始数据
            $det_rs = ConvertModel::get($id)->getData();
            $this->assign('rs',$det_rs);
            return $this->fetch();
        }
    }

    /**
     * 删除转换文件
     * @param Request $request
     */
    public function del(Request $request){
        if($request->isGet()){
            $id = $request->param('id/d');
            if(!isset($id) || empty($id)){
                $this->redirect('conversion/lis','',302,['code' => 'error','msg' => '参数错误！']);
            }else{
                $db = ConvertModel::get($id);
                if($db){
                    if($db->delete()){
                        // 删除文件
                        $url = HUI_FILES.$db->url;
                        if(is_file($url)){
                            unlink($url);
                        }
                        system_logs('删除转换文件',session('uname'),1);
                        $this->redirect('conversion/lis','',302,['code' => 'success','msg' => '转换文件删除成功！']);
                    }else{
                        system_logs('删除转换文件',session('uname'),0);
                        $this->redirect('conversion/lis','',302,['code' => 'error','msg' => '转换文件删除失败！']);
                    }
                }else{
                    $this->redirect('conversion/lis','',302,['code' => 'error','msg' => '数据不存在！']);
                }
            }
        }
    }

    /**
     * 文档转换页面
     * @return mixed
     */
	public function index(){
        return $this->fetch();
	}

    /**
     * Office文档转换
     * @Author Hui
     * @DateTime  2017-06-27T01:25:43+0800
     * @param     Request $request
     * @return    \think\response\Json
     */
    public function fileConversion(Request $request){
        if($request->isAjax()){
            // 实例化转换文件信息模型
            $db = new ConvertModel();

            $data = $request->post();
            // 验证数据
            $validate = new Validate([
                ['format','require','请选择转换格式'],
                ['id','require','请上传Office文件'],
                ['uploadfile','require','原文件名为空'],
            ]);
            if(!$validate->check($data)) {
                return json(['error' => 1,'msg' => $validate->getError()]);
            }else{
                // 实例化文件信息表模型
                $attach = new Attach();
                $where = [
                    'id' => ['eq', $data['id']],
                ];
                $result = $attach->where($where)->find();
                if($result){
                    // Office文件绝对路径
                    $word_file = HUI_FILES .$result['url'];

                    // 文件保存绝对路径
                    $convert_dir = HUI_FILES .Config::get('websetup.convert_dir').DS;

                    if(!is_dir($convert_dir)){
                        mkdir($convert_dir);
                        chmod($convert_dir,0777); // 设置权限
                    }

                    $info = self::run_conversion($word_file,$convert_dir,$data['format']);

                    if($info['error'] == 0){
                        // 数据库记录数据
                        $db->allowField(true)->save([
                            'uid'   => session('uid'),
                            'title' => $data['uploadfile'],
                            'name'  => $info['file'].'.'.$info['ext'],
                            'ext'   => $info['ext'],
                            'url'   => 'convert/'.$info['file'].'.'.$info['ext'],
                            'page'  => $info['page']
                        ]);
                        // 记录日志
                        system_logs('文件转换',session('uname'),1);
                        return json(['error' => 0]);
                    }else{
                        // 记录日志
                        system_logs('文件转换：'.$info['msg'],session('uname'),0);
                        return json(['error' => 1,'msg' => $info['msg']]);
                    }
                }else{
                    return json(['error' => 1,'msg' => '上传文件不存在']);
                }

            }
        }
    }

    /**
     * 运行转换程序
     * @param $word_file
     * @param $convert_dir
     * @param $type
     * @return array
     */
    private static function run_conversion($word_file,$convert_dir,$type){
        // 实例化转换类
        $convert = new Convert();
        $file_name = uniqid();
        switch($type){
            case 1:
                // office文件转换pdf格式
                $page = $convert->run($word_file,$convert_dir.$file_name.'.pdf');
                if(isset($page) && $page>0){
                    $info = [
                        'error'     => 0,
                        'page'      => $page,
                        'ext'       => 'pdf',
                        'file'      => $file_name
                    ];
                }else{
                    $info = ['error' => 1,'msg' => '转换失败'];
                }
                break;
            case 2:
                $arr = $convert->pdf2swf($word_file,$convert_dir);
                if(is_array($arr) && $arr['error'] == 0){
                    $info = [
                        'error'     => 0,
                        'page'      => $arr['page'],
                        'ext'       => 'swf',
                        'file'      => $arr['swf_file']
                    ];
                }else{
                    $info = ['error' => 1,'msg' => '转换失败'];
                }
                break;        
            default:
                $info = ['error' => 1,'msg' => '未知格式'];
                break;
        }
        return $info;
    }

}
