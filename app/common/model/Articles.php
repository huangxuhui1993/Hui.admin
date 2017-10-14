<?php
namespace app\common\model;
use think\Model;

// Hui.admin系统生成模型
class Articles extends Model{

	// 关联方法
	public function document(){
		return $this->hasOne('Document','id','aid');
	}

	// 自动完成
	protected $auto = ['update_time'];

	// 修改器
	protected function setUpdateTimeAttr(){
		return time();
	}

	// 时间获取器
	protected function getAddtimeAttr($value){
		return date('Y-m-d H:i:s',$value);
	}

	// 时间修改器
	protected function setAddtimeAttr($value,$result){
		if(is_numeric($value)){
			return $result;
		}else{
			return strtotime($value);
		}
	}

}
