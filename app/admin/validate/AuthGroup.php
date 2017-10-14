<?php
namespace app\admin\validate;
use think\Validate;

class AuthGroup extends Validate{

	//验证规则
	protected $rule = [
		['title','require|unique:auth_group','请输入管理组名称！|该管理组已存在！'],
        ['rules','require','请选择角色权限！'],
	];

}
