<?php
namespace app\admin\model;
use think\Model;

class Channel extends Model{

    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">已锁定</span>',
            1 => '<span class="label label-success radius">已开启</span>'
        ];
        return $arr = [
            1 => $status[$value],
            2 => $value
        ];
    }

	// 自动完成
	protected $auto = ['mname','update_time'];

    protected function setUpdateTimeAttr(){
        return time();
    }

    protected function setMnameAttr($value){
        return strtolower(trim($value));
    }
}
