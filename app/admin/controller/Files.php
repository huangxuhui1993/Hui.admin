<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use app\admin\model\Attach;
use app\admin\model\Convert;
use app\admin\model\Export;

/**
 * 文件管理控制器
 * Class Files
 * @package app\admin\controller
 */
class Files extends Base{

	static private $bread = '文件管理';

	/**
	 * 上传文件列表
	 * @return 
	 */
	public function uploadFile(Request $request){
		$where = [];
		# 状态查询
		$state = $request->post('state/d');
		$this->assign('state',$state);
		if(!empty($state)){
			if ($state === 1) {
				$where['aid'] = ['neq',0];
			}else{
				$where['aid'] = ['eq',0];
			}
		}

		# 关键字查询
		$keywords = preg_replace('# #','',$request->post('keywords'));
		$this->assign('keywords',$keywords);
		if(!empty($keywords)){
			$where['title|ext|name'] = ['like', '%'.$keywords.'%'];
		}

        $db = new Attach();
		$list = $db->where($where)->order('id desc')->paginate(75);
		$this->assign('list',$list);
		$this->assign('count',$db->where($where)->count());

        $this->assign('ycount',$db->where('aid!=0')->count());

        $this->assign('ncount',$db->where('aid=0')->count());

		# 面包屑
		$this->assign('bread',breadcrumb([self::$bread,'上传文件']));
		return $this->fetch();
	}

    /**
     * 清理未使用上传文件
     * @Author   Hui
     * @DateTime 2017-07-21T23:13:57+0800
     * @return 
     */
    public function cleanFile(){
        $list = Db::name('attach')->field('id')->where('aid=0')->select();
        foreach ($list as $value){
            unset($id);
            $id = $value['id'];
            if($id > 0){
                delete_file($id);
            }
        }
        # 记录日志
        system_logs('清理未使用上传文件',session('uname'),1);
        $this->redirect('Files/uploadFile','',302,['code' => 'success','msg' => '清理未使用上传文件成功！']);
    }

	/**
	 * 转换文件列表
	 * @return 
	 */
	public function conversionFile(Request $request){
		$where = [];
        # 关键字查询
        $keywords = preg_replace('# #','',$request->post('keywords'));
        $this->assign('keywords',$keywords);
        if(!empty($keywords)){
            $where['title|name'] = ['like', '%'.$keywords.'%'];
        }

        $db = new Convert();
		$list = $db->where($where)->order('id desc')->paginate(75);
		$this->assign('list',$list);
		$this->assign('count',$db->where($where)->count());

		# 面包屑
		$this->assign('bread',breadcrumb([self::$bread,'转换文件']));
		return $this->fetch();
	}

    /**
     * 删除转换文件
     * @param Request $request
     */
    public function conversionDel(Request $request){
        if($request->isGet()){
            # 单文件删除
            $id = $request->param('id/d');
            if(!isset($id) || empty($id)){
                $this->redirect('Files/conversionFile','',302,['code' => 'error','msg' => '参数错误！']);
            }else{
                if(delete_conversion($id)){
                    system_logs('删除转换文件',session('uname'),1);
                    $this->redirect('Files/conversionFile','',302,['code' => 'success','msg' => '转换文件删除成功！']);
                }else{
                    system_logs('删除转换文件',session('uname'),0);
                    $this->redirect('Files/conversionFile','',302,['code' => 'error','msg' => '转换文件删除失败！']);
                }
            }

        }elseif($request->isPost()) {
            # 批量删除
            $data = $request->post();
            if(is_array($data) && count($data) > 0){
                foreach($data['id'] as $value){
                    if($value > 0){
                        delete_conversion($value);
                    } 
                }
                system_logs('批量删除转换文件',session('uname'),1);
                $this->redirect('Files/conversionFile','',302,['code' => 'success','msg' => '批量删除转换文件成功！']);
            }else{
                $this->redirect('Files/conversionFile','',302,['code' => 'error','msg' => '请选择要删除的文件！']);
            }

        }else{
            $this->redirect('Files/conversionFile','',302,['code' => 'error','msg' => '非法操作！']);
        }
    }



	/**
	 * 导出文件列表
	 * @return 
	 */
	public function exportFile(Request $request){
        $where = [];
        # 关键字查询
        $keywords = preg_replace('# #','',$request->post('keywords'));
        $this->assign('keywords',$keywords);
        if(!empty($keywords)){
            $where['title|name'] = ['like', '%'.$keywords.'%'];
        }

        $db = new Export();
		$list = $db->where($where)->order('id desc')->paginate(75);
		$this->assign('list',$list);
		$this->assign('count',$db->where($where)->count());

		# 面包屑
		$this->assign('bread',breadcrumb([self::$bread,'导出文件']));
		return $this->fetch();
    }

    /**
     * 删除导出文件
     * @param Request $request
     */
    public function exportDel(Request $request){
        if($request->isGet()){
            # 单文件删除
            $id = $request->param('id/d');
            if(!isset($id) || empty($id)){
                $this->redirect('Files/exportFile','',302,['code' => 'error','msg' => '参数错误！']);
            }else{
                if(delete_export($id)){
                    system_logs('删除导出文件',session('uname'),1);
                    $this->redirect('Files/exportFile','',302,['code' => 'success','msg' => '导出文件删除成功！']);
                }else{
                    system_logs('删除导出文件',session('uname'),0);
                    $this->redirect('Files/exportFile','',302,['code' => 'error','msg' => '导出文件删除失败！']);
                }
            }

        }elseif($request->isPost()){
            # 批量删除
            $data = $request->post();
            if(is_array($data) && count($data) > 0){
                foreach($data['id'] as $value){
                    if($value > 0){
                        delete_export($value);
                    }
                }
                system_logs('批量删除导出文件',session('uname'),1);
                $this->redirect('Files/exportFile','',302,['code' => 'success','msg' => '批量删除导出文件成功！']);
            }else{
                $this->redirect('Files/exportFile','',302,['code' => 'error','msg' => '请选择要删除的文件！']);
            }

        }else{
            $this->redirect('Files/exportFile','',302,['code' => 'error','msg' => '非法操作！']);
        }
    }

}
