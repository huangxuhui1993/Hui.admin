<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Config;
use think\Cookie;
use think\Request;
use think\Validate;
use app\admin\model\User;
use \Exception;

/**
 * 公共方法控制器
 * Class Common
 * @package app\admin\controller
 */
class Common extends Base{
    
    public function _initialize(){
        parent::_initialize();
    }

    public function dotips(Request $request){
    	$autoid = $request->param('autoid');
		if ($autoid == 10) {
			$message = "恭喜，任务执行完成！";
			$jumpUrl = '';
			$url = 'javascript:void(0);';
		}else{
			$autoid = $autoid + 1;
			$message = "操作步骤【HUI_{$autoid}】，完成！";
			$jumpUrl = url('Common/dotips', ['autoid' => $autoid]);
			$url = '';
		}
		$this->assign('message', $message);
		$this->assign('jumpUrl', $jumpUrl);
		$this->assign('waitSecond', 1);
		$this->assign("url", $url);
		return $this->fetch('Public/tips');
    }

    // 消息列表
    public function message_lis(){
    	return '消息数量：' . Cookie::get('messageCount') . ',弹窗ID：' . Cookie::get('messageIndexID');
    }

    // 文件上传页面
    public function uploadPage(Request $request){
    	$form = $request->param();
		$data = remove_array_spaces($form);

		# 验证数据
		$validate = new Validate([
			['type', 'require', 'type参数缺失！'],
			['tag', 'require', 'tag参数缺失！']
		]);

		if(!$validate->check($data)){
			die($validate->getError());
		}else{
			$config = get_upload_config($data['type']); // 获取上传配置
			if($config['state'] == 1){
		        $this->assign('title', get_file_type($data['type']));
		        $this->assign('type', $data['type']);
		        $this->assign('size', $config['size']);
		        $this->assign('ext', $config['ext_string']);
		        $this->assign('chunked_size', $config['chunked_size']);
		        $this->assign('tag', $data['tag']);
		    	return $this->fetch();
	        }else{
	        	die($config['message']);
	        }
		}
    }

    /**
     * positioning 地图定位
     * @param  Request $request
     */
    public function positioning(){
    	return $this->fetch();
    }

    /**
     * networkSpeed 检测网速页面
     * @param  Request $request
     */
    public function networkSpeed(){
    	header("Cache-Control: no-cache, must-revalidate"); // 清除页面缓存
    	return $this->fetch();
    }

    /**
     * 账号设置
     * @param  Request $request
     * @return 
     */
    public function userSetup(Request $request){
		$id = session('uid');
		if($request->isPost()){
			$user = new User();
			$data = $request->post();
			# 验证数据
			$validate = new Validate([
				['id','require','抱歉缺少参数！'],
				['username','require|unique:user|min:5','请输入管理账号！|抱歉，该账号已存在！|账号最少五位！'],
				['password','min:6','密码最少六位！'],
				['email','email','请输入正确的邮箱地址！']
			]);
			if(!$validate->check($data)) {
				return hui_redirect('Common/userSetup', ['code' => 'error','msg' => $validate->getError()]);
			}else{
				if($user->allowField(true)->save($data,['id'=>$id])){
					add_logs('账号设置', 1);
					return hui_redirect('Common/userSetup', ['code' => 'success','msg' => '设置成功！']);
				}else{
					add_logs('账号设置', 0);
					return hui_redirect('Common/userSetup', ['code' => 'error','msg' => '设置失败！']);
				}
			}
			return;
		}
		# 获取全部原始数据
		$det_rs = User::get($id)->getData();
		$this->assign('rs',$det_rs);
		return $this->fetch();
    }

    /**
     * 清除上传文件
     * @param Request $request
     * @return \think\response\Json
     */
    public function deleteFile(Request $request){
        if($request->isAjax()) {
            $id = $request->param('id/d');
            if(!empty($id)){
                if(delete_file($id)){
                    add_logs('清除上传文件', 1);
                    return json(['error' => 0]);
                }else{
                    add_logs('清除上传文件', 0);
                    return json(['error' => 1]);
                }
            }
        }
    }

    /**
     * 查看源代码
     * @param Request $request 请求信息
     * @return mixed
     */
	public function codemirror(Request $request){
		$path = remove_spaces($request->param('path'));
		if(!empty($path)){
			$file = ROOT_PATH . $path;
			if(!is_file($file)){
				$code = '文件不存在！';
			}elseif(!is_readable($file)){
	            $code = '文件不可读！';
	        }else{
				# 读取文件内容
				$str = file_get_contents($file);
				$code = htmlentities($str);
			}
		}else{
			$code = '文件路径为空！';
		}
		add_logs("查看源代码{$file}", 1);
		$this->assign('code', $code);
		$this->assign('file', str_replace('\\', '/', $file));
		return $this->fetch('public/codemirror');
	}

    /**
     * 修改源代码
     * @param Request $request 请求信息
     * @return \think\response\Json
     */
	public function savecode(Request $request){
		if($request->isAjax()){
			$data = $request->post();
			// 验证数据
			$validate = new Validate([
				['file', 'require', '文件路径为空！'],
				['code', 'require', '代码内容为空！'],
			]);
			if(!$validate->check($data)) {
				return json(['error' => 1, 'msg' => $validate->getError()]);
			}else{
				$file = $data['file'];
				if(!is_file($file)){
					return json(['error' => 1, 'msg' => '文件不存在！']);
				}elseif(!is_writable($file)){
                    return json(['error' => 1, 'msg' => '文件不可写！']);
                }else{
					# 内容写入文件
					if(file_put_contents($file, $data['code'])){
						add_logs("修改源代码{$file}", 1);
						return json(['error' => 0, 'msg' => '代码修改成功！']);
					}else{
                        add_logs("修改源代码{$file}", 0);
                        return json(['error' => 0, 'msg' => '代码修改失败！']);
                    }
				}	
			}
		}else{
			add_logs('修改源代码，非法操作！', 0);
			return json(['error' => 1, 'msg' => '非法操作！']);
		}
	}

}
