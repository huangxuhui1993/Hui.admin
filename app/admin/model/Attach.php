<?php
namespace app\admin\model;
use think\Model;

class Attach extends Model{
	
	// 自动完成
	protected $auto = ['create_time'];

	// 修改器
    protected function setCreateTimeAttr(){
        return time();
    }

}
