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
        $isUpallow = Config::get('websetup.is_upload');

        if($isUpallow == 0){
            return json(['state' => '系统未开启上传功能，无法上传文件！']);
        }

        // 加载配置文件
        $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(ROOT_PATH . "public/static/js/ueditor/php/config.json")), true);

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
        $config = get_upload_config($type); // 获取上传配置

        if($config['state'] == 1){
            
            $url = $config['url']; // 上传文件夹

            // 获取表单上传文件
            $file = $request->file($fieldName);
            $validate = ['size' => $config['size'], 'ext' => $config['ext']];
            
            // 移动文件
            $info = $file->validate($validate)->move(HUI_FILES . $url);
            
            if($info){
                // 文档ID
                $aid = $request->param('aid');
                // 数据库存储上传文件数据
                $db = new AttachModel();
                $db->save([
                    'aid'   => isset($aid) ? $aid : '',
                    'uid'   => session('uid'),
                    'type'  => $type,
                    'title' => $_FILES[$fieldName]['name'],
                    'name'  => $info->getFilename(),
                    'url'   => $url . '/' . str_replace('\\', '/', $info->getSaveName()),
                    'thumb' => '',
                    'ext'   => $info->getExtension(),
                    'size'  => $info->getSize()
                ]);
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
                $result = [
                    'state'    => 'SUCCESS',
                    'url'      => '/'. Config::get('hui_files_path') . '/' . $url . '/' . str_replace('\\', '/', $info->getSaveName()),
                    'title'    => $_FILES[$fieldName]['name'],
                    "original" => $db->id,
                    'type'     => '.' . $info->getExtension(),
                    'size'     => $info->getSize()
                ];
            }else{
                // 上传错误提示错误信息
                $result = ['state' => $file->getError()];
            }

        }else{
            $result = ['state' => '后台上传配置出错！'];
        }

        return json_encode($result);
    }

}
