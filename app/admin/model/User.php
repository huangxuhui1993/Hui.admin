<?php
namespace app\admin\model;
use think\Model;

class User extends Model{

	//读取器
    protected function getLogintimeAttr($value){
        return date('Y-m-d H:i:s', $value);
    }

    protected function getStateAttr($value){
        $state = [
            0 => '<span class="label label-default radius">已禁用</span>',
            1 => '<span class="label label-success radius">已启用</span>'
        ];
        return $arr = [
            1 => $state[$value],
            2 => $value
        ];
    }

    //自动完成
    protected $auto = ['utime'];

    protected function setUtimeAttr(){
        return time();
    }

    //修改器
    protected function setPasswordAttr($value,$result){
        $password = preg_replace('# #','',$value);
        if(!empty($password)){
            return user_md5($password);
        }else{
            return $result;
        }  
    }

}
