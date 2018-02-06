<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Loader;
use think\Request;
use think\Config;
use org\util\DbBackup;

/**
 * 数据库管理控制器
 * Class Dbmanage
 * @package app\admin\controller
 */
class Dbmanage extends Base{

	// 数据库备份目录
	static private $db_backup;

	private $bread = '数据管理';

    public function _initialize(){
        parent::_initialize();

        // 数据库备份文件存储位置
        self::$db_backup = HUI_FILES . Config::get('websetup.backup_dir') . DS;
    }

    /**
     * 数据库表
     * @return mixed
     */
	public function lis(){
		$list = Db::query("show table status");
		$this->assign('list',$list);
		
		// 面包屑
		$this->assign('bread',breadcrumb([$this->bread,'数据库字典']));
		return $this->fetch();
	}

    /**
     * 数据库表优化
     * @param Request $request
     * @return mixed
     */
	public function optimize(Request $request){

		if($request->isPost()){

			$data = $request->post();

			if(!isset($data['name']) || !is_array($data['name']) || empty($data) || empty($data['name'])){
				return hui_redirect('Dbmanage/lis', ['code' => 'error', 'msg' => '请选择要优化的数据表！']);
			}else{
				$name = $data['name'];
				$db = implode(",", $name);
				$sql = "OPTIMIZE TABLE $db";
				$result = Db::query($sql);
				add_logs('数据表优化', 1);
				// 面包屑
				$this->assign('bread', breadcrumb([$this->bread, '优化详情']));

				$this->assign('list', $result);
				return $this->fetch('result');
			}
		}

	}

    /**
     * 数据表详情
     * @param Request $request
     * @return mixed
     */
	public function details(Request $request){
		if($request->isGet()){

			$name = $request->param('name');

			if(empty($name)){
				$this->error('请选择要查看的数据表！');
			}else{
				// 查询数据库的表名
				$table_arr = Db::query('show table status');
				foreach ($table_arr as $k => $v) {
					$table[] = $v['Name'];
				}
				if(!in_array($name,$table)){
					$this->error('您查找的数据表不存在！');
				}else{
					$list = Db::query('SHOW FULL COLUMNS FROM '.$name);
				    $this->assign('list',$list);

				    // 面包屑
					$bread = [$this->bread,'数据表字典',$name];
					$this->assign('bread',breadcrumb($bread));
				    return $this->fetch();
				}

			}
		}else{
			die('非法操作！');
		}
	}

    /**
     * 统计图
     * @param Request $request
     */
	public function statistical(Request $request){

		Loader::import('jpgraph.jpgraph');
		Loader::import('jpgraph.jpgraph_line');
		Loader::import('jpgraph.jpgraph_bar');

		$style = $request->param('style');

		switch($style){
			case '1':
				// 查询数据表记录数
				$table_arr = Db::query('show table status');
				foreach ($table_arr as $k => $v) {
					$rows[] = $v['Rows'];
				}

				$data = $rows; //第一条曲线的数组  

				$graph = new \Graph(800,400);
				$graph->SetScale("textlin");  
				$graph->SetShadow();     
				$graph->img->SetMargin(60,30,30,70); //设置图像边距  
				   
				$graph->graph_theme = null; //设置主题为null，否则value->Show(); 无效  
				   
				$lineplot = new \LinePlot($data); //创建设置两条曲线对象  
				$lineplot->value->SetColor("red");  
				$lineplot->value->Show();  
				$graph->Add($lineplot);  //将曲线放置到图像上  
				   
				$graph->title->Set("记录数统计图");   //设置图像标题  
				$graph->xaxis->title->Set("编号"); //设置坐标轴名称  
				$graph->yaxis->title->Set("记录数");  
				$graph->title->SetMargin(10);  
				$graph->xaxis->title->SetMargin(10);  
				$graph->yaxis->title->SetMargin(10);  
				   
				$graph->title->SetFont(FF_SIMSUN,FS_BOLD); //设置字体  
				$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);  
				$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);

				break;
			case '2':
				// 查询数据表大小
				$table_arr = Db::query('show table status');
				$i = 1;
				foreach ($table_arr as $k => $v) {
					$length[] = $v['Data_length'];
					$num = $i;
					++$i;
				}

				$data = $length; //第一条曲线的数组  
	
				$graph = new \Graph(800,400);  //创建新的Graph对象  
				$graph->SetScale("textlin");  //刻度样式  
				$graph->SetShadow();          //设置阴影  
				$graph->img->SetMargin(40,30,40,50); //设置边距  
				  
				$graph->graph_theme = null; //设置主题为null，否则value->Show(); 无效  
				  
				$barplot = new \BarPlot($data);  //创建BarPlot对象  
				$barplot->SetFillColor('blue'); //设置颜色  
				$barplot->value->Show(); //设置显示数字  
				$graph->Add($barplot);  //将柱形图添加到图像中  
				   
				$graph->title->Set("数据大小统计图");   
				$graph->xaxis->title->Set("编号"); //设置标题和X-Y轴标题  
				$graph->yaxis->title->Set("数据大小 (Byte)");                                                                        
				$graph->title->SetColor("red");  
				$graph->title->SetMargin(10);  
				$graph->xaxis->title->SetMargin(5);  
				$graph->xaxis->SetTickLabels($num);  
				   
