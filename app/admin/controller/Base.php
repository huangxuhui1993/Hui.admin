<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use app\admin\model\User;
use auth\Auth;

/**
 * 基类
 * Class Base
 * @package app\admin\controller
 */
class Base extends Controller{

    public function _initialize(){

		if(!is_login()){
           $this->redirect('Login/index');
        }else{
            // 获取登录session信息
            $session = Session::get();
            $this->assign('session_uid', $session['uid']);
            $this->assign('session_uname', $session['uname']);
            $this->assign('session_loginip', $session['loginip']);
            $this->assign('session_logintime', $session['logintime']);

            // 权限控制
            // $auth = new Auth();
            // $rule_name = request()->controller() . '/' . request()->action();
            // if(!$auth->check($rule_name, $session['uid'])){
            //     add_logs('管理员：' . $session['uname'] . '，进行越权操作！操作模块：' . $rule_name, 0);
            //     die('您对该模块没有操作权限！');
            // }

            // 获取皮肤cookie
            $this->assign('Huiskin', cookie('Huiskin'));

            // 空数据提示
            $this->assign('empty_str','<tr class="text-c"><td colspan="20" class="f-14">暂时没有数据！</td></tr>');            
        }

    }

}
