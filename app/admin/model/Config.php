<?php
namespace app\admin\model;
use think\Model;

class Config extends Model{

	// 读取类型
    protected function getTypeAttr($val){
        switch ($val) {
        	case 1:
        		return '自定义';
        		break;
        	case 2:
        		return '单行文本';
        		break;
        	case 3:
        		return '多行文本';
        		break;
        	case 4:
        		return '单选按钮';
        		break;
        	case 5:
        		return '下拉列表';
        		break;
        	default:
        		return '未知类型';
        		break;
        }
    }

    // 读取分组
    protected function getGroupAttr($val){
        switch ($val) {
        	case 1:
        		return '自定义';
        		break;
        	case 2:
        		return '网站配置';
        		break;
        	case 3:
        		return '接口配置';
        		break;
        	case 4:
        		return '文件配置';
        		break;
        	default:
        		return '未知分组';
        		break;
        }
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
        switch ($val) {
        	case 0:
        		return '<span class="label label-default radius">已禁用</span>';
        		break;
        	case 1:
        		return '<span class="label label-success radius">已启用</span>';
        		break;
        	default:
        		return '未知状态';
        		break;
        }
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
