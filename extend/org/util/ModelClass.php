<?php
namespace org\util;
use think\Config;
use think\Db;
use \Exception;

class ModelClass
{
    static private $prefix;

    function __construct(){
        # 获取系统表前缀
        self::$prefix = Config::get('database.prefix');
    }

    /**
     * 创建数据表
     * @param string $tableName 数据表明
     * @param string $annotation 表注释
     * @return bool
     * @throws Exception
     */
	public function createTable($tableName,$annotation){
		if(isset($tableName) && isset($annotation)){
		    # 带前缀的数据表名
		    $table_name = self::$prefix.strtolower($tableName);
			$sql = <<<QUERY
				CREATE TABLE `{$table_name}` (
					`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '主键ID',
		            `aid` int(11) NOT NULL COMMENT '主表关联ID',
		            `update_time` int(11) NOT NULL COMMENT '更新时间'
	            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='{$annotation}' 			
QUERY;
            $result = Db::execute($sql);
            if(isset($result)){
                return true;
            }else{
                throw new Exception("数据表创建失败！");
            }
		}else{
            throw new Exception("创建数据表参数缺失！");
		}
	}

	/**
	 * 修改数据表
	 * @param string $oTableName 原数据表名称
	 * @param string $nTableName 修改后数据表名称
     * @param string $annotation 表注释
	 */
	public function editTable($oTableName,$nTableName,$annotation){
		if(empty($oTableName) || empty($nTableName) || empty($annotation)){
            throw new Exception("修改数据表参数缺失！");
		}else{
            if($oTableName <> $nTableName){
                $o_table_name = self::$prefix.strtolower($oTableName);
                $n_table_name = self::$prefix.strtolower($nTableName);
                # 修改表名
                $result = Db::execute("ALTER TABLE `{$o_table_name}` RENAME TO `{$n_table_name}`");
                # 修改表注释
                Db::execute("ALTER TABLE `{$n_table_name}` COMMENT='{$annotation}'");
                if(isset($result)){
                    return true;
                }else{
                    throw new Exception("数据表修改失败！");
                }
            }
        }
	}

	/**
	 * 删除数据表
	 * @param  string $tableName 数据表名称
	 * @return bool
	 */
	public function deleteTable($tableName){
		if(isset($tableName) && !empty($tableName)){
            $table_name = self::$prefix.strtolower($tableName);
            $result = Db::execute("DROP TABLE `{$table_name}`");
            if(isset($result)){
                return true;
            }else{
                throw new Exception("数据表删除失败！");
            }
		}else{
            throw new Exception("删除数据表参数缺失！");
		}
	}

	/**
	 * 创建数据表字段
	 * @param  string $ename 字段名称
	 * @param  string $type 字段类型
	 * @param  int $mid 模型ID
	 * @return bool
	 */
	public function createFields($cname,$ename,$type,$mid){
		if(empty($cname) || empty($ename) || empty($type) || empty($mid)){
			throw new Exception("创建数据表字段参数缺失！");
		}else{
			$result = Db::name('models')->field('table')->where(['id' => $mid])->find();
			if(!$result){
				throw new Exception("数据表模型信息不存在！");
			}else{
				$table_name = self::$prefix.strtolower($result['table']);
				# 获取字段类型
				$FieldsArr = $this->checkFields($type);
				$sql = "";
				switch($type){
					case 'number':
					case 'date':
					case 'radio':
					case 'select':
						$sql .= "ALTER TABLE `{$table_name}` ADD `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].") NOT NULL COMMENT '{$cname}' DEFAULT ";
						$sql .= $FieldsArr[2]." AFTER aid";
						break;
					case 'float':
						$sql .= "ALTER TABLE `{$table_name}` ADD `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].",".$FieldsArr[3].") NOT NULL COMMENT '{$cname}' DEFAULT ";
						$sql .= $FieldsArr[2]." AFTER aid";
						break;					
					default:
						$sql .= "ALTER TABLE `{$table_name}` ADD `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].") ";
						$sql .= $FieldsArr[2]." COMMENT '{$cname}' DEFAULT '' AFTER aid";
						break;
				}
				$result = Db::execute($sql);
	            if(isset($result)){
	                return true;
	            }else{
	                throw new Exception("创建数据表字段失败！");
	            }
			}
		}
	}

	/**
	 * 修改数据表字段
	 * @param  string $oename 修改前字段名
	 * @param  string $otype 修改前字段类型
	 * @param  string $ename 修改后字段名
	 * @param  string $type 修改后字段类型
	 * @param  int $mid 模型ID
	 * @return bool
	 */
	public function editFields($oename,$otype,$ename,$type,$cname,$mid){
		if(empty($oename) || empty($otype) || empty($ename) || empty($type) || empty($cname) || empty($mid)){
			throw new Exception("修改数据表字段参数缺失！");
		}elseif($oename === $ename && $otype === $type){
			return false;
		}else{
			$result = Db::name('models')->field('table')->where(['id' => $mid])->find();
			if(!$result){
				return false;
			}else{
				$table_name = self::$prefix.strtolower($result['table']);
				# 获取字段类型
				$FieldsArr = $this->checkFields($type);
				$sql = "";
				switch($type){
					case 'number':
					case 'date':
					case 'radio':
					case 'select':
						$sql .= "ALTER TABLE `{$table_name}` CHANGE `{$oename}` `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].") NOT NULL COMMENT '{$cname}' DEFAULT ";
						$sql .= $FieldsArr[2];
						break;
					case 'float':
						$sql .= "ALTER TABLE `{$table_name}` CHANGE `{$oename}` `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].",".$FieldsArr[3].") NOT NULL COMMENT '{$cname}' DEFAULT ";
						$sql .= $FieldsArr[2];
						break;			
					default:
						$sql .= "ALTER TABLE `{$table_name}` CHANGE `{$oename}` `{$ename}` ";
						$sql .= $FieldsArr[0]."(".$FieldsArr[1].") ";
						$sql .= $FieldsArr[2]." COMMENT '{$cname}' DEFAULT ''";
						break;
				}
				$result = Db::execute($sql);
	            if(isset($result)){
	                return true;
	            }else{
	                throw new Exception("修改数据表字段失败！");
	            }
			}
		}
	}

	/**
	 * 删除数据表字段
	 * @param  string $ename 字段名称
	 * @param  int $mid 字段模型ID
	 * @return bool
	 */
	public function deleteFields($ename,$mid){
		if(empty($ename) || empty($mid)){
			throw new Exception("删除数据表字段参数缺失！");
		}else{
			$result = Db::name('models')->field('table')->where(['id' => $mid])->find();
			if(!$result){
				throw new Exception("删除数据表字段不存在！");
			}else{
				$table_name = self::$prefix.strtolower($result['table']);
				Db::execute("ALTER TABLE `{$table_name}` DROP `{$ename}`");
	            if(isset($result)){
	                return true;
	            }else{
	                throw new Exception("删除数据表字段失败！");
	            }
			}
		}
	}

	/**
	 * 生成模型文件函数
	 * @param  string $modelName 模型名称
	 * @return bool
	 */
	public function generateModel($modelName,$mid = null){
		if(!isset($modelName) || empty($modelName)){
            throw new Exception("生成模型文件参数缺失！");
		}else{
			$modelName = ucfirst(strtolower(trim($modelName)));
			//模型文件内容
			$modelStr = "";
			$modelStr .= "<?php\r\n";
			$modelStr .= "namespace app\common\model;\r\n";
			$modelStr .= "use think\Model;\r\n\n";
			$modelStr .= "// Hui.admin系统生成模型\r\n";
			$modelStr .= "class ".$modelName." extends Model{\r\n\n";
			$modelStr .= "\t// 关联方法\r\n";
			$modelStr .= "\tpublic function document(){\r\n";
			$modelStr .= "\t\treturn \$this->hasOne('Document','id','aid');\r\n";
			$modelStr .= "\t}\r\n\n";
			$modelStr .= "\t// 自动完成\r\n";
			$modelStr .= "\tprotected \$auto = ['update_time'];\r\n\n";
			$modelStr .= "\t// 修改器\r\n";
			$modelStr .= "\tprotected function setUpdateTimeAttr(){\r\n";
			$modelStr .= "\t\treturn time();\r\n";
			$modelStr .= "\t}\r\n\n";
			
			# 生成修改器
			if (!empty($mid)) {
				$result = Db::name('fields')->where(['mid' => $mid])->select();
				foreach($result as $val){
					switch($val['type']){
						case 'date':
							$v = ucwords($val['ename']);
							$modelStr .= "\t// 时间获取器\r\n";
							$modelStr .= "\tprotected function get{$v}Attr(\$value){\r\n";
							$modelStr .= "\t\treturn date('Y-m-d H:i:s',\$value);\r\n";
							$modelStr .= "\t}\r\n\n";
							$modelStr .= "\t// 时间修改器\r\n";
							$modelStr .= "\tprotected function set{$v}Attr(\$value,\$result){\r\n";
							$modelStr .= "\t\tif(is_numeric(\$value)){\r\n";
							$modelStr .= "\t\t\treturn \$result;\r\n";
							$modelStr .= "\t\t}else{\r\n";
							$modelStr .= "\t\t\treturn strtotime(\$value);\r\n";
							$modelStr .= "\t\t}\r\n";
							$modelStr .= "\t}\r\n\n";
							break;
						case 'checkbox':
							$v = ucwords($val['ename']);
							$modelStr .= "\t// 数组序列化\r\n";
							$modelStr .= "\tprotected function set{$v}Attr(\$value,\$result){\r\n";
							$modelStr .= "\t\tif(is_array(\$value)){\r\n";
							$modelStr .= "\t\t\treturn serialize(\$value);\r\n";
							$modelStr .= "\t\t}else{\r\n";
							$modelStr .= "\t\t\treturn \$result;\r\n";
							$modelStr .= "\t\t}\r\n";
							$modelStr .= "\t}\r\n\n";
							break;						
						default:

							break;
					}
				}
			}

			$modelStr .= "}\r\n";
			# 生成模型文件
			$file = ROOT_PATH.'app/common/model/'.$modelName.'.php';
            # 设置文件夹权限
            chmod(dirname($file),0777);
			$hand = file_put_contents($file,$modelStr);
			# 设置模型文件权限
            chmod($file,0777);
			if(isset($hand) && is_file($file)){
				return true;
			}else{
                throw new Exception("模型文件创建失败！");
			}
		}
	}

	/**
	 * 生成验证器文件函数
	 * @param  string $validateName 模型名称
	 * @param  int $mid 模型ID
	 * @return bool
	 */
	public function generateValidate($validateName,$mid){
		if(empty($validateName) || empty($mid)){
            throw new Exception("生成验证器文件参数缺失！");
		}else{
			$validateName = ucfirst(strtolower(trim($validateName)));
			# 验证器文件内容
			$validateStr = "";
			$validateStr .= "<?php\r\n";
			$validateStr .= "namespace app\common\\validate;\r\n\n";
			$validateStr .= "use think\Validate;\r\n\n";
			$validateStr .= "// Hui.admin系统生成验证器\r\n";
			$validateStr .= "class ".$validateName." extends Validate{\r\n\n";
			$validateStr .= "\t// 验证规则\r\n";
			$validateStr .= "\tprotected \$rule = [\r\n";
			# 生成验证规则
			$result = Db::name('fields')->where(['mid' => $mid])->select();
			foreach($result as $val){
				$validateStr .= $this->generateRules($validateName,$val['cname'],$val['ename'],$val['type'],$val['isneed']);
			}
			$validateStr .= "\t];\r\n\n";
			$validateStr .="}\r\n";
			
			# 生成验证器文件
			$file = ROOT_PATH.'app/common/validate/'.$validateName.'.php';
			
			# 设置文件夹权限
            chmod(dirname($file),0777);
			$hand = file_put_contents($file,$validateStr);

			# 设置验证器文件权限
            chmod($file,0777);
            
            if(isset($hand) && is_file($file)){
				return true;
			}else{
                throw new Exception("验证器文件创建失败！");
			}
		}
	}

	/**
	 * 编辑模型验证器文件函数
	 * @param  string $otableName 原模型名称
	 * @param  string $ntableName 修改后模型名称
	 * @param  int $mid 模型ID
	 * @return bool
	 */
	public function editValidateModel($otableName,$ntableName,$mid){
		if(strtolower($otableName) !== strtolower($ntableName)){
			
			# 删除原验证器，模型文件
			$this->deleteValidateModel($otableName);
			
			# 生成新模型文件
			$this->generateModel($ntableName,$mid);

			# 生成新验证器
			$this->generateValidate($ntableName,$mid);

			return true;
		}
	}

	/**
	 * 删除模型验证器文件函数
	 * @param  string $name 模型验证器名称
	 * @return null
	 */
	public function deleteValidateModel($name){
		if(!isset($name) || empty($name)){
            throw new Exception("删除模型验证器文件参数缺失！");
		}else{
			$name = ucfirst(strtolower($name));
            $v_file = ROOT_PATH.'app/common/validate/'.$name.'.php';
            $m_file = ROOT_PATH.'app/common/model/'.$name.'.php';
            if(is_file($v_file) && is_file($m_file)){
                unlink($v_file);
                unlink($m_file);
            }
            return true;
		}
	}
	
	/**
	 * 生成验证规则
	 * @param  string $table 表名
	 * @param  string $cname 提示信息
	 * @param  string $ename 字段名称
	 * @param  string $val 字段类型
	 * @param  int $isneed 是否必填
	 * @return string 规则
	 */
	private function generateRules($table,$cname,$ename,$type,$isneed){
		$str = "\t\t'".$ename."|".$cname."' => ";
		switch($type){
			case "number":
				if($isneed == 1){
					return $str."'require|number',\r\n";
				}else{
					return $str."'number',\r\n";
				}
				break;
			case "float":
				if($isneed == 1){
					return $str."'require|float',\r\n";
				}else{
					return $str."'float',\r\n";
				}
				break;
			case "date":
				if($isneed == 1){
					return $str."'require|date',\r\n";
				}else{
					return $str."'date',\r\n";
				}
				break;
			case "email":
				if($isneed == 1){
					return $str."'require|email',\r\n";
				}else{
					return $str."'email',\r\n";
				}
				break;
			case "alpha":
				if($isneed == 1){
					return $str."'require|alpha',\r\n";
				}else{
					return $str."'alpha',\r\n";
				}
				break;
			case "alphaNum":
				if($isneed == 1){
					return $str."'require|alphaNum',\r\n";
				}else{
					return $str."'alphaNum',\r\n";
				}
				break;
			case "url":
				if($isneed == 1){
					return $str."'require|url',\r\n";
				}else{
					return $str."'url',\r\n";
				}
				break;
			case "ip":
				if($isneed == 1){
					return $str."'require|ip',\r\n";
				}else{
					return $str."'ip',\r\n";
				}
				break;
			case "unique":
				if($isneed == 1){
					return $str."'require|unique:".strtolower($table)."',\r\n";
				}else{
					return $str."'unique:".strtolower($table)."',\r\n";
				}
				break;
			case "varchar":
			case "textarea":
			case "radio":
			case "checkbox":
			case "select":
				if($isneed == 1){
					return $str."'require',\r\n";
				}else{
					return null;
				}
				break;
		}
	}

	/**
	 * 检测字段类型及长度
	 * @param  string $val 字段类型
	 * @return array
	 */
	private function checkFields($val){
		$arr = [];
		switch($val){
			case "varchar":
				return $arr = ['VARCHAR',500,'NOT NULL',0];
				break;
			case "number":
				return $arr = ['INT',11,0,0];
				break;
			case "float":
				return $arr = ['FLOAT',13,0,2];
				break;
			case "date":
				return $arr = ['INT',11,0,0];
				break;
			case "email":
				return $arr = ['VARCHAR',20,'NOT NULL',0];
				break;
			case "alpha":
				return $arr = ['VARCHAR',500,'NOT NULL',0];
				break;
			case "alphaNum":
				return $arr = ['VARCHAR',500,'NOT NULL',0];
				break;
			case "url":
				return $arr = ['VARCHAR',100,'NOT NULL',0];
				break;
			case "ip":
				return $arr = ['VARCHAR',50,'NOT NULL',0];
				break;
			case "unique":
				return $arr = ['VARCHAR',500,'NOT NULL',0];
				break;
			case "textarea":
				return $arr = ['TEXT',0,'NOT NULL',0];
				break;
			case "radio":
				return $arr = ['INT',4,0,0];
				break;
			case "checkbox":
				return $arr = ['VARCHAR',500,'NOT NULL',0];
				break;
			case "select":
				return $arr = ['INT',11,0,0];
				break;
		}
	}	
}
