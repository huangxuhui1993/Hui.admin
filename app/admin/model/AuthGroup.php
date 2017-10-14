<?php
namespace app\admin\model;
use think\Model;
use app\admin\model\AuthRule;

class AuthGroup extends Model{

    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">已禁用</span>',
            1 => '<span class="label label-success radius">已启用</span>'
        ];
        return $status[$value];
    }

    protected function getRulesAttr($value){
        $rules = explode(",",$value);
        $db = new AuthRule();
        foreach($rules as $k => $v){
            unset($where);
            $where['id'] = ['eq',$v];
            $where['pid'] = ['eq',0];
            $result = $db->where($where)->field('title')->find();
            $arr[] = $result['title'];
        }
        $arr = array_filter($arr);
        return implode(",",$arr);
    }

}
