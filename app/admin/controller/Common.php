<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use org\util\HttpCurl;
use think\Request;
use think\Validate;
use think\Cache;
use app\admin\model\User;
use app\admin\model\AuthGroupAccess;
use app\admin\model\AuthGroup;
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
            $att_id = $request->param('id/d');
            if(!empty($att_id) && isset($att_id)){
                if(delete_file($att_id)){
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

    /**
     * email 发送邮件
     * @param  Request $request 请求信息
     * @return json
     */
	public function email(Request $request){
        if($request->isAjax()){
            $data = $request->post();
            // 验证数据
            $validate = new Validate([
                ['huitags', 'require', '邮件地址为空!'],
                ['title', 'require', '邮件标题为空!'],
                ['content', 'require', '邮件内容为空!'],
            ]);
            if(!$validate->check($data)) {
                return json(['error' => 1, 'msg' => $validate->getError()]);
            }else{
            	if(isset($data['aid']) && !empty($data['aid'])){
            		$file = '.' . get_file_url($data['aid'], '', false);
            	}else{
            		$file = null;
            	}
                 $data = [
					'title'   => $data['title'],
					'content' => $data['content'],
					'email'   => explode(',', $data['huitags']),
					'file'    => $file
                 ];
                 try{
                  	send_mailer($data);
                  	add_logs('发送邮件', 1);
                  	return json(['error' => 0]);
                 }catch(Exception $e) {
                    add_logs('发送邮件：' . $e->getMessage(), 0);
                    return json(['error' => 1, 'msg' => $e->getMessage()]);
                 }
            }
        }else{
            return $this->fetch();
        }
	}

    /**
     * clearcache 清除缓存
     * @param  Request $request 请求信息
     * @return json
     */
	public function clearcache(Request $request){
		if($request->isAjax()){
			# 清除cache缓存
			$cache = Cache::clear();
			# 清除temp缓存
			$temp = array_map('unlink', glob(TEMP_PATH . '*.php'));
			if(is_dir(TEMP_PATH)){
				rmdir(TEMP_PATH);
			}
	    	if($cache && $temp){
	    		add_logs('清除缓存', 1);
	    		return json(['error' => 0]);
	    	}else{
                add_logs('清除缓存', 0);
	    		return json(['error' => 1]);
	    	}
		}
	}

    /**
     * news 获取新闻
     * @param  Request $request 请求信息
     * @return json             新闻列表
     */
	public function news(Request $request){
		if($request->isAjax()){
			$data = $request->post('type');
			if(empty($data)){
				return json(['message' => '参数错误！', 'code' => 1]);
			}
			// Ajax实时新闻
			$curl = new HttpCurl();
			$url = 'http://wangyi.butterfly.mopaasapp.com/news/api';
			$data = [
				'type'  => $data,
				'page'  => 1,
				'limit' => 8
			];
			$result = $curl::get($url, $data);
			$news = json_decode($result, true);
			$newslist = $news['list'];
			// 截取新闻标题
			foreach($newslist as $k => $v){
				$newslist[$k]['title'] = msubstr($v['title'], 0, 15);
			}
			return json($newslist);
		}else{
			return '非法操作！';
		}

	}

}
