<?php
namespace app\home\controller;
use think\Controller;
use think\Request;

class Index extends Controller{

	public function index(Request $request){
		return $this->fetch();
	}

}
