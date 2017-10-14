<?php
namespace app\admin\model;
use think\Model;

class Fields extends Model{

    protected function getIsneedAttr($value){
        switch($value){
            case 0: 
                return '否';
                break;
            case 1:
                return '是';
                break;
            default:        
                return "未知";
        }  
    }

    protected function getTypeAttr($value){
        switch($value){
            case 'varchar': 
                return '单行文本';
                break;
            case 'number':
                return '整数类型';
                break;
            case 'float':
                return '小数类型';
                break;
            case 'date':
                return '时间日期';
                break;
            case 'email':
                return '邮箱类型';
                break;
            case 'alpha':
                return '字母类型';
                break;
            case 'alphaNum':
                return '数字字母混合';
                break;
            case 'url':
                return '链接类型';
                break;
            case 'ip':
                return 'IP类型';
                break;
            case 'unique':
                return '唯一类型';
                break;
            case 'textarea':
                return '多行文本';
                break;
            case 'radio':
                return '单选按钮';
                break;
            case 'checkbox':
                return '复选框';
                break;
            case 'select':
                return '下拉列表';
                break;
            default:        
                return "未知";
        }  
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
