<?php
namespace app\home\controller;

class Index{

    public function index(){

    	$html = <<<TXT
			<style type="text/css">
				*{padding:0;margin:0;}
    			body{background:#fff;font-family:"Century Gothic","Microsoft yahei";color:#333;font-size:18px;}
    			h1{font-size:100px;font-weight:normal;margin-bottom:12px;}
    			p{line-height:1.6em;font-size:42px;}
    		</style>
    		<title>Hui.admin</title>
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
TXT;

    	return $html;
    }

}
