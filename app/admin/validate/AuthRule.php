<?php
namespace app\admin\validate;
use think\Validate;

class AuthRule extends Validate{

	// 验证规则
	protected $rule = [
		['pid','require','请选择权限分组！'],
		['title','require','请输入权限名称！'],
		['name','require|unique:auth_rule','请输入权限规则！|抱歉，该规则已存在！'],
	];

}
