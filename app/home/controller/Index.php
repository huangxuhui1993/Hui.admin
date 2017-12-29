<?php
namespace app\home\controller;
use think\Config;
use org\util\WeChat;

class Index{

	public function demo(){
		$url = 'http://127.0.0.2';
		$icon = 'http://127.0.0.2/favicon.ico';
		download_shortcut('Hui.url', $url, $icon);
	}

	public function wechat(){
    	$data = [
    		'openid' => 'o7dqp0pQq83eqe4Xk522Vut2PYF4',
    		'url' => 'http://www.baidu.com',
    		'template_id' => 'C-8aiVM-VY8ejsrlmvXq159iGzI0YSWvBABtGRIOeRg',
    		'data' => [
	            'first'    => ['value' => urlencode('黄旭辉'),'color' => "#0000"],
	            'keyword1' => ['value' => urlencode('男'),'color'=>'#0000'],
	            'keyword2' => ['value' => urlencode('1993-10-23'),'color' => '#0000'],
	            'remark'   => ['value' => urlencode('我的模板'),'color' => '#0000']
        	]
    	];
    	$WeChat = new WeChat();
    	$result = $WeChat::pushMessage($data);
    	dump($result);
	}

    public function index(){
    	$config = Config::get('websetup');
    	$title = $config['sitename'];
    	$keywords = $config['keywords'];
    	$describle = $config['describle'];

    	$html = <<<TXT
			<!DOCTYPE html>
			<html>
			<head>
			  	<meta charset="utf-8">
			  	<title>$title</title>
			  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			  	<meta name="keywords" content="$keywords">
			  	<meta name="description" content="$describle">
			</head>
				<style type="text/css">
					*{padding:0;margin:0;}
	    			body{background:#fff;font-family:"Century Gothic","Microsoft yahei";color:#333;font-size:18px;}
	    			h1{font-size:100px;font-weight:normal;margin-bottom:12px;}
	    			p{line-height:1.6em;font-size:42px;}
	    		</style>
			<body>
				<div style="padding: 24px 48px;"> 
					<h1>︸_︸</h1>
					<p> 
						Hui.admin<br/>
						<span style="font-size:30px">ThinkPHP V5强力驱动</span>
					</p>
					<span style="font-size:22px;">
						[ Hui.admin由：hui开发，邮箱：952612251@qq.com ]
					</span>
				</div>
			</body>
			</html>
TXT;

    	return $html;
    }

}
