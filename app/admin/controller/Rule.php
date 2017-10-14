<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;
use app\admin\model\AuthRule as AuthRuleModel;

/**
 * 权限控制器
 * Class Rule
 * @package app\admin\controller
 */
class Rule extends Base{

	private $bread = '权限管理';

	public function lis(){
		$db = new AuthRuleModel();
		$list = self::get_auth_rule($pid = 0," ┣━  ");
		$this->assign('list',$list);
		$count = $db->where('status','=',1)->count();
		$this->assign('count',$count);

		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'权限列表']));
		return $this->fetch();
	}

    /**
     * 添加权限
     * @param Request $request 请求信息
     * @return mixed|void
     */
	public function add(Request $request){
		$db = new AuthRuleModel();
		if($request->isPost()){
			$data = $request->post();
        	// 数据验证
            $result = $this->validate($data,'AuthRule');
            if(true !== $result){
                $this->redirect('Rule/add','',302,['code' => 'error','msg' => $result,'data' => $data]);
            }else{
				if($db->allowField(true)->save($data)){
					system_logs('添加权限规则',session('uname'),1);
					$this->redirect('Rule/lis','',302,['code' => 'success','msg' => '权限添加成功！']);
				}else{
					system_logs('添加权限规则',session('uname'),0);
					$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '权限添加失败！']);
				} 
            }
            return;
		}
		$list = self::get_auth_rule($pid = 0," ┣━  ");
		$this->assign('list',$list);
		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'添加权限']));
		return $this->fetch();
	}

    /**
     * 编辑权限
     * @param Request $request 请求信息
     * @return mixed|void
     */
	public function edit(Request $request){
		$id = $request->param('id/d');
		$db = new AuthRuleModel();
		if(isset($id) && !empty($id)){
			if($request->isPost()){
				$data = $request->post();
	        	// 数据验证
	            $result = $this->validate($data,'AuthRule');
	            if(true !== $result){
                	$this->redirect('Rule/edit',['id' => $id],302,['code' => 'error','msg' => $result,'data' => $data]);
	            }else{
					if($db->allowField(true)->save($data,['id' => $data['id']])){
						system_logs('编辑权限规则',session('uname'),1);
						$this->redirect('Rule/lis','',302,['code' => 'success','msg' => '权限编辑成功！']);
					}else{
						system_logs('编辑权限规则',session('uname'),0);
						$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '您没有编辑权限信息！']);
					} 
	            }
	            return;
			}

			$list = self::get_auth_rule($pid = 0," ┣━  ");
			$this->assign('list',$list);

			// 权限详情
			$det_rs = AuthRuleModel::get($id)->getData();
			$this->assign('rs',$det_rs);

			// 面包屑
			$this->assign('bread',breadcrumb([$this->bread,'编辑权限']));
			return $this->fetch();
		}else{
			$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '参数错误！']);
		}

	}

    /**
     * 删除权限
     * @param Request $request 请求信息
     */
	public function del(Request $request){
		$db = new AuthRuleModel();
		if($request->isGet()){
			$id = $request->param('id/d');
			if(isset($id) && !empty($id)){
				if($db->where(['pid' => $id])->select()){
					$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '请先删除子权限！']);
				}else{
					$result = AuthRuleModel::get($id);
					if($result->delete()){
						system_logs('删除权限规则',session('uname'),1);
						$this->redirect('Rule/lis','',302,['code' => 'success','msg' => '权限【'.$result->title.'】删除成功！']);
					}else{
						system_logs('删除权限规则',session('uname'),0);
						$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '权限【'.$result->title.'】删除失败！']);
					}
				}
			}else{
				$this->redirect('Rule/lis','',302,['code' => 'error','msg' => '参数错误！']);
			}
		}
	}

	/**
	 * 获取权限规则
	 * @param  int $pid 父级id
	 * @param  string $path 分隔符号
	 * @return array
	 */
	private static function get_auth_rule($pid,$path){
		global $a_arr;
		$db = new AuthRuleModel();
		//读取数据
		$list = $db->where('pid','=',$pid)->order('pid')->select();
		if (is_array($list)){
			foreach($list as $val){
				if ($val["pid"] == $pid){
					if ($val["pid"] == 0){
						$a_arr[] = ["id" => $val["id"],"pid" => $val["pid"],"title" => $val["title"],"name" => $val["name"],"status" => $val["status"]];
					}else{
						$a_arr[] = ["id" => $val["id"],"pid" => $val["pid"],"title" => $path.$val["title"],"name" => $val["name"],"status" => $val["status"]];
					}
					self::get_auth_rule($val["id"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$path);
				}
			}
		}
		return $a_arr;
	}

}
