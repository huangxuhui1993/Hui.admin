<?php
namespace app\admin\model;
use think\Model;

class Config extends Model{

	// 读取类型
    protected function getTypeAttr($val){
        $array = [
            1 => '自定义',
            2 => '单行文本',
            3 => '多行文本',
            4 => '单选按钮',
            5 => '下拉列表'
        ];
        return $array[$val];
    }

    // 读取分组
    protected function getGroupAttr($val){
        $array = [
            1 => '自定义',
            2 => '网站配置',
            3 => '接口配置',
            4 => '文件配置'
        ];
        return $array[$val];
    }

	// 读取创建时间
    protected function getCreateTimeAttr($val){
        return date('Y-m-d H:i:s', $val);
    }

	// 读取更新时间
    protected function getUpdateTimeAttr($val){
        return date('Y-m-d H:i:s', $val);
    }

    // 读取状态
    protected function getStatusAttr($val){
        $array = [
            0 => '<span class="label label-default radius">已禁用</span>',
            1 => '<span class="label label-success radius">已启用</span>'
        ];
        return $array[$val];
    }

	// 创建时间
	protected $insert = ['create_time'];
	protected function setCreateTimeAttr(){
        return time();
    }
	
	// 更新时间
	protected $auto = ['update_time'];
    protected function setUpdateTimeAttr(){
        return time();
    }

}
