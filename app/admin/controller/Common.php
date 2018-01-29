<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Config;
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

    public function folder(){
    	
    	$hui_files_path = Config::get('hui_files_path');
    	
    	$list = $this->scanAll(HUI_FILES);
    	$list = array_merge($list, [['id' => 1, 'pId' => 0, 'name' => $hui_files_path, 'open' => true]]);
    	$this->assign('list', $list);
    	return $this->fetch();
    }

	public function scanAll($dir, $pid = 1){
		global $file_list;
		if(is_dir($dir)){
			$children = scandir($dir);
			foreach($children as $key => $value){
				if($value !== '.' && $value !== '..'){
					$child = $pid == 1 ? $dir . $value : $dir . '/' . $value;
					$id = intval($pid . $key);
					if(is_file($child)){
						$file_list[] = [
							'id' => $id,
							'pId' => $pid,
							'name' => $value
						];
					}elseif(is_dir($child)){
						$file_list[] = [
							'id' => $id,
							'pId' => $pid,
							'name' => $value
						];
						$this->scanAll($child, $id);
					}

				}
			}
		}
		return $file_list;
	}

    public function folderAdd(){
    	return $this->fetch('folder_add');
    }

    /**
     * positioning 地图定位
     * @param  Request $request
     */
    public function positioning(Request $request){
    	return $this->fetch();
    }

    /**
     * networkSpeed 检测网速页面
     * @param  Request $request
     */
    public function networkSpeed(Request $request){
    	header("Cache-Control: no-cache, must-revalidate"); // 清除页面缓存
    	return $this->fetch('network_speed');
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
				$this->redirect('Common/userSetup','',302,['code' => 'error','msg' => $validate->getError()]);
			}else{
				if($user->allowField(true)->save($data,['id'=>$id])){
					add_logs('账号设置', 1);
					$this->redirect('Common/userSetup','',302,['code' => 'success','msg' => '设置成功！']);
				}else{
					add_logs('账号设置', 0);
					$this->redirect('Common/userSetup','',302,['code' => 'error','msg' => '设置失败！']);
				}
			}
			return;
		}
		# 获取全部原始数据
		$det_rs = User::get($id)->getData();
		$this->assign('rs',$det_rs);
		return $this->fetch('user_setup');
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
