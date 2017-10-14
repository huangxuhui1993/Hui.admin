<?php
namespace app\admin\model;
use think\Model;

class Convert extends Model{

	//读取器
    protected function getExtAttr($ext){
        return strtoupper($ext);
    }

	//自动完成
	protected $auto = ['create_time'];

	//修改器
    protected function setCreateTimeAttr(){
        return time();
    }

}
