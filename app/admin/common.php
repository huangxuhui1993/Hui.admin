<?php
// 后台函数公共文件
use think\Db;
use think\Request;
use think\Config;
use think\Session;
use app\admin\model\User;
use app\admin\model\Attach;
use app\admin\model\Convert;
use app\admin\model\Export;
use app\admin\model\AuthGroup;
use app\admin\model\AuthGroupAccess;
use app\admin\model\Channel;
use app\admin\model\Models;

/**
 * delete_model_data 删除文档自定义数据
 * @param  integer $cid 栏目ID
 * @param  integer $id  文档ID
 * @return boolean
 */
function delete_model_data($cid = 0,$id = 0){
    $bool = !empty($cid) && !empty($id) && is_numeric($cid) && is_numeric($id) ? true : false;
    if($bool){
        $result = Channel::get($cid);
        if($result){
            $mrs = Models::get($result['model']);
            if($mrs){
                model($mrs['table'])->where(['aid' => $id])->delete();
                return true;
            }else{
                return false;
            }
        }
    }else{
        return false;
    }
}

/**
 * delete_file 删除文件
 * @param  integer $id 文件ID
 * @return boolean
 */
function delete_file($id = 0){
    if(!empty($id) && is_numeric($id)){
        $db = Attach::get($id);
        if($db){
            $url = HUI_FILES . $db->url;
            // 删除文件
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            // 删除缩略图
            if(!empty($db->thumb)){
                $thumb = HUI_FILES . $db->thumb;
                if(is_file($thumb)){
                    chmod($thumb, 0777);
                    unlink($thumb);
                }
            }
            // 删除文件数据
            return $db->delete() ? true : false;
        }
    }else{
        return false;
    }
}

/**
 * delete_conversion 删除转换文件
 * @param  integer $id 文件ID
 * @return boolean
 */
function delete_conversion($id = 0){
    if(!empty($id) && is_numeric($id)){
        $db = Convert::get($id);
        if($db){
            // 删除文件
            $url = HUI_FILES . $db->url;
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            $result = $db->delete();
            return $result ? true : false;
        }
    }else{
        return false;
    }
}

/**
 * delete_export 删除导出文件
 * @param  integer $id 文件ID
 * @return boolean
 */
function delete_export($id = 0){
    if(!empty($id) && is_numeric($id)){
        $db = Export::get($id);
        if($db){
            // 删除文件
            $url = HUI_FILES . $db->url;
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            $result = $db->delete();
            return $result ? true : false;
        }
    }else{
        return false;
    }
}

/**
 * get_user_info 获取管理员账号
 * @param  integer $uid 用户ID
 * @return string
 */
function get_user_info($uid = 0){
    if(!empty($uid) && is_numeric($uid)){
        $result = User::get($uid);
        return $result ? $result: false;
    }else{
        return false;
    }
}

/**
 * get_user_role 获取管理员角色
 * @param  integer $uid 管理员ID
 * @return string
 */
function get_user_role($uid = 0){
    if(!empty($uid) && is_numeric($uid)){
        $result = AuthGroupAccess::getByUid($uid);
        $auth_group = AuthGroup::get($result['group_id']);
        return $auth_group['title'];
    }else{
        return false;
    }
}

/**
 * breadcrumb 生成面包屑函数
 * @param  array $arr 面包屑参数
 * @return string     面包屑
 */
function breadcrumb($arr = []){
    if(!empty($arr) && is_array($arr)){
        $str = '<a onClick="removeIframe();" href="javascript:;"><i class="Hui-iconfont">&#xe67f;</i> 首页</a>';
        foreach($arr as $key => $value){
            $str .= '<span class="c-gray en">&gt;</span>'.$value;
        }
        return $str;
    }else{
        return false;
    }
}

/**
 * is_login 检测登录状态
 * @return boolean
 */
function is_login(){
    return Session::has('uid') && Session::has('uname') ? true : false;
}