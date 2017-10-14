<?php
namespace app\admin\model;
use think\Model;

class Logs extends Model{

	// 读取时间
    protected function getTimeAttr($value){
        return date('Y-m-d H:i:s', $value);
    }

    // 读取状态
    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">失败</span>',
            1 => '<span class="label label-success radius">成功</span>'
        ];
        return $status[$value];
    }

	// 更新时间
	protected $auto = ['time'];
    protected function setTimeAttr(){
        return time();
    }

}
