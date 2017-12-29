<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Config;
use app\admin\model\Config as ConfigModel;
use app\admin\model\Logs as LogsModel;

/**
 * 系统配置控制器
 * Class System
 * @package app\admin\controller
 */
class System extends Base{

	private $bread = '系统管理';

    /**
     * 配置管理
     * @param Request $request
     * @return mixed
     */
	public function config(Request $request){
		$where = [];
		# 关键字查询
		$keywords = preg_replace('# #','',$request->post('keywords'));
		$this->assign('keywords',$keywords);
		if(!empty($keywords)){
			$where['name|title'] = ['like', '%'.$keywords.'%'];
		}

		$db = new ConfigModel();
		$list = $db->where($where)->order('id asc','sort asc')->paginate(15);
		$this->assign('list',$list);

		$this->assign('count',$db->where($where)->count());

		$this->assign('bread',breadcrumb([$this->bread,'配置管理']));
		return $this->fetch();
	}

    /**
     * 添加配置项
     * @param Request $request
     * @return mixed|void
     */
	public function add(Request $request){
		if($request->isPost()){
			$data = $request->post();
			// 数据验证
            $result = $this->validate($data,'Config');
            if(true !== $result){
		        add_logs($result, 0);
                $this->redirect('system/add','',302,['code' => 'error','msg' => $result,'data' => $data]);
            }else{
            	$db = new ConfigModel();
				if($db->allowField(true)->save($data)){
			        add_logs('添加配置项', 1);
					$this->redirect('system/config','',302,['code' => 'success','msg' => '添加配置项成功！']);
				}else{
					add_logs('添加配置项', 0);
					$this->redirect('system/config','',302,['code' => 'error','msg' => '添加配置项失败！']);
				}
            }
            return;
		}
		$this->assign('bread',breadcrumb([$this->bread,'配置管理','添加配置']));
		return $this->fetch();
	}

    /**
     * 编辑配置项
     * @param Request $request
     * @return mixed|void
     */
	public function edit(Request $request){
		$id = $request->param('id/d');
		if(empty($id)){
			$this->error('参数错误！');
			return;
		}
		$db = new ConfigModel();
		if($request->isPost()){
			$data = $request->post();
			// 数据验证
            $result = $this->validate($data,'Config');			
            if(true !== $result){
                $this->redirect('system/edit',['id' => $id],302,['code' => 'error','msg' => $result]);
            }else{
				if($db->allowField(true)->save($data,['id' => $id])){
					add_logs('编辑配置项', 1);
					$this->redirect('system/config','',302,['code' => 'success','msg' => '配置项编辑成功！']);
				}else{
					add_logs('编辑配置项', 0);
					$this->redirect('system/config','',302,['code' => 'error','msg' => '配置项编辑失败！']);
				}
            }
            return;
		}

		// 获取全部原始数据
		$det_rs = ConfigModel::get($id)->getData();
		$this->assign('rs',$det_rs);
		$this->assign('bread',breadcrumb([$this->bread,'配置管理','编辑配置']));
		return $this->fetch();
	}

