<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;
use org\util\ModelClass;
use \Exception;
use app\admin\model\Models as ModelsModel;

class Models extends Base{

	private $bread = '模型管理';

	static private $ModelClass;

	public function _initialize(){
		// 实例化模型操作类库
		self::$ModelClass = new ModelClass();
		parent::_initialize();
    }

	/**
	 * 文档模型列表
	 * @Author   Hui
	 * @DateTime 2017-07-02T23:31:18+0800
	 * @return   
	 */
	public function lis(){
		$db = new ModelsModel();
		$result = $db->order('sorting ASC')->paginate(15);
		$this->assign('list',$result);
		$this->assign('count',$db->count());

		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'模型列表']));
		return $this->fetch();
	}

	/**
	 * 添加文档模型
	 * @Author   Hui
	 * @DateTime 2017-07-03T00:01:29+0800
	 * @param    Request $request
	 */
	public function add(Request $request){
		$db = new ModelsModel();
		if($request->isPost()){
			$data = $request->post();
        	# 数据验证
            $result = $this->validate($data,'Models');
            if(true !== $result){
                $this->redirect('models/add','',302,['code' => 'error','msg' => $result,'data' => $data]);
            }else{
				if($db->allowField(true)->save($data)){
                    $message = '';
                    try{
                        # 生成模型文件
                        self::$ModelClass->generateModel($data['table']);
                        # 生成验证器
                        self::$ModelClass->generateValidate($data['table'],$db->id);
                        # 创建数据表
                        self::$ModelClass->createTable($data['table'],$data['name']);
                    }catch(Exception $e){
                        $message = $e->getMessage();
                    }
                    if(empty($message)){
                    	add_logs('模型添加', 1);
                        $this->redirect('models/lis','',302,['code' => 'success','msg' => '模型添加成功！']);
                    }else{
                    	add_logs('模型添加：' . $message, 0);
                        $this->redirect('models/add', '', 302, ['code' => 'error', 'msg' => $message, 'data' => $data]);
                    }
				}else{
					add_logs('模型信息添加', 0);
					$this->redirect('models/add','',302,['code' => 'error','msg' => '模型信息添加失败！','data' => $data]);
				}
            }
            return;
		}

		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'模型列表','添加模型']));
		return $this->fetch();
	}

	/**
	 * 编辑文档模型
	 * @Author   Hui
	 * @DateTime 2017-07-03T01:30:48+0800
	 * @param    Request $request
	 * @return  
	 */
	public function edit(Request $request){
		$id = $request->param('id/d');
		if(!isset($id) || empty($id)){
			$this->redirect('models/lis','',302,['code' => 'error','msg' => '参数错误！']);
			return;
		}
		$db = new ModelsModel();
		# 获取数据库数据
		$det_rs = ModelsModel::get($id)->getData();

		if($request->isPost()){
			$data = $request->post();
        	# 数据验证
            $result = $this->validate($data,'Models');
            if(true !== $result){
                $this->redirect('models/edit',['id' => $id],302,['code' => 'error','msg' => $result]);
            }else{
				if($db->allowField(true)->save($data,['id' => $id])){
                    $message = '';
                    try{
                        # 修改模型，验证器
                        self::$ModelClass->editValidateModel($det_rs['table'],$data['table'],$id);
                        # 修改数据表
                        self::$ModelClass->editTable($det_rs['table'],$data['table'],$data['name']);
                    }catch(Exception $e){
                        $message = $e->getMessage();
                    }
                    if(empty($message)){
                    	add_logs('模型编辑', 1);
                        $this->redirect('models/lis','',302,['code' => 'success','msg' => '模型编辑成功！']);
                    }else{
                    	add_logs('模型编辑：' . $message, 0);
                        $this->redirect('models/edit',['id'=>$id],302,['code' => 'error','msg' => $message]);
                    }
				}else{
					add_logs('模型信息编辑', 0);
					$this->redirect('models/lis','',302,['code' => 'error','msg' => '模型信息编辑失败！']);
				}
            }
            return;
		}

		# 模型文件，验证器文件
        $modelName = ucfirst(strtolower(trim($det_rs['table'])));
        $model_file = 'app/common/model/'.$modelName.'.php';
        $validate_file = 'app/common/validate/'.$modelName.'.php';
        $file = [
        	'modelfile' => $model_file,
        	'validatefile' => $validate_file,
        ];

		# 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'模型列表','编辑模型']));
		$this->assign('rs',$det_rs);
		$this->assign('file',$file);
		return $this->fetch();
	}

	/**
	 * 删除文档模型
	 * @Author   Hui
	 * @DateTime 2017-07-03T00:17:43+0800
	 * @param    Request $request
	 * @return   
	 */
	public function del(Request $request){
		if($request->isGet()){
			$id = $request->param('id/d');
			if(!isset($id) || empty($id)){
				$this->redirect('models/lis','',302,['code' => 'error','msg' => '参数错误！']);
				return;
			}
			$db = ModelsModel::get($id);
			if($db->delete()){
				# 删除模型的关联字段
				$db->fields()->delete();
                $message = '';
                try{
                    # 删除数据表
                    self::$ModelClass->deleteTable($db->table);
                    # 删除模型，验证器文件
                    self::$ModelClass->deleteValidateModel($db->table);
                }catch(Exception $e){
                    $message = $e->getMessage();
                }
                if(empty($message)){
                	add_logs('模型【' . $db->name . '】删除', 1);
                    $this->redirect('models/lis','',302,['code' => 'success','msg' => '模型【'.$db->name.'】删除成功！']);
                }else{
                	add_logs('模型删除：' . $message, 0);
                    $this->redirect('models/lis','',302,['code' => 'error','msg' => $message]);
                }
			}else{
				add_logs('模型信息删除', 0);
				$this->redirect('models/lis','',302,['code' => 'error','msg' => '模型信息删除失败！']);
			}
		}else{
			$this->redirect('models/lis','',302,['code' => 'error','msg' => '请正常操作！']);
		}
	}
}
