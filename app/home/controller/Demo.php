<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Cache;

class Demo extends Controller{

	public function index(){
		$redis = Cache::store('redis');
		
		$data = ['huang', 'xu', 'hui', 'liu', 'xia'];
		$redis->set('list', $data, 0);

		$list = $redis->get('list');
		dump($list);

	}

}
