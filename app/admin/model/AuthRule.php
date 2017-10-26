<?php
namespace app\admin\model;
use think\Model;

class AuthRule extends Model{

    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">已禁用</span>',
            1 => '<span class="label label-success radius">已启用</span>'
        ];
        return $status[$value];
    }

	// 自动完成
	protected $auto = ['type'];

    protected function setTypeAttr(){
        return 1;
    }
}
