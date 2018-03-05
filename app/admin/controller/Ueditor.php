<?php
namespace app\admin\controller;
use think\Image;
use think\Config;
use think\Request;
use app\admin\controller\Base;
use app\admin\model\Attach as AttachModel;

/**
 * 百度编辑器控制器
 * Class Ueditor
 * @package app\admin\controller
 */
class Ueditor extends Base{

	public function fileUpload(Request $request){
      
        // 是否开启上传
        $isupallow = Config::get('websetup.is_upload');

        if ($isupallow == 0){
            return json(['state' => '系统未开启上传功能，无法上传文件！']);
        }

        // 加载配置文件
        $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(ROOT_PATH."public/static/js/ueditor/php/config.json")),true);

		// 接收请求参数
        $action = $request->param('action');
        $callback = $request->param('callback');

        switch($action){
            case 'config':
                $result = json_encode($CONFIG);
                break;

            // 上传图片
            case 'uploadimage':
            	$fieldName = $CONFIG['imageFieldName'];
                $result = self::upload('photo', $request, $fieldName);
                break;

            // 上传涂鸦
            case 'uploadscrawl':
            	$fieldName = $CONFIG['scrawlFieldName'];
                $result = self::upload('photo', $request, $fieldName);
                break;

            // 上传视频
            case 'uploadvideo':
            	$fieldName = $CONFIG['videoFieldName'];
                $result = self::upload('video', $request, $fieldName);
                break;

            // 上传文件
            case 'uploadfile':
            	$fieldName = $CONFIG['fileFieldName'];
                $result = self::upload('attach', $request, $fieldName);
                break;

            default:
                $result = json_encode(['state' => '请求地址出错']);
                break;
        }

        // 输出结果
        if(isset($callback)){
            if(preg_match("/^[\w_]+$/", $callback)){
                echo htmlspecialchars($callback) . '(' . $result . ')';
            }else{
                echo json_encode(['state' => 'callback参数不合法']);
            }
        }else{
            die($result);
        }

	}

    // 处理上传文件
    private static function upload($type, $request, $fieldName){
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
                $ext = explode(',', $photo_ext);
                $is_water = isset($is_water) ? $is_water : 0;
                $water = isset($photo_water) ? $photo_water : './static/images/water.png';
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
                $ext = explode(',', $attach_ext);
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
                $ext = explode(',', $video_ext);
                break;

            default:
                return false;
                break;
        }

        if(empty($url) || empty($size) || empty($ext)){
            $res = ['state' => '后台上传配置出错！'];
        }else{
            // 获取表单上传文件
            $file = $request->file($fieldName);
            $where = [
                'size' => $size,
                'ext' => $ext
            ];
            
            // 移动文件
            $info = $file->validate($where)->move(HUI_FILES.$url);
            
            if($info){
                // 文档ID
                $aid = $request->param('aid');
                // 数据库存储上传文件数据
                $db = new AttachModel();
                $data = [
                    'aid'   => isset($aid) ? $aid : '',
                    'uid'   => session('uid'),
                    'type'  => $type,
                    'title' => $_FILES[$fieldName]['name'],
                    'name'  => $info->getFilename(),
                    'url'   => $url.'/'.str_replace('\\','/',$info->getSaveName()),
                    'thumb' => '',
                    'ext'   => $info->getExtension(),
                    'size'  => $info->getSize()
                ];
                $db->save($data);
                /**
                 * 得到上传文件所对应的各个参数,数组结构
                 * [
                 *     "state" => "",          // 上传状态，上传成功时必须返回"SUCCESS"
                 *     "url" => "",            // 返回的地址
                 *     "title" => "",          // 新文件名
                 *     "original" => "",       // 原始文件名
                 *     "type" => ""            // 文件类型
                 *     "size" => "",           // 文件大小
                 * ]
                 */
                $res = [
                    'state' => 'SUCCESS',
                    'url' => '/'. Config::get('hui_files_path') . '/' . $url . '/' . str_replace('\\', '/', $info->getSaveName()),
                    'title' => $_FILES[$fieldName]['name'],
                    "original" => $db->id, 
                    'type' => '.' . $info->getExtension(),
                    'size' => $info->getSize()
                ];
            }else{
                // 上传错误提示错误信息
                $res = ['state' => $file->getError() . 'cc'];
            }
        }

        return json_encode($res);
    }

}
