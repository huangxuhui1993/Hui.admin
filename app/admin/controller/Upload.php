<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Image;
use think\Config;
use think\Request;
use app\admin\model\Attach as AttachModel;

/**
 * 百度上传控制器
 * Class Upload
 * @package app\admin\controller
 */
class Upload extends Base{

    public function _initialize(){
        ini_set("magic_quotes_runtime",0);
        parent::_initialize();
    }

    /**
     * 上传文件
     * @param Request $request
     * @return \think\response\Json
     */
	public function fileUpload(Request $request){
        if($request->isPost()){
            // 是否开启上传
            $is_upload = Config::get('websetup.is_upload');
            if ($is_upload == 0){
                return json(['error' => 1, 'message' => '系统未开启上传功能，无法上传文件！']);
            }
            $type = $request->param('type');
            
            if(empty($type)){
                return json(['error' => 1, 'message' => '类型为空！']);
            }else{
                $result = self::upload($type, $request);
                return json($result);
            }
        }else{
           return json(['error' => 1, 'message' => '非法操作！']);
        }
	}

    /**
     * 处理上传文件
     * @param string $type 类型
     * @param Request $request 请求信息
     * @param string $fieldName 表单name
     * @return array
     */
    private static function upload($type, $request, $fieldName = 'file'){
        $config = Config::get('websetup'); // 获取上传配置信息
        switch($type){
            case 'photo':
                $photo_ext = isset($config['photo_ext']) ? $config['photo_ext'] : 'png,jpg,jpeg,bmp,gif';
                // 图片上传参数
            	$url = isset($config['photo_dir']) ? $config['photo_dir'] : 'images';
			    $size = isset($config['photo_size']) ? $config['photo_size'] : 3145728; // 附件上传大小限制，单位：字节(b)，默认3MB
                $ext = explode(',', $photo_ext);
			    $is_water = isset($config['is_water']) ? $config['is_water'] : 0;
			    $water = isset($config['photo_water']) ? $config['photo_water'] : './static/images/water.png';
                break;
            case 'office':
                $office_ext = isset($config['office_ext']) ? $config['office_ext'] : 'doc,ppt,xls,docx,pptx,xlsx';
                // 文档上传参数
                $url = isset($config['office_dir']) ? $config['office_dir'] : 'office';
                $size = isset($config['office_size']) ? $config['office_size'] : 52428800; // office上传大小限制，单位B，默认50MB 
                $ext = explode(',', $office_ext);
                break;
            case 'video':
                $video_ext = isset($config['video_ext']) ? $config['video_ext'] : 'swf,flv,wav,ram,wma,mp4';
                // 视频上传参数
                $url = isset($config['video_dir']) ? $config['video_dir'] : 'video';
                $size = isset($config['video_size']) ? $config['video_size'] : 104857600; // 视频上传大小限制，单位B，默认100MB 
                $ext = explode(',', $video_ext);
                break;
            case 'attach':
                $attach_ext = isset($config['attach_ext']) ? $config['attach_ext'] : 'rar,tar,7z,zip,gz,txt,chm,xml,doc,ppt,pdf,xls,xlsx,pptx,docx';
                // 附件上传参数
                $url = isset($config['attach_dir']) ? $config['attach_dir'] : 'attach';
                $size = isset($config['attach_size']) ? $config['attach_size'] : 104857600; // 附件上传大小限制，单位：字节(b)，默认100MB
                $ext = explode(',', $attach_ext);
                break;
            default:
                return ['message' => '类型错误！','error' => 1];
                break;
        }

        if(!empty($url) && !empty($size) && !empty($ext) && is_array($ext)){
            // 获取表单上传文件
            $file = $request->file($fieldName);
            $where = ['size' => $size, 'ext' => $ext];
            // 移动文件
            $info = $file->validate($where)->move(HUI_FILES . $url);
            if($info){

                $file_url = $url . '/' . str_replace('\\', '/', $info->getSaveName());
                // 数据库存储上传文件数据
                $db = new AttachModel();
                $data = [
                    'uid'         => session('uid'),
                    'type'        => $type,
                    'title'       => $_FILES[$fieldName]['name'],
                    'name'        => $info->getFilename(),
                    'url'         => $file_url,
                    'ext'         => $info->getExtension(),
                    'size'        => $info->getSize(),
                    'create_time' => time()
                ];
                $state = $db->save($data);
                if($state){
                    add_logs('文件上传成功，文件名称：' . $info->getFilename(), 1);
                    return ['error' => 0, 'message' => '上传成功！', 'id' => $db->id, 'ext' => $info->getExtension()];
                }else{
                    $data_json = json_encode($data, JSON_UNESCAPED_UNICODE);
                    add_logs("文件上传，数据库记录失败！文件信息：{$data_json}", 0);
                    return ['error' => 1, 'message' => '数据库记录失败！'];
                }
    
            }else{
                // 上传错误提示错误信息
                return ['error' => 1, 'message' => $file->getError()];
            }
        }else{
            return ['error' => 1, 'message' => '上传配置出错！'];
        }
    }

}
