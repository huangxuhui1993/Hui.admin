<?php
namespace app\admin\model;
use think\Model;

class Fields extends Model{

    protected function getIsneedAttr($value){
        $array = [0 => '否',1 => '是'];
        return $array[$value]; 
    }

    protected function getTypeAttr($value){
        $array = [
            'varchar'  => '单行文本',
            'number'   => '整数类型',
            'float'    => '小数类型',
            'date'     => '时间日期',
            'email'    => '邮箱类型',
            'alpha'    => '字母类型',
            'alphaNum' => '数字字母混合',
            'url'      => '链接类型',
            'ip'       => 'IP类型',
            'unique'   => '唯一类型',
            'textarea' => '多行文本',
            'radio'    => '单选按钮',
            'checkbox' => '复选框',
            'select'   => '下拉列表'
        ];
        return $array[$value];
    }

	//自动完成
	protected $auto = ['update_time','ename'];

	//修改器
    protected function setUpdateTimeAttr(){
        return time();
    }

    protected function setEnameAttr($value){
        return strtolower(trim($value));
    }
}
