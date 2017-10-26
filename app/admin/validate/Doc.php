<?php
namespace app\admin\validate;
use think\Validate;
use app\admin\model\Doc as DocModel;

class Doc extends Validate{

	// 验证规则
	protected $rule = [
		['name','require','请输入属性名称！'],
		['mark','require|alpha|unique:doc','请输入标签！|标签必须为英文字母！|该标签已存在！'],
		['sorting','require|number','请输入信息排序！|排序必须为数字！'],
        ['status','require|number','请选择状态！|状态必须为数字！'],
	];

}
