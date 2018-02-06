<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\index\welcome.html";i:1516179008;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1517758706;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__ROOT__/js/html5shiv.js"></script>
<script type="text/javascript" src="__ROOT__/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/skin/<?php echo (isset($Huiskin) && ($Huiskin !== '')?$Huiskin:'default'); ?>/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__ROOT__/js/toastr/toastr.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__ADMIN__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="__ROOT__/js/jquery/jquery.min.js"></script> 

<title>我的桌面</title>
</head>
<body>
<div class="page-container">

	<div class="panel panel-default">
		<div class="panel-body">
			<p class="f-20 text-success">欢迎使用Hui.admin v1.0管理系统！</p>
			<p><i class="Hui-iconfont">&#xe728;</i> 运行天数：<?php echo site_run_time(); ?>天</p>
			<p><i class="Hui-iconfont">&#xe668;</i> <?php echo time_tips(); ?></p>
			<p><i class="Hui-iconfont">&#xe671;</i> 上次登录IP：<?php echo session('loginip'); ?>　　<i class="Hui-iconfont">&#xe606;</i> 上次登录时间：<?php echo date('Y-m-d H:i:s',session('logintime')); ?>　　<i class="Hui-iconfont">&#xe64b;</i> 登录次数：<?php echo $user_info['loginnumber']; ?></p>
		</div>
	</div>

	<table class="table table-border table-bordered table-bg mt-20 radius">
		<thead>
			<tr class="success">
				<th colspan="2" scope="col"><i class="Hui-iconfont">&#xe64f;</i> 服务器信息</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($server_list) || $server_list instanceof \think\Collection || $server_list instanceof \think\Paginator): $i = 0; $__LIST__ = $server_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $vo['name']; ?></td>
				<td><span class="label label-secondary radius"><?php echo $vo['val']; ?></span></td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>

<!--请在下方写此页面业务相关的脚本-->
</body>
</html>