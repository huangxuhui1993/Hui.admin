<?php
namespace app\admin\validate;
use think\Validate;
use app\admin\model\Channel as ChannelModel;

class Channel extends Validate{
    //验证规则
    protected $rule = [
        ['pid','require','请选择所属栏目！'],
        ['cname','require','请输入栏目名称！'],
		['ename','alpha','英文名称必须为字母！'],
        ['model','require','请选择栏目模型！'],
		['mname','requireIf:flag,1|alpha','请输入模块名称！|模块名称必须为英文字母！'],
		['outurl','requireIf:model,-1','请输入外部链接！'],
        ['sorting','require|number','请输入栏目排序！|排序必须是数字！']  
    ];
}
