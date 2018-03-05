<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Validate;
use app\admin\model\Attach;
use app\common\model\Document as DocumentModel;
use app\admin\model\Channel as ChannelModel;
use app\admin\model\Models as ModelsModel;
use app\admin\model\Doc as DocModel;

class Document extends Base{

	private $bread = '文档管理';

	/**
	 * 文档列表
	 * @return mixed
	 */
	public function lis(Request $request){
		$where = [];
		# 栏目分类查询
		$cid = $request->post('cid/d');
		$this->assign('cid', $cid);
		if(!empty($cid)){
			$where['cid'] = ['eq', $cid];
		}

		# 时间查询
		$datemin = $request->post('datemin');
		$datemax = $request->post('datemax');
		$this->assign('datemin', $datemin);
		$this->assign('datemax', $datemax);
		if(!empty($datemin) && !empty($datemax)){
			$datemin = strtotime($datemin);
			$datemax = strtotime($datemax);
			if($datemin > $datemax){
				return hui_redirect('Document/lis', [
					'code' => 'error',
					'msg' => '开始时间不能大于结束时间！'
				]);
			}else{
				$where['create_time'] = ['between', [$datemin, $datemax]];
			}
		}

		# 关键字查询
		$keywords = remove_spaces($request->post('keywords'));
		$this->assign('keywords', $keywords);
		if(!empty($keywords)){
			$where['topic|tags'] = ['like', '%' . $keywords . '%'];
		}

		$db = new DocumentModel();
		$where['isrec'] = ['eq', 0];
		$field = 'id,topic,color,cid,hits,uid,create_time,status,isrec';
		$list = $db->where($where)->field($field)->order('sorting ASC')->paginate(15);
		$this->assign('list', $list);
		$this->assign('count', $db->where($where)->count());
		
		# 获取栏目信息
		$c_list = get_channel($pid = 0, " ┣━  ");
		$this->assign('c_list', $c_list);
		
		# 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '文档列表']));
		return $this->fetch();
	}

	/**
	 * 添加文档表单页面
	 * @param  Request $request
	 * @return mixed
	 */
	public function addform(Request $request){
		# 实例化模型
		$channel = new ChannelModel();
		$models = new ModelsModel();
		$doc = new DocModel();

		$cid = $request->param('cid/d');

		# 获取栏目
		$crs = $channel->field('id,model,mname')->where(['id' => $cid])->find();

		if(!$crs){
			return hui_redirect('Document/lis', [
				'code' => 'error',
				'msg' => '栏目不存在！'
			]);
		}else{
			$this->assign("crs", $crs);
			
			# 获取模型信息
			$mrs = $models->where(['id' => $crs['model']])->find();
			
			if(!$mrs){
				return hui_redirect('Document/lis', [
					'code' => 'error',
					'msg' => '模型不存在！'
				]);
			}else{
				$this->assign("mrs", $mrs);
				
				# 获取字段
				$f_list = Db::name('fields')->where(['mid' => $crs['model']])->order("sorting asc")->select();
				$this->assign("f_list", $f_list);
				
				# 获取文档属性
				$d_list = $doc->field("id,mark,name")->where('status=1')->order("sorting asc")->select();
				$this->assign('d_list', $d_list);
				
				# 点击次数
				$this->assign('hits', rand(20, 200));
				
				# 面包屑
				$this->assign('bread', breadcrumb([$this->bread, '新增文档']));
				$this->assign('cid', $cid);
				return $this->fetch();	
			}
		}
	}

