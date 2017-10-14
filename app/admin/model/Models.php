<?php
namespace app\admin\model;
use think\Model;

class Models extends Model{

	//一对多关联方法
    public function fields(){
        return $this->hasMany('Fields','mid','id');
    }

    // 读取状态
    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">已禁用</span>',
            1 => '<span class="label label-success radius">已启用</span>'
        ];
        return $arr = [
            1 => $status[$value],
            2 => $value
        ];
    }

	//自动完成
	protected $auto = ['update_time','table'];

	//修改器
    protected function setUpdateTimeAttr(){
        return time();
    }

    protected function setTableAttr($value){
        return ucfirst(strtolower(trim($value)));
    }

}
