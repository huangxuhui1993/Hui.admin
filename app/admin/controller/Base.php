<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;

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
            # 获取登录用户信息
            $user_info = User::get(session('uid'));
            $this->assign('user_info',$user_info);

            # 获取皮肤cookie
            $this->assign('Huiskin',cookie('Huiskin'));

            # 空数据提示
            $this->assign('empty_str','<tr class="text-c"><td colspan="20" class="f-14">暂时没有数据！</td></tr>');            
        }

    }

}