	/**
	 * 添加文档操作
	 * @param Request $request
	 */
	public function add(Request $request){

		$db = new DocumentModel();
		
		if($request->isPost()){
			
			$data = $request->post();

			$data['property'] = !isset($data['property']) ? null : $data['property'];
			$data['photo'] = !isset($data['photo']) ? null : $data['photo'];
			$data['photos'] = !isset($data['photos']) ? null : $data['photos'];
			$data['attach'] = !isset($data['attach']) ? null : $data['attach'];

			# 验证Document数据
			$drs = $this->validate($data, 'Document');
            if(true !== $drs){
            	$with = [
                	'code' => 'error',
                	'msg' => $drs,
                	'data' => $data
	            ];
            	$params = ['cid' => $data['cid']];
                return hui_redirect('Document/addform', $with, $params);
            }else{
				
				# 验证自定义数据
	            $mrs = $this->validate($data, $data['table']);
	            if(true !== $mrs){
	            	$with = [
	                	'code' => 'error',
	                	'msg' => $mrs,
	                	'data' => $data
		            ];
	            	$params = ['cid' => $data['cid']];
	                return hui_redirect('Document/addform', $with, $params);
	            }else{
	            	
	            	# 插入Document数据
	            	if($db->allowField(true)->save($data)){
		            	
		            	# 插入自定义数据
		            	$data['aid'] = $db->id;
		            	$custom_db = model($data['table'])->allowField(true)->save($data);
		            	
		            	if($custom_db){

		            		# 处理图片,附件信息
		            		unset($files);
		            		if(!empty($data['photos']) && !empty($data['attach'])){
		            			$files = array_unique(array_merge($data['photos'], $data['attach']));
		            		}elseif(!empty($data['photos'])){
		            			$files = $data['photos'];
		            		}elseif(!empty($data['attach'])){
		            			$files = $data['attach'];
		            		}
		            		if(isset($files)){
		            			Attach::where('id', 'in', $files)->update(['aid' => $db->id]);
		            		}
		            		return hui_redirect('Document/lis', [
		            			'code' => 'success',
		            			'msg' => '信息添加成功！'
		            		]);
		            	}else{
		            		return hui_redirect('Document/lis', [
		            			'code' => 'error',
		            			'msg' => '自定义信息添加失败！'
		            		]);
		            	}
	            	}else{
	            		return hui_redirect('Document/lis', [
	            			'code' => 'error',
	            			'msg' => '公共信息添加失败！'
	            		]);
	            	}
	            }
            }

		}else{
			return hui_redirect('Document/lis', [
				'code' => 'error',
				'msg' => '请您正常操作！'
			]);
		}
	}

	/**
	 * 编辑文档表单页面
	 * @Author   Hui
	 * @DateTime 2017-07-08T02:04:51+0800
	 * @param    Request $request
	 * @return 
	 */
	public function editform(Request $request){

		$id = $request->param('id/d');
		$cid = $request->param('cid/d');

		$channel = new ChannelModel();
		$models = new ModelsModel();
		$doc = new DocModel();

		# 获取栏目
		$crs = $channel->field('id,model,mname')->where(['id' => $cid])->find();
		
		if(!$crs || empty($id)){
			return hui_redirect('Document/lis', [
				'code' => 'error',
				'msg' => '栏目不存在！'
			]);
		}else{
			$this->assign("crs", $crs);
			
			# 获取模型
			$mrs = $models->where(['id' => $crs['model']])->find();
			if(!$mrs){
				return hui_redirect('Document/lis', [
					'code' => 'error',
					'msg' => '模型不存在！'
				]);
			}else{
				$this->assign('mrs', $mrs);

				# 获取字段
				$f_list = Db::name('fields')->where(['mid' => $crs['model']])->order("sorting asc")->select();
				$this->assign('f_list', $f_list);

				# 获取文档属性
				$d_list = $doc->field("id,mark,name")->where('status=1')->order("sorting asc")->select();
				$this->assign('d_list', $d_list);

				# 获取文档信息
				$rs = model($mrs['table'])->where(['aid' => $id])->find();
				$this->assign('rs', $rs);

				# 面包屑
				$this->assign('bread', breadcrumb([$this->bread, '编辑文档']));
				$this->assign('cid', $cid);
				return $this->fetch();	
			}
		}
	}