				$graph->title->SetFont(FF_SIMSUN,FS_BOLD);  //设置字体  
				$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);  
				$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);  
				$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);

				break;
			case '3':
				// 查询数据表碎片
				$table_arr = Db::query('show table status');
				$i = 1;
				foreach ($table_arr as $k => $v) {
					$free[] = $v['Data_free'];
					$num = $i;
					++$i;
				}

				$data = $free; //第一条曲线的数组  
	
				$graph = new \Graph(800,400);  //创建新的Graph对象  
				$graph->SetScale("textlin");  //刻度样式  
				$graph->SetShadow();          //设置阴影  
				$graph->img->SetMargin(40,30,40,50); //设置边距  
				  
				$graph->graph_theme = null; //设置主题为null，否则value->Show(); 无效  
				  
				$barplot = new \BarPlot($data);  //创建BarPlot对象  
				$barplot->SetFillColor('blue'); //设置颜色  
				$barplot->value->Show(); //设置显示数字  
				$graph->Add($barplot);  //将柱形图添加到图像中  
				   
				$graph->title->Set("数据碎片统计图");   
				$graph->xaxis->title->Set("编号"); //设置标题和X-Y轴标题  
				$graph->yaxis->title->Set("碎片大小 (Byte)");                                                                        
				$graph->title->SetColor("red");  
				$graph->title->SetMargin(10);  
				$graph->xaxis->title->SetMargin(5);  
				$graph->xaxis->SetTickLabels($num);  
				   
				$graph->title->SetFont(FF_SIMSUN,FS_BOLD);  //设置字体  
				$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);  
				$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);  
				$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);

				break;
			default:
				echo "暂无该统计图";
				break;
		}

		$graph->Stroke();// 输出图像

	}

    /**
     * 数据库备份文件列表
     * @return mixed
     */
	public function backlist(){
		$db = Db::name('backup');
		$list = $db->order('id desc')->paginate(15);
		$this->assign('list',$list);

		$this->assign('db_size', mysql_db_size());
		$this->assign('backup_dir', Config::get('websetup.backup_dir'));
		# 面包屑
		$this->assign('bread', breadcrumb([$this->bread, '数据库备份文件列表']));
		return $this->fetch();
	}

    /**
     * 备份数据库操作
     * @param Request $request
     * @return array
     */
	public function backupOperation(Request $request){
		ini_set("magic_quotes_runtime", 0);

		if($request->isAjax()){
			$db = new DbBackup();
			$db_size = mysql_db_size();
			$style = $request->post('style/d');

			# 数据库大小超过50M自动启用分卷备份
			# 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
			if($style == 2 || $db_size >= 52428800){
				$size = 10240;
			}else{
				$size = 51200;
			}
			$result = $db->backup('', self::$db_backup, $size);
			if($result['code'] == 1){
				add_logs('备份数据库', 1);
				return ['error' => 0];
			}else{
				add_logs('备份数据库', 0);
				return ['error' => 1];
			}
		}else{
			add_logs('备份数据库，非法操作！', 0);
			die('非法操作！');
		}

	}

    /**
     * 恢复数据库操作
     * @param Request $request
     */
	public function restoreOperation(Request $request){
		$db = new DbBackup();
		//参数：sql文件
		$filename = 'cc.sql';
		$back_path = self::$db_backup .$filename;
		$db->restore ($back_path);
	}

    /**
     * 删除备份文件
     * @param Request $request
     */
	public function delSql(Request $request){
		
		if($request->isGet()){
			$id = $request->param('id/d');
			if(!isset($id)){
				return hui_redirect('Dbmanage/backlist', ['code' => 'error','msg' => '参数错误！']);
			}else{
				ini_set("magic_quotes_runtime", 0);
				$db = Db::name('backup');
				$result = $db->where('id',$id)->find();
				if($result){
			        // 获取数据库存储位置
			        $sql_file = self::$db_backup .$result['filename'];
			        if(!is_file($sql_file)){
			            $this->error('SQL文件不存在！');
			        }else{
				        $volume = explode( "_v",$sql_file);
				        $volume_path = $volume [0];
			            // 存在分卷，则获取当前是第几分卷，循环执行余下分卷
			            $volume_id = explode ( ".sql", $volume[1]);
			            // 当前分卷为$volume_id
			            $volume_id = intval($volume_id[0]);

			            while($volume_id){
			                $tmp_file = $volume_path . "_v" . $volume_id . ".sql";
			                // 存在其他分卷，继续执行删除操作
			                if(is_file($tmp_file)){
			                	unlink($tmp_file);
			                }else{
			                	break;
			                }
			                ++$volume_id;
			            }

			            if($db->where('id',$id)->delete()) {
			            	add_logs('删除备份文件', 1);
							return hui_redirect('Dbmanage/backlist', ['code' => 'success', 'msg' => '备份文件删除成功！']);
			            }
			        }

				}else{
					return hui_redirect('Dbmanage/backlist', ['code' => 'error', 'msg' => '数据不存在！']);
				}

			}
		}else{
			add_logs('删除备份文件，非法操作！', 0);
			die('非法操作！');
		}
	}


}
