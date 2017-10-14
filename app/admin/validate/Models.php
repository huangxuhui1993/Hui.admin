<?php
namespace app\admin\validate;
use think\Config;
use think\Validate;
use app\admin\model\Models as ModelsModel;

class Models extends Validate{
    //验证规则
    protected $rule = [
        'name'      => ['require'],
        'table'     => ['require','alpha','unique:models','checkSystemTable'],
        'sorting'   => ['require','number'],
    ];

    //提示
 	protected $message  =   [
        'name.require'              => '请输入模型名称！',
        'table.require'             => '请输入数据表名称！',
        'table.alpha'               => '表名必须为英文字母！',
        'table.unique'              => '抱歉，该数据表名已存在！',
        'table.checkSystemTable'    => '抱歉，该表名属于系统表！',
        'sorting.require'           => '请输入排序数字！',
        'sorting.number'            => '排序必须为数字！',
    ];

    //验证数据表名是否为系统表
    protected function checkSystemTable($value){
        if(preg_match('/('.Config::get('tables_list').')$/i',$value)){
            return false;
        }else{
            return true;
        }
    }

}
