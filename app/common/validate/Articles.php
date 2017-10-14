<?php
namespace app\common\validate;

use think\Validate;

// Hui.admin系统生成验证器
class Articles extends Validate{

	// 验证规则
	protected $rule = [
		'author|作者'  => 'require',
		'email|邮箱'   => 'require|email',
		'addtime|时间' => 'require|date',
	];

}