	/**
	 * 编辑文档操作
	 * @Author   Hui
	 * @DateTime 2017-07-08T02:05:17+0800
	 * @param    Request $request
	 * @return
	 */
	public function edit(Request $request){

		$db = new DocumentModel();

		if($request->isPost()){
			
			$data = $request->post();

			$data['property'] = !isset($data['property']) ? null : $data['property'];
			$data['photo'] = !isset($data['photo']) ? null : $data['photo'];
			$data['photos'] = !isset($data['photos']) ? null : $data['photos'];
			$data['attach'] = !isset($data['attach']) ? null : $data['attach'];

			# 验证Document数据
			$drs = $this->validate($data, 'Document');
            if(true !== $drs){
            	$with = [
            		'code' => 'error',
            		'msg' => $drs
            	];
            	$params = [
            		'id' => $data['id'],
            		'cid' => $data['cid']
            	];
                return hui_redirect('Document/editform', $with, $params);
            }else{
				
				# 创建自定义数据
				$custom_data = $data;
				unset($custom_data['id']);
            	$custom_rs = model($data['table'])->where(['aid' => $data['id']])->find();
            	$custom_data['id'] = $custom_rs['id'];

            	# 验证自定义数据
	            $mrs = $this->validate($custom_data, $data['table']);
	            if(true !== $mrs){
	            	$with = [
	            		'code' => 'error',
	            		'msg' => $mrs
	            	];
	            	$params = [
	            		'id' => $data['id'],
	            		'cid' => $data['cid']
	            	];
	                return hui_redirect('Document/editform', $with, $params);
	            }else{
	            	
	            	# 插入Document数据
	            	if($db->allowField(true)->save($data, ['id' => $data['id']])){
		            	
		            	# 插入自定义数据
		            	$custom_db = model($data['table'])->allowField(true)->save($custom_data, ['id' => $custom_rs['id']]);
		            	
		            	if($custom_db){

		            		# 处理图片,附件信息
		            		unset($files);
		            		if(isset($data['photos']) && isset($data['attach'])){
		            			$files = array_unique(array_merge($data['photos'],$data['attach']));
		            		}elseif(isset($data['photos'])){
		            			$files = $data['photos'];
		            		}elseif(isset($data['attach'])){
		            			$files = $data['attach'];
		            		}
		            		if(isset($files)){
		            			Attach::where('id','in', $files)->update(['aid' => $data['id']]);
		            		}

		            		return hui_redirect('Document/lis', [
		            			'code' => 'success',
		            			'msg' => '信息编辑成功！'
		            		]);
		            	}else{
		            		return hui_redirect('Document/lis', [
		            			'code' => 'error',
		            			'msg' => '没用编辑自定义信息！'
		            		]);
		            	}
	            	}else{
	            		return hui_redirect('Document/lis', [
	            			'code' => 'error',
	            			'msg' => '没用编辑信息！'
	            		]);
	            	}
	            }
            }

		}else{
			return hui_redirect('Document/lis', [
				'code' => 'error',
				'msg' => '请您正常操作！'
			]);
		}
	}

	/**
	 * 文档操作
	 * @Author   Hui
	 * @DateTime 2017-07-08T02:10:34+0800
	 * @return
	 */
	public function docOperation(Request $request){

		if($request->isPost()){

			$db = new DocumentModel();

			$data = $request->post();

			$validate = new Validate([
			    ['id', 'require', '请选择，要操作的信息！'],
			    ['style', 'require', '请选择，要执行的操作！']
			]);

			if(!$validate->check($data)) {
				return hui_redirect('Document/lis', [
					'code' => 'error',
					'msg' => $validate->getError()
				]);
			}else{

				$id = implode(",", $data['id']);
				
				$where['id'] = ['in', $id];

				switch($data['style']){
					case 'audit':
						if($db->where($where)->update(['status' => 1])) {
							return hui_redirect('Document/lis', [
								'code' => 'success',
								'msg' => '文档审核成功！'
							]);
						}else{
							return hui_redirect('Document/lis', [
								'code' => 'error',
								'msg' => '文档已审核！'
							]);
						}
						break;
					case 'hidden':
						if($db->where($where)->update(['status' => 0])) {
							return hui_redirect('Document/lis', [
								'code' => 'success',
								'msg' => '文档隐藏成功！'
							]);
						}else{
							return hui_redirect('Document/lis', [
								'code' => 'error',
								'msg' => '文档已隐藏！'
							]);
						}
						break;
					case 'recycling':
						if($db->where($where)->update(['isrec' => 1])) {
							return hui_redirect('Document/lis', [
								'code' => 'success',
								'msg' => '文档已放入回收站！'
							]);
						}else{
							return hui_redirect('Document/lis', [
								'code' => 'error',
								'msg' => '放入回收站失败！'
							]);
						}
						break;
					default:
						return hui_redirect('Document/lis', [
							'code' => 'error',
							'msg' => '请您正常操作！'
						]);
						break;
				}
			}
		}else{
			return hui_redirect('Document/lis', [
				'code' => 'error',
				'msg' => '请您正常操作！'
			]);
		}
	}

