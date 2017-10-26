<?php
namespace app\admin\validate;
use think\Config;
use think\Validate;
use app\admin\model\Fields as FieldsModel;

class Fields extends Validate{

    // 验证规则
    protected $rule = [
        'mid'       => ['require'],
        'cname'     => ['require'],
        'ename'     => ['require','alpha','unique:fields','checkSystemField'],
        'type'      => ['require'],
        'tips'      => ['require'],
        'values'    => ['requireIf:type,radio','requireIf:type,checkbox','requireIf:type,select'],
        'isneed'    => ['require'],
        'sorting'   => ['require','number'],
    ];

    // 提示
 	protected $message  =   [
        'mid.require'               => '抱歉，参数错误！',
        'cname.require'             => '请输入提示文字！',
        'ename.require'             => '请输入字段名称！',
        'ename.alpha'               => '字段名必须为英文字母！',
        'ename.unique'              => '抱歉，该字段名已存在！',
        'ename.checkSystemField'    => '抱歉，该字段属于系统字段！',
        'type.require'              => '请选择字段类型！',
        'tips.require'              => '请输入注释文字！',
        'values.requireIf'          => '请输入默认值！',
        'isneed.require'            => '请选择字段是否必填！',
        'sorting.require'           => '请输入排序数字！',
        'sorting.number'            => '排序必须为数字！',
    ];

    // 验证字段名是否为系统字段
    protected function checkSystemField($value){
        if(preg_match('/('.Config::get('fields_list').')$/i',$value)){
            return false;
        }else{
            return true;
        }
    }

}
