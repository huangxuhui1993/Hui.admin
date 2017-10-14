<?php
namespace app\admin\validate;
use think\Validate;
use app\admin\model\User as UserModel;

class User extends Validate{
    // 验证规则
    protected $rule = [
        ['username','require|unique:user|min:5','请输入管理账号！|抱歉，该账号已存在！|账号最少五位！'],
        ['password','require|min:6','请输入密码！|密码最少六位！'],
        ['email','email','请输入正确的邮箱地址！'],
        ['group_id','require','请选择管理组！'],
        ['state','require','请选择账号状态！']
    ];
}
