<?php
// 后台函数公共文件
use think\Db;
use think\Request;
use think\Config;
use think\Session;
use auth\Auth;

/**
 * delete_model_data 删除文档自定义数据
 * @param  integer $cid 栏目ID
 * @param  integer $id  文档ID
 * @return boolean
 */
function delete_model_data($cid = 0,$id = 0){
    $bool = !empty($cid) && !empty($id) && is_numeric($cid) && is_numeric($id) ? true : false;
    if($bool){
        $cres = Db::name('channel')->field('model')->where('id', $cid)->find();
        if($cres){
            $mres = Db::name('models')->field('table')->where('id', $cres['model'])->find();
            if($mres){
                $dres = model($mres['table'])->where(['aid' => $id])->delete();
                return $dres ? true : false;
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
        $db = Db::name('attach');
        $result = $db->field('url,thumb')->where('id', $id)->find();
        if($result){
            $url = HUI_FILES . $result['url'];
            // 删除文件
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            // 删除缩略图
            if(!empty($result['thumb'])){
                $thumb = HUI_FILES . $result['thumb'];
                if(is_file($thumb)){
                    chmod($thumb, 0777);
                    unlink($thumb);
                }
            }
            // 删除文件数据
            return $db->where('id', $id)->delete() ? true : false;
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
        $db = Db::name('convert');
        $result = $db->field('url')->where('id', $id)->find();
        if($result){
            // 删除文件
            $url = HUI_FILES . $result['url'];
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            return $db->where('id', $id)->delete() ? true : false;
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
        $db = Db::name('export');
        $result = $db->field('url')->where('id', $id)->find();
        if($result){
            // 删除文件
            $url = HUI_FILES . $result['url'];
            if(is_file($url)){
                chmod($url, 0777);
                unlink($url);
            }
            return $db->where('id', $id)->delete() ? true : false;
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
        $result = Db::name('user')->where('id', $uid)->find();
        return $result ? $result: false;
    }else{
        return false;
    }
}

/**
 * get_user_role 获取管理员角色名称
 * @param  integer $uid 管理员ID
 * @return string
 */
function get_user_role($uid = 0){
    if(!empty($uid) && is_numeric($uid)){
        $result = Db::name('auth_group_access')->where('uid', $uid)->find();
        $auth_group = Db::name('auth_group')->where('id', $result['group_id'])->find();
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
    $bool = Session::has('uid') && Session::has('uname');
    return $bool ? true : false;
}

/**
 * get_auth 权限控制函数
 * @param    string     $name     需要验证的规则列表,支持逗号分隔的权限规则或索引数组
 * @param    boolean    $relation 如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
 * @return   boolean    通过验证返回true; 失败返回false
 */
function get_auth($name = '', $relation = 'or'){
    if(!empty($name)){
        $uid = Session::get('uid');
        $auth = new Auth();
        $result = $auth->check($name, $uid, $relation);
        return $result ? true :false;
    }else{
        return false;
    }
}