<?php
namespace app\admin\model;
use think\Model;

class Doc extends Model{

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
	protected $auto = ['update_time'];

	//修改器
    protected function setUpdateTimeAttr(){
        return time();
    }

}
