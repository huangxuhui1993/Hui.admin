<?php
namespace app\home\controller;
use think\Db;
use think\Config;
use think\Request;
use think\Controller;
use org\util\HttpCurl;
use think\Cache;

class Demo extends Controller{

	public function test(){
		echo phpinfo();

		// Cache::store('redis')->set('name', 'hui', 3600);
		// Cache::get('name');
	}

	public function pjax(){
		return $this->fetch();
	}

	// 地图经纬度转地址
	public function amap(){
		$url = 'http://ditu.amap.com/service/regeo';
		$data = [
			'longitude' => '108.910493',
			'latitude' => '34.21241'
		];
		$result = HttpCurl::get($url, $data);
		$info = json_decode($result, true);
		dump($info);
	}

	// 手机号接口
	public function shoujihao(){
		$url = 'http://api.showji.com/Locating/www.showji.com.aspx';
		$data = [
			'm' => '18710366574', // 手机号
			'output' => 'json',
			'callback' => 'querycallback'
		];
		$result = HttpCurl::get($url, $data);
		$info = json_decode($result, true);
		dump($info);
	}

	// 快递接口
	public function kuaidi(){
		// ps:快递公司编码:申通="shentong" EMS="ems" 顺丰="shunfeng" 圆通="yuantong" 中通="zhongtong" 韵达="yunda" 天天="tiantian" 汇通="huitongkuaidi" 全峰="quanfengkuaidi" 德邦="debangwuliu" 宅急送="zhaijisong"
		$url = 'http://www.kuaidi100.com/query';
		$data = [
			'type'   => 'yuantong', 	// 快递公司编码
			'postid' => '11111111111' 	// 快递单号
		];
		$result = HttpCurl::get($url, $data);
		$info = json_decode($result, true);
		dump($info);
	}

	// 创建桌面图标
	public function shortcut(){
		$url = 'http://127.0.0.2';
		$icon = 'http://127.0.0.2/favicon.ico';
		download_shortcut('Hui.url', $url, $icon);
	}

}
