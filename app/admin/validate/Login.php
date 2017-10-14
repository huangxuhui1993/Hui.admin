<?php
namespace app\admin\validate;
use think\Validate;
use app\admin\model\User as UserModel;

class Login extends Validate{
    // 验证规则
    protected $rule = [
        ['name','require|checkName|token','请输入账号！|抱歉，该用户不存在！|表单令牌错误！'],
        ['password','require|checkPassword','请输入密码！|您的密码错误！'],
    ];

	// 验证用户账号
    protected function checkName($value){
        $user = UserModel::getByUsername($value);
        if($user){
        	return true;
        }else{
        	return false;
        }
    }

	// 验证用户密码
    protected function checkPassword($value,$rule,$data){
		$user = UserModel::getByUsername($data['name']);
        if($user['password'] == user_md5($value)){
            return true;
        }else{
            return false;
        }
    }
}
