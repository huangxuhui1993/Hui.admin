<?php
namespace app\admin\validate;
use think\Validate;

class Config extends Validate{

    // 验证规则
    protected $rule = [
        ['title','require','请输入配置名称！'],
        ['name','require|alphaDash|unique:config','请输入配置标识！|标识必须为字母和下划线组合！|该标识已存在！'],
        ['group','require','请选择配置分组！'],
        ['type','require','请选择配置类型！'],
        ['sort','require|number','请输入排序值！|排序值必须为数字！'],
    ];

}