    /**
     * 删除配置项
     * @param Request $request
     */
	public function del(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			if(!empty($id)){
				$db = ConfigModel::get($id);
				if($db){
					if($db->delete()){
						add_logs('删除配置项', 1);
						$this->redirect('system/config','',302,['code' => 'success','msg' => '配置项删除成功！']);
					}else{
						add_logs('删除配置项', 0);
						$this->redirect('system/config','',302,['code' => 'error','msg' => '配置项删除失败！']);
					}
				}else{
					$this->redirect('system/config','',302,['code' => 'error','msg' => '数据不存在！']);
				}
			}else{
				$this->redirect('system/config','',302,['code' => 'error','msg' => '参数错误！']);
			}
		}else{
			add_logs('删除配置项，非法操作', 0);
			$this->redirect('system/config','',302,['code' => 'error','msg' => '请您正常操作！']);
		}
	}

    /**
     * 网站设置
     * @param Request $request
     * @return mixed|void
     */
	public function websetup(Request $request){
		$group = $request->param('group/d');
		if(empty($group) || !isset($group)){
			$this->error('参数错误！');
			return;
		}

		$title = [2 => '网站配置',3 => '接口配置',4 => '文件配置'];

		$db = Db::name('config');

        if($request->isPost()){
            $data = $request->post();
			// 清除数据空格
			foreach($data as $k => $v){
				$data[$k] = preg_replace('# #','',$v);
			}

            // 批量更新配置值
        	foreach($data as $name => $value){
        		$map['group'] = ['eq',$group];
        		$map['name'] = ['eq',$name];
        		$db->where($map)->update(['value' => $value]);
        	}

			if(self::updateConfig()){
				add_logs($title[$group] . '更新', 1);
				$this->redirect('system/websetup',['group' => $group],302,['code' => 'success','msg' => $title[$group].'更新成功！']);
			}else{
				add_logs($title[$group] . '更新', 0);
				$this->redirect('system/websetup',['group' => $group],302,['code' => 'error','msg' => $title[$group].'更新失败！']);
			}
            return;
        }

		// 获取配置项
		unset($where);
		$where['group'] = ['eq',$group];
		$where['status'] = ['eq',1];
		$list = $db->where($where)->order('sort asc')->select();
		$this->assign('list',$list);
		$this->assign('group',$group);

		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,$title[$group]]));
		return $this->fetch();
	}

    /**
     * 系统日志
     * @param Request $request
     * @return mixed
     */
	public function logs(Request $request){
		$where = [];
		# 关键字查询
		$keywords = preg_replace('# #','',$request->post('keywords'));
		$this->assign('keywords',$keywords);
		if(!empty($keywords)){
			$where['username|ip|operate'] = ['like', '%'.$keywords.'%'];
		}

		$db = new LogsModel();
		$list = $db->where($where)->order('id desc')->paginate(15);
		$this->assign('list',$list);

		$this->assign('count',$db->where($where)->count());

		$this->assign('bread',breadcrumb([$this->bread,'系统日志']));
		return $this->fetch();
	}

    /**
     * 删除日志
     * @param Request $request
     */
	public function dellog(Request $request){
		if($request->isPost()){
			$data = $request->post();
			if(!isset($data['id']) || !is_array($data['id']) || empty($data) || empty($data['id'])){
				$this->redirect('system/logs','',302,['code' => 'error','msg' => '请选择要删除的数据！']);
			}else{
				foreach($data['id'] as $k => $v){
					$db = LogsModel::get($v);
					if($db){
						$db->delete();
					}else{
						add_logs('批量删除日志', 0);
						$this->redirect('system/logs','',302,['code' => 'error','msg' => '批量删除失败！']);
						die();
					}
				}
				add_logs('批量删除日志', 1);
				$this->redirect('system/logs','',302,['code' => 'success','msg' => '批量删除成功！']);
			}
		}else{
			$id = $request->param('id/d');
			if(!isset($id) || empty($id)){
				$this->redirect('system/logs','',302,['code' => 'error','msg' => '参数错误！']);
			}else{
				$db = LogsModel::get($id);
				if($db){
					if($db->delete()){
						add_logs('删除日志', 1);
						$this->redirect('system/logs','',302,['code' => 'success','msg' => '删除成功！']);
					}else{
						add_logs('删除日志', 0);
						$this->redirect('system/logs','',302,['code' => 'error','msg' => '删除失败！']);
					}
				}else{
					$this->redirect('system/logs','',302,['code' => 'error','msg' => '数据不存在！']);
				}
			}
		}
	}

	/**
	 * 更新网站配置文件
	 * @param  int $group 配置分组
	 * @return bool
	 */
	private static function updateConfig(){
		$map['status'] = ['eq',1];
		$list = Db::name('config')->where($map)->order('id asc')->field('name,value')->select();
		$fcon = "<?php\r\n // Hui.admin v1.0 系统生成网站配置文件\r\n return [\r\n";
					foreach ($list as $key => $value) {
						if(is_numeric($value['value'])){
							$fcon .= "\t'".$value['name']."' => ".$value['value'].",\r\n";
						}else{
							$fcon .= "\t'".$value['name']."' => '".$value['value']."',\r\n";
						}
					}
		$fcon = $fcon."];";
		// 写入配置文件
		$file = CONF_PATH.'/extra/websetup.php';
		$hand = file_put_contents($file,$fcon);
		// 添加权限
		chmod(dirname($file),0777);
		chmod($file,0777);
		if($hand){
			return true;
		}else{
			return false;
		}
	}

    /**
     * 查看配置文件
     * @return mixed
     */
	public function codemirror(){
		Config::set('app_trace',false);
		$file = CONF_PATH.'extra/websetup.php';
		if(!is_file($file)){
			$code = '文件不存在!';
		}elseif (!is_readable($file)){
            $code = '文件不可读!';
        }else{
			//读取配置内容
			$str = file_get_contents($file);
			$code = htmlentities($str);
		}
		add_logs('查看配置文件', 1);
		$this->assign('code', $code);
		$this->assign('file', str_replace('\\', '/', $file));
		return $this->fetch('public/codemirror');
	}

}
