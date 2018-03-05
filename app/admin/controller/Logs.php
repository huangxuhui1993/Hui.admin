<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use app\admin\model\Logs as LogsModel;

/**
 * 系统日志控制器
 * Class Logs
 * @package app\admin\controller
 */
class Logs extends Base{

	private $bread = '日志管理';

    /**
     * 系统日志
     * @param Request $request
     * @return mixed
     */
	public function lis(Request $request){
		$page = $request->param('apage');
		
		$where = [];

		# 关键字查询
		$keywords = remove_spaces($request->post('keywords'));
		$this->assign('keywords', $keywords);
		if(!empty($keywords)){
			$where['username|ip|operate'] = ['like', '%' . $keywords . '%'];
		}

		$db = new LogsModel();
		$list = $db->where($where)->order('id desc')->paginate(10, false, [
			'type'     => 'Bootstrap',
			'var_page' => 'page',
			'page'     => $page,
			'path'     =>'javascript:ajaxPage([PAGE]);'
		]);
		$this->assign('list', $list);

		$count = $db->where($where)->count();
		$this->assign('count', $count);

		// AJAX分页数据
		if(!empty($page) && is_numeric($page)){
			return json([
				'list' => $this->fetch('logslist'),
				'page' => $list->render(),
				'count' => $count,
				'where' => $where
			]);
		}

		$this->assign('bread', breadcrumb([$this->bread, '系统日志']));
		return $this->fetch();
	}

    /**
     * 删除日志
     * @param Request $request
     */
	public function del(Request $request){
		if($request->isPost()){
			$data = $request->post();
			if(!isset($data['id']) || !is_array($data['id']) || empty($data) || empty($data['id'])){
				return hui_redirect('Logs/lis', [
					'code' => 'error',
					'msg' => '请选择要删除的数据！'
				]);
			}else{
				foreach($data['id'] as $k => $v){
					$db = LogsModel::get($v);
					if($db){
						$db->delete();
					}else{
						add_logs('批量删除日志', 0);
						return hui_redirect('Logs/lis', [
							'code' => 'error',
							'msg' => '批量删除失败！'
						]);
					}
				}
				add_logs('批量删除日志', 1);
				return hui_redirect('Logs/lis', [
					'code' => 'success',
					'msg' => '批量删除成功！'
				]);
			}
		}else{
			$id = $request->param('id/d');
			if(!isset($id) || empty($id)){
				return hui_redirect('Logs/lis', [
					'code' => 'error',
					'msg' => '参数错误！'
				]);
			}else{
				$db = LogsModel::get($id);
				if($db){
					if($db->delete()){
						add_logs('删除日志', 1);
						return hui_redirect('Logs/lis', [
							'code' => 'success',
							'msg' => '删除成功！'
						]);
					}else{
						add_logs('删除日志', 0);
						return hui_redirect('Logs/lis', [
							'code' => 'error',
							'msg' => '删除失败！'
						]);
					}
				}else{
					return hui_redirect('Logs/lis', [
						'code' => 'error',
						'msg' => '数据不存在！'
					]);
				}
			}
		}
	}

}
