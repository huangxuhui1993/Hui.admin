<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;
use think\Config;
use app\admin\model\Models as ModelsModel;
use app\admin\model\Channel as ChannelModel;

class Channel extends Base{

	private $bread = '栏目导航';

	/**
	 * 栏目列表
	 * @Author   Hui
	 * @DateTime 2017-07-04T21:45:48+0800
	 * @return 
	 */
	public function lis(){
		$list = get_channel($pid = 0," ┣━  ");
		$this->assign('list',$list);

		# 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '栏目列表']));
		return $this->fetch();
	}
	
	// 添加栏目表单
	public function add(){
		$models = new ModelsModel();

		// 获取栏目
		$c_list = get_channel($pid = 0, "┣━ ");
		$this->assign('c_list', $c_list);

		// 栏目模型
		$m_list = $models->field("id,name")->order("sorting asc")->select();
		$this->assign("m_list", $m_list);

		// 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '栏目列表','添加栏目']));
		return $this->fetch();
	}
	
	// 添加栏目ajax操作
	public function addAjax(Request $request){
		if($request->isAjax()){
			$db = new ChannelModel();
			$data = $request->post();

			// 检测是否为外部栏目
			$data['flag'] = $data['model'] > 0 ? 1 : 0;
        	// 数据验证
            $result = $this->validate($data, 'Channel');
            if(true !== $result){
                return json(['message' => $result, 'code' => 1]);
            }else{
				$db->data([
            		'pid' 		=> $data['pid'],
            		'cname' 	=> $data['cname'],
            		'ename' 	=> $data['ename'],
					'model' 	=> $data['model'],
					'mname' 	=> $data['model'] > 0 ? $data['mname'] : '',
					'outurl' 	=> $data['model'] == -1 ? $data['outurl'] : '',
					'sorting' 	=> $data['sorting'],
					'keywords' 	=> $data['keywords'],
					'describle' => $data['describle'],
            		'listnum' 	=> $data['listnum'],
					'status' 	=> $data['status'],
            	]);
				if($db->allowField(true)->save()){
					// 生成更新URL链接
					$curl = self::generateChannelUrl($data['model'],$data['mname'],$db->id);
					$db->save(['curl' => $curl], ['id' => $db->id]);
					return json(['message' => '栏目添加成功！','code' => 2]);
				}else{
					return json(['message' => '栏目添加失败！','code' => 1]);
				} 
            }
            return;
		}else{
			return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '请您正常操作！']);
		}
	}

	// 编辑栏目表单
	public function edit(Request $request){
		$models = new ModelsModel();

		$id = $request->param('id/d');

		if(!isset($id) || empty($id)){
			return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '参数错误！']);
		}

		// 获取栏目
		$c_list = get_channel($pid = 0, "┣━ ");
		$this->assign('c_list', $c_list);

		// 栏目模型
		$m_list = $models->field("id,name")->order("sorting asc")->select();
		$this->assign("m_list", $m_list);

		// 获取栏目原始数据
		$rs = ChannelModel::get($id)->getData();
		$this->assign('rs', $rs);
		
		// 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '栏目列表', '添加栏目']));
		return $this->fetch();
	}
	
	// 编辑栏目ajax操作
	public function editAjax(Request $request){
		if($request->isAjax()){
			$db = new ChannelModel();
			$data = $request->post();

			// 检测是否为外部栏目
			$data['flag'] = $data['model'] > 0 ? 1 : 0;
        	// 数据验证
            $result = $this->validate($data,'Channel');
            if(true !== $result){
                return json(['message' => $result, 'code' => 1]);
            }else{
				$val = [
					'id' 		=> $data['id'],
            		'pid' 		=> $data['pid'],
            		'cname' 	=> $data['cname'],
            		'ename' 	=> $data['ename'],
					'model' 	=> $data['model'],
					'mname' 	=> $data['model'] > 0 ? $data['mname'] : '',
					'outurl' 	=> $data['model'] == -1 ? $data['outurl'] : '',
					'sorting' 	=> $data['sorting'],
					'keywords' 	=> $data['keywords'],
					'describle' => $data['describle'],
            		'listnum' 	=> $data['listnum'],
					'status' 	=> $data['status'],
            	];
				$where = ['id' => $data['id']];
				if($db->allowField(true)->save($val,$where)){
					// 生成更新URL链接
					$curl = self::generateChannelUrl($data['model'],$data['mname'],$data['id']);
					$db->save(['curl' => $curl],$where);
					return json(['message' => '栏目编辑成功！', 'code' => 2]);
				}else{
					return json(['message' => '栏目编辑失败！', 'code' => 1]);
				} 
            }
            return;
		}else{
			return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '请您正常操作！']);
		}
	}

	/**
	 * 删除栏目
	 * @Author   Hui
	 * @DateTime 2017-07-04T22:23:38+0800
	 * @return 
	 */
	public function del(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			if(empty($id)){
				return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '参数错误！']);
			}else{
				if(self::isChild($id)){
					return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '请先删除子栏目！']);
				}else{
					$db = ChannelModel::get($id);
					if($db->delete()){
						add_logs('栏目【' . $db->cname . '】删除', 1);
						return hui_redirect('Channel/lis', ['code' => 'success', 'msg' => '栏目【' . $db->cname . '】删除成功！']);
					}else{
						add_logs('栏目删除', 0);
						return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '栏目删除失败！']);
					}
				}
			}
		}else{
			return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '请您正常操作！']);
		}
	}

	/**
	 * 栏目属性状态
	 * @Author   Hui
	 * @DateTime 2017-07-02T23:12:19+0800
	 * @param    Request $request
	 * @return   
	 */
	public function channelStatus(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			$status = $request->param('status/d');
			if(!isset($id) || !isset($status)){
				return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '参数错误！']);
			}else{
				$channel = ChannelModel::get($id);
				if($channel){
					$data['status'] = $status == 0 ? 1 : 0;
					$msg = $status == 0 ? '启用' : '禁用';
					if($channel->save($data)) {
						add_logs('栏目状态设置' . $msg, 1);
						return hui_redirect('Channel/lis', ['code' => 'success', 'msg' => "栏目【" . $channel->cname . "】{$msg}成功！"]);
					}else{
						add_logs('栏目状态设置' . $msg, 0);
						return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => "栏目【" . $channel->cname . "】{$msg}失败！"]);
					}
				}else{
					return hui_redirect('Channel/lis', ['code' => 'error', 'msg' => '数据不存在！']);
				}
			}
		}
	}

	/**
	 * sorting 排序
	 * @param  Request $request
	 * @return json
	 */
	public function sorting(Request $request){
		if($request->isAjax()){
			$form = $request->param();
			$data = remove_array_spaces($form);

			$id = $data['id'];
			$channel = ChannelModel::get($id);
			if($channel){
				$data['sorting'] = $data['sort'];
				if($channel->allowField(true)->save($data)){
					add_logs('栏目排序设置，ID:' . $id, 1);
					return json(['state' => 1, 'msg' => "栏目【" . $channel->cname . "】排序成功！"]);
				}else{
					add_logs('栏目排序设置，ID:' . $id, 0);
					return json(['state' => 0, 'msg' => "栏目【" . $channel->cname . "】排序失败！"]);
				}
			}else{
				return json(['state' => 0, 'msg' => '数据不存在！']);
			}
		}else{
			return json(['state' => 0, 'msg' => '请您正常操作！']);
		}
	}

	/**
	 * 获取所属栏目信息
	 * @param  Request $request 
	 * @return 
	 */
	public function getChannel(Request $request){
		$id = $request->param('id/d');
		if(empty($id)){
			return json(['message' => '抱歉，参数错误', 'code' => 1]);
		}else{
			$db = new ChannelModel();
			$result = $db->field('mname,model,listnum')->where(['id' => $id])->find();
			if(!$result){
				$data = ['message' => '', 'code' => 1];
			}else{
				$data = [
					'mname' => $result['mname'],
					'model' => $result['model'],
					'listnum' => $result['listnum'],
					'code' => 2
				];	
			}
			return json($data);
		}
	}

	/**
	 * 栏目是否拥有下级栏目
	 * @param  integer $id 栏目ID
	 * @return boolean
	 */
	private static function isChild($id){
		$db = new ChannelModel();
		$result = $db->where(['pid' => $id])->find();	
		if(empty($result)){
			return false;
		}else{ 
			return true;
		}
	}

	/**
	 * 生成导航链接 导航访问路径
	 * @param integer $model 模型ID
	 * @param string  $mname 模块名称
	 * @param integer $cid 模块ID
	 * @return string curl
	 */
	private static function generateChannelUrl($model,$mname,$cid){
	    if($model == -1){
	        return "";
	    }else{
			$mname = strtolower(trim($mname));
	        $module = Config::get('default_module');
	        return "/{$module}/{$mname}/index/cid/{$cid}";
	    }
	}
}
