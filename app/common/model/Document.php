<?php
namespace app\common\model;
use think\Session;
use think\Model;

class Document extends Model{
	
    // 读取器
    protected function getStatusAttr($value){
        $status = [
            0 => '<span class="label label-default radius">已隐藏</span>',
            1 => '<span class="label label-success radius">已审核</span>'
        ];
        return $arr = [
            '1' => $status[$value],
            '2' => $value
        ];
    }

	// 自动完成
	protected $auto = ['uid','create_time','content'];

	// 修改uid
    protected function setUidAttr(){
        return Session::get('uid');
    }

    // 创建时间
    protected function setCreateTimeAttr(){
        return time();
    }

    // 转译内容
    protected function setContentAttr($value){
        return encode(str_replace('\"','"',$value));
    }

    // 数组序列化
    protected function setPropertyAttr($value,$result){
        if(is_array($value)){
            return serialize($value);
        }
    }

    protected function setPhotosAttr($value,$result){
        if(is_array($value)){
            return serialize($value);
        }
    }

    protected function setAttachAttr($value,$result){
        if(is_array($value)){
            return serialize($value);
        }
    }
}
