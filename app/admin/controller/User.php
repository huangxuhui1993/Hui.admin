<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;
use think\Validate;
use app\admin\model\User as UserModel;
use app\admin\model\AuthGroupAccess;
use app\admin\model\AuthGroup;

/**
 * 管理员控制器
 * Class User
 * @package app\admin\controller
 */
class User extends Base{

	private $bread = '管理列表';

    /**
     * 管理员列表
     * @return mixed
     */
	public function lis(Request $request){
		$where = [];
		# 关键字查询
		$keywords = preg_replace('# #','',$request->post('keywords'));
		$this->assign('keywords',$keywords);
		if(!empty($keywords)){
			$where['username|email|phone'] = ['like', '%'.$keywords.'%'];
		}

		$db = new UserModel();
		$result = $db->where($where)->order('id asc')->paginate(15);
		$this->assign('list',$result);
		$this->assign('count',$db->where($where)->count());

		# 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'管理员']));
		return $this->fetch();
	}

    /**
     * 添加管理员
     * @return mixed|void
     */
	public function add(Request $request){

		if($request->isPost()){

			$user = new UserModel();
			$aga = new AuthGroupAccess();
			
			$data = $request->post();

			# 数据验证
            $result = $this->validate($data,'User');

			if(true !== $result){
				return hui_redirect('User/add', ['code' => 'error', 'msg'  => $result, 'data' => $data]);
			}else{
				# 注册时间
				$data['regtime'] = time();
				if($user->allowField(true)->save($data)){
					# 添加用户组
					$aga->save([
						'uid' => $user->id,
						'group_id' => $data['group_id']
					]);
					add_logs('添加管理员', 1);
					return hui_redirect('User/lis', ['code' => 'success','msg' => '管理员添加成功！']);
				}else{
					add_logs('添加管理员', 0);
					return hui_redirect('User/lis', ['code' => 'error','msg' => '管理员添加失败！']);
				}
			}

			return;
		}

		# 用户组
		$ag = new AuthGroup();
		$group = $ag->where(['status' => 1])->select();
		$this->assign('group',$group);

		# 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'添加管理']));
		return $this->fetch();
	}

    /**
     * 编辑管理员
     * @return mixed|void
     */
	public function edit(Request $request){
		$id = $request->param('id/d');

		if(empty($id)){
			$this->error('参数错误！');
			return;
		}

		# 实例化模型	
		$ag = new AuthGroup();
		$aga = new AuthGroupAccess();

		if($request->isPost()){

			$user = new UserModel();
			$data = $request->post();
			# 验证数据
			$validate = new Validate([
				['id','require','抱歉缺少参数！'],
				['username','require|unique:user|min:5','请输入管理账号！|抱歉，该账号已存在！|账号最少五位！'],
				['password','min:6','密码最少六位！'],
				['email','email','请输入正确的邮箱地址！'],
				['group_id','require','请选择管理组！'],
				['state','require','请选择账号状态！']
			]);

			if(!$validate->check($data)) {
            	$with = ['code' => 'error', 'msg' => $validate->getError()];
	        	$params = ['id' => $id];
	            return hui_redirect('User/edit', $with, $params);
			}else{
				if($user->allowField(true)->save($data,['id' => $id])){
					# 修改用户组
					$aga->save(['group_id' => $data['group_id']],['uid' => $id]);
					
					add_logs('编辑管理员', 1);
					return hui_redirect('User/lis', ['code' => 'success','msg' => '管理员编辑成功！']);

				}else{

					add_logs('编辑管理员', 0);
					return hui_redirect('User/lis', ['code' => 'error','msg' => '管理员编辑失败！']);
					
				}
			}
			return;
		}

		# 获取全部原始数据
		$det_rs = UserModel::get($id)->getData();
		# 全部角色
		$group = $ag->where(['status' => 1])->select();
		$this->assign('group',$group);
		# 用户角色
		$aga = $aga->where(['uid' => $id])->find();
		$this->assign('aga',$aga);
		# 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'编辑管理']));
		$this->assign('rs',$det_rs);
		return $this->fetch();

	}

	/**
	 * 删除管理员
	 * @param  Request $request
	 * @return 
	 */
	public function del(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');

			if(isset($id) && !empty($id)){

				$user = UserModel::get($id);
				$aga = new AuthGroupAccess();
				# 特殊管理员无法删除
				if($user->id == 1){
					return hui_redirect('User/lis', ['code' => 'error','msg' => '该角色系统生成，无法删除！']);
					return;
				}
				if(!$user){
					return hui_redirect('User/lis', ['code' => 'error','msg' => '数据不存在！']);
					return;
				}
				if($user->delete()){
					if($aga->where(['uid' => $user->id])->delete()){
						
						add_logs('删除管理员', 1);
						return hui_redirect('User/lis', [
							'code' => 'success',
							'msg' => '管理员【'.$user->username.'】删除成功！'
						]);

					}else{
						add_logs('删除管理组', 0);
						return hui_redirect('User/lis', ['code' => 'error','msg' => '管理组删除失败！']);
					}
				}else{
					add_logs('删除管理员', 0);
					return hui_redirect('User/lis', ['code' => 'error','msg' => '管理员信息删除失败！']);
				}
			}else{
				return hui_redirect('User/lis', ['code' => 'error','msg' => '参数错误！']);
			}
		}
	}

	/**
	 * 管理员状态设置
	 * @param  Request $request
	 * @return 
	 */
	public function userState(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			$state = $request->param('state/d');
			if(empty($id) || !is_numeric($id) || !is_numeric($state)){
				return hui_redirect('User/lis', ['code' => 'error', 'msg' => '参数错误！']);
			}else{
				$user = UserModel::get($id);
				if($user){
					$data['state'] = $state == 0 ? 1 : 0;
					$msg = $state == 0 ? '启用' : '禁用';
					if($user->save($data)) {

						add_logs('管理员【' . $user->username. '】' . $msg, 1);

						return hui_redirect('User/lis', [
							'code' => 'success',
							'msg' => '管理员【' . $user->username . '】' . $msg . '成功！'
						]);

					}else{

						add_logs('管理员【' . $user->username . '】' . $msg, 0);

						return hui_redirect('User/lis', [
							'code' => 'error',
							'msg' => '管理员【' . $user->username . '】' . $msg . '失败！'
						]);

					}
				}else{
					return hui_redirect('User/lis', ['code' => 'error', 'msg' => '数据不存在！']);
				}
			}
		}
	}

}
