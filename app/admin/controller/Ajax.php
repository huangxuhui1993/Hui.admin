<?php
namespace app\admin\controller;
use think\Controller;

class Ajax extends Controller{

	public function NetworkSpeed(){
		return json(['status' => 'success', 'version' => 'v1.0']);
	}
	
}