	/**
	 * 文档状态
	 * @Author   Hui
	 * @DateTime 2017-07-02T23:12:19+0800
	 * @param    Request $request
	 * @return   
	 */
	public function documentStatus(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			$status = $request->param('status/d');
			if(!isset($id) || !isset($status)){
				return hui_redirect('Document/lis', [
					'code' => 'error',
					'msg' => '参数错误！'
				]);
			}else{
				$document = DocumentModel::get($id);
				if($document){
					$data['status'] = $status == 0 ? 1 : 0;
					$msg = $status == 0 ? '审核' : '隐藏';
					if($document->save($data)) {
						add_logs('文档状态设置' . $msg, 1);
						return hui_redirect('Document/lis', [
							'code' => 'success',
							'msg' => "文档{$msg}成功！"
						]);
					}else{
						add_logs('文档状态设置' . $msg, 0);
						return hui_redirect('Document/lis', [
							'code' => 'error',
							'msg' => "文档{$msg}失败！"
						]);
					}
				}else{
					return hui_redirect('Document/lis', [
						'code' => 'error',
						'msg' => '数据不存在！'
					]);
				}
			}
		}
	}

	/**
	 * 回收站列表
	 * @Author   Hui
	 * @DateTime 2017-07-08T14:08:49+0800
	 * @param    Request $request
	 * @return
	 */
	public function recyclebin(Request $request){
		// 查询条件
		$where = [];
		$keywords = remove_spaces($request->post('keywords'));
		$this->assign('keywords', $keywords);
		if(isset($keywords)){
			$where = [
				'topic|tags' => ['like', '%' . $keywords . '%'],
			];
		}

		$db = new DocumentModel();

		# 是否放入回收站
		$where['isrec'] = ['eq',1];
		$field = 'id,topic,color,cid,hits,uid,create_time,status,isrec';
		$list = $db->where($where)->field($field)->order('sorting ASC')->paginate(15);
		$this->assign('list', $list);
		$this->assign('count', $db->where($where)->count());

		# 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '回收站']));
		return $this->fetch();
	}

	/**
	 * 回收站操作
	 * @Author   Hui
	 * @DateTime 2017-07-08T02:10:34+0800
	 * @return
	 */
	public function recyclebinOperation(Request $request){
		if($request->isPost()){
			$db = new DocumentModel();
			$data = $request->post();
			$validate = new Validate([
			    ['id', 'require', '请选择，要操作的信息！'],
			    ['style', 'require', '请选择，要执行的操作！']
			]);

			if(!$validate->check($data)) {
				return hui_redirect('Document/recyclebin', [
					'code' => 'error',
					'msg' => $validate->getError()
				]);
			}else{
				$id = implode(",", $data['id']);
				$where['id'] = ['in', $id];
				switch($data['style']){
					case 'reduction':
						if($db->where($where)->update(['isrec' => 0])) {
							return hui_redirect('Document/recyclebin', [
								'code' => 'success',
								'msg' => '文档还原成功！'
							]);
						}else{
							return hui_redirect('Document/recyclebin', [
								'code' => 'error',
								'msg' => '文档已还原！'
							]);
						}
						break;
					case 'delete':
						$list = DocumentModel::all($data['id']);

						// 删除自定义数据 删除文件
						foreach($list as $value){

							delete_model_data($value->cid, $value->id);

							unset($files);
							if(!empty($value->photos) && !empty($value->attach)){
								$files = array_unique(array_merge(unserialize($value->photos), unserialize($value->attach)));
							}elseif(!empty($value->photos)){
								$files = unserialize($value->photos);
							}elseif(!empty($value->attach)){
								$files = unserialize($value->attach);
							}
							if(isset($files) && is_array($files)){
								foreach($files as $att_id){
									delete_file($att_id);
								}
							}

						}

						if($db->where($where)->delete()){
							return hui_redirect('Document/recyclebin', [
								'code' => 'success',
								'msg' => '文档删除成功！'
							]);
						}else{
							return hui_redirect('Document/recyclebin', [
								'code' => 'error',
								'msg' => '文档删除失败！'
							]);
						}
						break;
					default:
						return hui_redirect('Document/recyclebin', [
							'code' => 'error',
							'msg' => '请您正常操作！'
						]);
						break;
				}
			}
		}else{
			return hui_redirect('Document/recyclebin', [
				'code' => 'error',
				'msg' => '请您正常操作！'
			]);
		}
	}

}
