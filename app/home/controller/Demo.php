<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Cache;

class Demo extends Controller{

	// redis增加数据
	public function redisSet(){
		$redis = Cache::store('redis');

		$data[] = uniqid();

		if($redis->has('goods')){
			$goods_list = $redis->get('goods');
			$data = array_merge($data, $goods_list);
		}

		$res = $redis->set('goods', $data, 0);
		dump($res);
	}

	// redis查询数据
	public function redisGet(){
		$list = Cache::store('redis')->get('goods');
		dump($list);
	}

	// redis删除数据
	public function redisRm(){
		$res = Cache::store('redis')->rm('goods');
		dump($res);
	}

}
