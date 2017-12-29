<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use org\util\ModelClass;
use think\Request;
use app\admin\model\Fields as FieldsModel;
use app\admin\model\Models as ModelsModel;

/**
 * 字段管理控制器
 * Class Fields
 * @package app\admin\controller
 */
class Fields extends Base{

	private $mid;

	static private $models;

	static private $ModelClass;

	private $bread = '字段管理';

	// 初始化
	public function _initialize(){
		parent::_initialize();
		
		// 获取模型MID
		$this->mid = Request::instance()->param('mid/d');

		if(empty($this->mid)){
			$this->redirect('models/lis','',302,['code' => 'error','msg' => '模型参数错误！']);
		}else{
			$this->assign('mid',$this->mid);
			// 实例化模型操作类库
			self::$ModelClass = new ModelClass();
			// 获取模型
			self::$models = ModelsModel::get($this->mid);
		}

    }

    /**
     * 字段列表
     * @Author   Hui
     * @DateTime 2017-07-03T21:49:20+0800
     * @return   
     */
	public function lis(){
		$db = new FieldsModel();
		$list = $db->where(['mid' => $this->mid])->order('sorting ASC')->paginate(15);
		$this->assign('list',$list);
		$this->assign('count',$db->count());

		// 面包屑
		$bread = [$this->bread,'字段列表',self::$models->name.'【'.self::$models->table.'】'];
		$this->assign('bread',breadcrumb($bread));
		return $this->fetch();
	}

	// 添加字段
	public function add(Request $request){

		$db = new FieldsModel();

		if($request->isPost()){
			$data = $request->post();
        	// 数据验证
            $result = $this->validate($data,'Fields');
            if(true !== $result){
                 $this->redirect('fields/add',['mid' => $this->mid],302,['code' => 'error','msg' => $result,'data' => $data]);
            }else{
				if($db->allowField(true)->save($data)){
                    $message = null;
                    try{
                    	# 重新生成模型
                    	self::$ModelClass->generateModel(self::$models->table,self::$models->id);

                        # 重新生成验证器
                        self::$ModelClass->generateValidate(self::$models->table,self::$models->id);

                        # 创建数据表字段
                        self::$ModelClass->createFields($data['cname'],$data['ename'],$data['type'],$this->mid);

                    }catch(Exception $e){
                        $message = $e->getMessage();
                    }
                    if(empty($message)){
                    	add_logs('字段添加', 1);
                        $this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'success','msg' => '字段添加成功！']);
                    }else{
                    	add_logs('字段添加：' . $message, 0);
                        $this->redirect('fields/add',['mid' => $this->mid], 302, ['code' => 'error', 'msg' => $message, 'data' => $data]);
                    }
				}else{
					add_logs('字段信息添加', 0);
					$this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'error','msg' => '字段信息添加失败！']);
				}
            }
            return;
		}

		// 默认排序
		$max = $db->max('sorting');
		$sorting = isset($max) ? $max+2 : 1;
		$this->assign('sorting',$sorting);
		
		// 面包屑
		$bread = [$this->bread,'字段列表',self::$models->name.'【'.self::$models->table.'】','添加字段'];
		$this->assign('bread',breadcrumb($bread));
		return $this->fetch();
	}

	// 编辑字段
	public function edit(Request $request){
		$id = $request->param('id/d');
		
		if(!isset($id) || empty($id)){
			$this->redirect('fields/lis',['mid'=>$this->mid],302,['code' => 'error','msg' => '字段参数错误！']);
			return;
		}
		
		// 获取数据库数据
		$db = new FieldsModel();
		$det_rs = FieldsModel::get($id)->getData();

		if($request->isPost()){
			$data = $request->post();
        	# 数据验证
            $result = $this->validate($data,'Fields');
            if(true !== $result){
                $this->redirect('fields/edit',['mid' => $this->mid,'id' => $id],302,['code' => 'error','msg' => $result]);
            }else{
				if($db->allowField(true)->save($data,['id' => $id])){
                    $message = null;
                    try{
                    	# 重新生成模型
                    	self::$ModelClass->generateModel(self::$models->table,self::$models->id);

                        # 重新生成验证器
                        self::$ModelClass->generateValidate(self::$models->table,self::$models->id);

                        # 修改数据表字段
                        self::$ModelClass->editFields($det_rs['ename'],$det_rs['type'],$data['ename'],$data['type'],$data['cname'],$det_rs['mid']);
                   
                    }catch(Exception $e){
                        $message = $e->getMessage();
                    }
                    if(empty($message)){
                    	add_logs('字段编辑', 1);
                        $this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'success','msg' => '字段编辑成功！']);
                    }else{
                    	add_logs('字段编辑：' . $message, 0);
                        $this->redirect('fields/edit',['mid' => $this->mid,'id' => $id], 302, ['code' => 'error', 'msg' => $message]);
                    }
				}else{
					add_logs('字段信息编辑', 0);
					$this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'error','msg' => '字段信息编辑失败！']);
				}
            }
            return;
		}

		// 面包屑
		$bread = [$this->bread,'字段列表',self::$models->name.'【'.self::$models->table.'】','编辑字段'];
		$this->assign('bread',breadcrumb($bread));
		$this->assign('rs',$det_rs);
		return $this->fetch();
	}

	// 删除字段
	public function del(Request $request){
		if($request->isGet()){
			
			$id = $request->param('id/d');
			if(!isset($id) || empty($id)){
				$this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'error','msg' => '参数错误！']);
				return;
			}
			
			$db = FieldsModel::get($id);
			if($db->delete()){
                $message = null;
                try{
                    # 删除数据表字段
                    self::$ModelClass->deleteFields($db->ename,$db->mid);
                    
                    # 重新生成模型
                    self::$ModelClass->generateModel(self::$models->table,self::$models->id);
                    
                    # 更新验证器文件
                    self::$ModelClass->generateValidate(self::$models->table,self::$models->id);
                
                }catch(Exception $e){
                    $message = $e->getMessage();
                }
                if(empty($message)){
                	add_logs('字段【' . $db->ename . '】删除', 1);
                    $this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'success','msg' => '字段【'.$db->ename.'】删除成功！']);
                }else{
                	add_logs('字段删除：' . $message, 0);
                    $this->redirect('fields/lis',['mid' => $this->mid], 302, ['code' => 'error', 'msg' => $message]);
                }
			}else{
				add_logs('字段信息删除', 0);
				$this->redirect('fields/lis',['mid' => $this->mid],302,['code' => 'error','msg' => '字段信息删除失败！']);
			}
		}
	}

}
