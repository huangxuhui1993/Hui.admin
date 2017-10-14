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
                return json(['message' => '系统未开启上传功能，无法上传文件！','error' => 1]);
            }
            $type = $request->param('type');
            
            if(empty($type)){
                return json(['message' => '类型为空！','error' => 1]);
            }else{
                $result = self::upload($type,$request);
                return json($result);
            }
        }else{
           return json(['message' => '非法操作！','error' => 1]);
        }
	}

    /**
     * 处理上传文件
     * @param string $type 类型
     * @param Request $request 请求信息
     * @param string $fieldName 表单name
     * @return array
     */
    private static function upload($type,$request,$fieldName = 'file'){
        switch($type){
            case 'photo':
            	// 获取图片上传配置
                $photo_dir = Config::get('websetup.photo_dir');
                $photo_size = Config::get('websetup.photo_size');
                $photo_ext = Config::get('websetup.photo_ext');
                $photo_ext = isset($photo_ext) ? $photo_ext : 'png,jpg,jpeg,bmp,gif';
                $is_water = Config::get('websetup.is_water');
                $photo_water = Config::get('websetup.photo_water');
                // 图片上传参数
            	$url = isset($photo_dir) ? $photo_dir : 'images';
			    $size = isset($photo_size) ? $photo_size : 3145728; // 附件上传大小限制，单位：字节(b)，默认3MB
                $ext = explode(',',$photo_ext);
			    $is_water = isset($is_water) ? $is_water : 0;
			    $water = isset($photo_water) ? $photo_water : './static/images/water.png';
                break;
            case 'office':
                // 获取Office文档上传配置
                $office_dir = Config::get('websetup.office_dir');
                $office_size = Config::get('websetup.office_size');
                $office_ext = Config::get('websetup.office_ext');
                $office_ext = isset($office_ext) ? $office_ext : 'doc,ppt,xls,docx,pptx,xlsx';
                // 文档上传参数
                $url = isset($office_dir) ? $office_dir : 'office';
                $size = isset($office_size) ? $office_size : 52428800; // 视频上传大小限制，单位B，默认50MB 
                $ext = explode(',',$office_ext);
                break;
            case 'video':
                // 获取视频上传配置
                $video_dir = Config::get('websetup.video_dir');
                $video_size = Config::get('websetup.video_size');
                $video_ext = Config::get('websetup.video_ext');
                $video_ext = isset($video_ext) ? $video_ext : 'swf,flv,wav,ram,wma,mp4';
                // 视频上传参数
                $url = isset($video_dir) ? $video_dir : 'video';
                $size = isset($video_size) ? $video_size : 104857600; // 视频上传大小限制，单位B，默认100MB 
                $ext = explode(',',$video_ext);
                break;
            case 'attach':
                // 获取附件上传配置
                $attach_dir = Config::get('websetup.attach_dir');
                $attach_size = Config::get('websetup.attach_size');
                $attach_ext = Config::get('websetup.attach_ext');
                $attach_ext = isset($attach_ext) ? $attach_ext : 'rar,tar,7z,zip,gz,txt,chm,xml,doc,ppt,pdf,xls,xlsx,pptx,docx';
                // 附件上传参数
                $url = isset($attach_dir) ? $attach_dir : 'attach';
                $size = isset($attach_size) ? $attach_size : 104857600; // 附件上传大小限制，单位：字节(b)，默认100MB
                $ext = explode(',',$attach_ext);
                break;
            default:
                return ['message' => '类型错误！','error' => 1];
                break;
        }

        if(empty($url) || empty($size) || empty($ext) || !is_array($ext)){
            $result = ['message' => '上传配置出错！','error' => 1];
        }else{
            // 获取表单上传文件
            $file = $request->file($fieldName);
            $where = ['size' => $size, 'ext' => $ext];
            // 移动文件
            $info = $file->validate($where)->move(HUI_FILES.$url);
            if($info){
                $file_url = $url.'/'.str_replace('\\','/',$info->getSaveName());
                // 数据库存储上传文件数据
                $db = new AttachModel();
                $data = [
                    'aid'         => '',
                    'uid'         => session('uid'),
                    'type'        => $type,
                    'title'       => $_FILES[$fieldName]['name'],
                    'name'        => $info->getFilename(),
                    'url'         => $file_url,
                    'thumb'       => '',
                    'ext'         => $info->getExtension(),
                    'size'        => $info->getSize(),
                    'create_time' => time()
                ];
                $db->save($data);
                // 记录日志
                system_logs('上传文件'.$info->getFilename(),session('uname'),1);
                // 上传成功 获取上传文件信息
                $result = ['message' => '上传成功！','error' => 0, 'id' => $db->id,'ext' => $info->getExtension()];
            }else{
                // 上传错误提示错误信息
                $result = ['message' => $file->getError(),'error' => 1];
            }
        }
        return $result;
    }

}
