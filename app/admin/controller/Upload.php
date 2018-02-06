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
        set_time_limit(0);
        ini_set('memory_limit', '512M');
        ini_set('magic_quotes_runtime', 0);
        parent::_initialize();
    }

    /**
     * 文件上传
     * @param Request $request
     * @return \think\response\Json
     */
	public function index(Request $request){
        if($request->isPost()){

            $is_upload = Config::get('websetup.is_upload'); // 是否开启上传
            if($is_upload == 0){
                return json(['error' => 1, 'message' => '系统未开启上传功能，无法上传文件！']);
            }else{
                $data = $request->post();
                
                if(empty($data['flag'])){
                    return json(['error' => 1, 'message' => '上传类型为空！']);
                }else{
                    $result = $this->_upload($data, $request);
                    return json($result);
                }  
            }

        }else{
           return json(['error' => 1, 'message' => '非法操作！']);
        }
	}

    /**
     * 处理上传文件
     * @param string $data 请求数据
     * @param Request $request 请求对象
     * @param string $fieldName 表单name
     * @return array
     */
    private function _upload($data, $request, $fieldName = 'file'){
        $config = get_upload_config($data['flag']); // 获取上传配置

        if($config['state'] == 1){

            // 获取表单上传文件
            $file = $request->file($fieldName);
            // 判断是否分片
            $chunk_state = isset($data['chunk']) && isset($data['chunks']) ? true : false;
            // 若是分片文件移动文件到临时目录
            $url = $chunk_state ? 'interim' . DS . md5($data['guid']) : $config['url'];
            
            $validate = [
                'size' => $config['size'],
                'ext' => $config['ext']
            ];
            $actual_path = HUI_FILES . $config['url'];          // 文件实际存储路径
            $current_path = HUI_FILES . $url;                   // 文件当前上传路径
            $savename = $chunk_state ? $data['chunk'] : true;   // 设置文件名
            $info = $file->rule('uniqid')->validate($validate)->move($current_path, $savename);
            if($info){
                $add_data = [
                    'uid'         => session('uid'),
                    'type'        => $data['flag'],
                    'title'       => $data['name'],
                    'ext'         => $info->getExtension(),
                    'create_time' => time()
                ];
                // 数据库存储上传文件数据
                $id = 0;
                $db = new AttachModel();
                if($chunk_state){
                    if($data['chunk'] + 1 == $data['chunks']){ // 文件全部上传 执行合并文件
                        $data['ext'] = $info->getExtension();
                        $merge_res = $this->mergeFile($data, $current_path, $actual_path, $config['url']); // 合并临时并移动文件
                        if($merge_res){
                            $add_data['name'] = $merge_res['name'];
                            $add_data['url'] = $merge_res['url'];
                            $add_data['size'] = $merge_res['size'];
                            $db->save($add_data);
                            $id = $db->id;
                        }else{
                            return ['error' => 1, 'message' => '文件合并失败！'];
                        }
                    }
                }else{
                    $add_data['name'] = $info->getFilename();
                    $add_data['url'] = $url . '/' . $info->getSaveName();
                    $add_data['size'] = $info->getSize();
                    $db->save($add_data);
                    $id = $db->id;
                }
                return [
                    'error' => 0,
                    'message' => '文件上传成功！',
                    'id' => $id,
                    'ext' => $info->getExtension(),
                    'name' => $data['name'],
                    'chunks_path' => $chunk_state ? $current_path : ''
                ];

            }else{
                return ['error' => 1, 'message' => $file->getError()]; // 上传错误提示错误信息
            }
        }else{
            return ['error' => 1, 'message' => $config['message']];
        }
    }

    /**
     * mergeFile 合并分片文件
     * @param  array  $data         数据
     * @param  string $current_path 当前文件上传目录
     * @param  string $actual_path  文件实际存储路径
     * @param  string $conurl       文件实际存储文件夹
     * @return array
     */
    private function mergeFile($data, $current_path, $actual_path, $conurl){
        $ext = '.' . $data['ext'];                  // 文件格式
        $name = uniqid() . $ext;                    // 合并后文件名
        $actual_file = $actual_path . DS . $name;   // 合并后文件绝对路径
        $out = fopen($actual_file, 'wb');
        if(flock($out, LOCK_EX)){
            for($i = 0; $i < $data['chunks']; $i++){
                $current_file = $current_path . DS . $i . $ext;
                $in = fopen($current_file, 'r');
                while($buff = fread($in, 4096)){
                    fwrite($out, $buff); 
                }
                fclose($in);
                $chunks_arr[] = $current_file;
            }
            flock($out, LOCK_UN);
        }
        fclose($out);
        $result = [
            'name' => $name,
            'url' =>  $conurl . '/' . $name,
            'size' => filesize($actual_file),
            'chunks_arr' => $chunks_arr
        ];
        return $result;
    }

    /**
     * delChunks 删除分片临时文件
     * @param    Request  $request
     * @return   json
     */
    public function delChunks(Request $request){
        if($request->isPost()){
            $chunks_path = $request->post('chunks_path');
            if(remove_dir($chunks_path)){
                return json(['error' => 0, 'message' => '分片文件清除成功！']);
            }else{
                return json(['error' => 1, 'message' => '分片文件清除失败！']);
            }
        }else{
            return json(['error' => 1, 'message' => '非法操作！']);
        }
    }

}
