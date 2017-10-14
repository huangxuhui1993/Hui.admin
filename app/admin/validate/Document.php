<?php
namespace app\admin\validate;
use think\Validate;

class Document extends Validate{
	//验证规则
	protected $rule = [
		['cid','require','请选择栏目分类！'],
		['table','require','自定义表名为空！'],
		['topic','require','请输入信息标题！'],
		['outurl','requireIf:isout,on','请输入外部链接！'],
		['hits','number','点击数必须为数字！'],
		['sorting','require|number','请输入文档排序|文档排序必须为数字！'],
		['content','require','请输入信息内容！'],
	];

}
