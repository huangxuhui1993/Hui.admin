<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;
use think\Validate;
use think\Db;
use think\Config;
use \Exception;

class Email extends Base{

    public function _initialize(){
        parent::_initialize();
    }

	// 邮箱列表
	public function lis(){
		$db = Db::name('email');
		$list = $db->select();
		$this->assign('list', $list);
		return $this->fetch();
	}

	// 添加邮箱
	public function add(Request $request){
		if($request->isPost()){
			$db = Db::name('email');

			$form = $request->post();
			$data = remove_array_spaces($form);

            // 验证数据
            $validate = new Validate([
                ['email', 'require', '邮件地址为空！'],
                ['email', 'email', '请输入正确的邮箱地址！']
            ]);
			if(!$validate->check($data)){
				return hui_redirect('Email/lis', [
					'code' => 'error',
					'msg' => $validate->getError(),
					'data' => $data
				]);
			}else{
				if($db->insert($data)){
					add_logs('添加邮箱', 1);
					return hui_redirect('Email/lis', [
						'code' => 'success',
						'msg' => '添加邮箱成功！'
					]);
				}else{
					add_logs('添加邮箱', 0);
					return hui_redirect('Email/lis', [
						'code' => 'error',
						'msg' => '添加邮箱失败！'
					]);
				}
			}
		}else{
			return '非法操作！';
		}
	}

	// 编辑邮箱
	public function edit(Request $request){
		if($request->isAjax()){
			$db = Db::name('email');

			$form = $request->post();
			$data = remove_array_spaces($form);

            // 验证数据
            $validate = new Validate([
            	['id', 'require', '参数缺失！'],
                ['email', 'require', '邮件地址为空！'],
                ['email', 'email', '请输入正确的邮箱地址！']
            ]);

			if(!$validate->check($data)){
				return json([
					'state' => 0,
					'msg' => $validate->getError()
				]);
			}else{
				$data['time'] = time();
				if($db->where('id', $data['id'])->update($data)){
					add_logs('编辑邮箱' . $data['email'], 1);
					return json([
						'state' => 1,
						'msg' => '编辑成功！'
					]);
				}else{
					add_logs('编辑邮箱' . $data['email'], 0);
					return json([
						'state' => 0,
						'msg' => '编辑失败！'
					]);
				}
			}
		}else{
			return '非法操作！';
		}
	}

    /**
     * send 发送邮件页面
     * @param  Request $request 请求信息
     * @return json
     */
	public function send(Request $request){
        if($request->isAjax()){

            $form = $request->post();
			$data = remove_array_spaces($form);
            
            // 验证数据
            $validate = new Validate([
                ['emails', 'require', '邮件地址为空!'],
                ['title', 'require', '邮件标题为空!'],
                ['content', 'require', '邮件内容为空!'],
            ]);
            if(!$validate->check($data)){
                return json(['error' => 1, 'msg' => $validate->getError()]);
            }else{
            	return json(['error' => 0, 'data' => $data]);
            }
        }else{
            return $this->fetch();
        }
	}

	// 发送邮件操作
	public function sendMailer(Request $request){
		$data = $request->post();
    	$db = Db::name('email');

    	$file = isset($data['aid']) && is_numeric($data['aid']) ? '.' . get_file_url($data['aid'], '', false) : null;
    	
    	$list = $db->where('id', 'in', $data['emails'])->select();

    	if($list){
    		$emails = [];
    		foreach($list as $key => $value){
    			$emails[] = $value['email'];
    		}

			try{
				send_mailer([
					'title'   => $data['title'],
					'content' => $data['content'],
					'email'   => $emails,
					'file'    => $file
				]);
				add_logs('发送邮件', 1);
				return json(['error' => 0]);
			}catch(Exception $e) {
				add_logs('发送邮件：' . $e->getMessage(), 0);
				return json(['error' => 1, 'msg' => $e->getMessage()]);
			}
    	}else{
    		return json(['error' => 1, 'msg' => '请选择邮箱！']);
    	}
	}

}
