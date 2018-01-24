<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\index\index.html";i:1516681492;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:69:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\header.html";i:1516788366;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\menu.html";i:1507622054;}*/ ?>
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
<script type="text/javascript" src="__ADMIN__/lib/html5shiv.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/skin/<?php echo (isset($Huiskin) && ($Huiskin !== '')?$Huiskin:'default'); ?>/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__ROOT__/css/admin.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__ROOT__/js/toastr/toastr.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__ADMIN__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 

<title>Hui.admin v1.0</title>
<!--Hui.admin v1.0-->
<meta name="keywords" content="Hui.admin v1.0">
<meta name="description" content="Hui.admin v1.0">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> 
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo url('index/index'); ?>">Hui.admin</a> 
			<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="<?php echo url('index/index'); ?>">Hui</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe63c;</i>  工具 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li>
								<a href="javascript:;" onclick="send_mailer_window('<?php echo url('Common/email'); ?>','发送邮件')">
									<i class="Hui-iconfont">&#xe68a;</i> 发送邮件
								</a>
							</li>
							<li>
								<a href="javascript:;" onclick="conversion_window('<?php echo url('Conversion/index'); ?>','文档转换器')">
									<i class="Hui-iconfont">&#xe6ab;</i> 文档转换
								</a>
							</li>
							<li>
								<a href="javascript:;" onclick="code_path('<?php echo url('Common/codemirror'); ?>')">
									<i class="Hui-iconfont">&#xe6ee;</i> 查看代码
								</a>
							</li>
							<li>
								<a href="javascript:;" onclick="network_speed('<?php echo url('Common/networkSpeed'); ?>')">
									<i class="Hui-iconfont">&#xe682;</i> 检测网速
								</a>
							</li>
							<li>
								<a href="javascript:;" onclick="map_location('<?php echo url('Common/positioning'); ?>')">
									<i class="Hui-iconfont">&#xe671;</i> 地图定位
								</a>
							</li>
						</ul>
					</li>
					<li style="display:none;" id="js-wifi"><i class="Hui-iconfont">&#xe6ce;</i> <span>0M/S</span></li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">

					<li><?php echo get_user_role(session('uid')); ?></li>
					
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><i class="Hui-iconfont f-16">&#xe60d;</i> <?php echo session('uname'); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li>
								<a href="javascript:;" onclick="clear_cache('<?php echo url('Common/clearcache'); ?>')">清除缓存</a>
							</li>
							<li>
								<a href="javascript:;" onclick="personal_window('<?php echo url('Common/userSetup'); ?>','账号设置')">个人信息</a>
							</li>
							<li>
								<a href="<?php echo url('home/index/index'); ?>" target="_blank">网站首页</a>
							</li>
							<li>
								<a href="<?php echo url('Login/logout'); ?>">退出登录</a>
							</li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="javascript:;" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont f-16">&#xe62f;</i></a> </li>

					<li id="Hui-msg"> <a href="javascript:;" onclick="full_screen(this)" flag="on" title="全屏"><i class="Hui-iconfont f-16">&#xe64f;</i></a> </li>

					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont f-16">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-channel">
			<dt><i class="Hui-iconfont">&#xe681;</i> 栏目导航<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('Channel/lis'); ?>" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-document">
			<dt><i class="Hui-iconfont">&#xe616;</i> 文档管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('Document/lis'); ?>" data-title="全部文档" href="javascript:void(0)">全部文档</a></li>
					<li><a data-href="<?php echo url('Document/recyclebin'); ?>" data-title="回收管理" href="javascript:void(0)">回收管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-models">
			<dt><i class="Hui-iconfont">&#xe72d;</i> 模型管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('Models/lis'); ?>" data-title="文档模型" href="javascript:;">文档模型</a></li>
					<li><a data-href="<?php echo url('Doc/lis'); ?>" data-title="文档属性" href="javascript:void(0)">文档属性</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-user">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('User/lis'); ?>" data-title="管理员列表" href="javascript:void(0)">管理人员</a></li>
					<li><a data-href="<?php echo url('Group/lis'); ?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="<?php echo url('Rule/lis'); ?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-conf">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('System/websetup',['group'=>2]); ?>" data-title="网站配置" href="javascript:void(0)">网站配置</a></li>
					<li><a data-href="<?php echo url('System/websetup',['group'=>3]); ?>" data-title="接口配置" href="javascript:void(0)">接口配置</a></li>
					<li><a data-href="<?php echo url('System/websetup',['group'=>4]); ?>" data-title="文件配置" href="javascript:void(0)">文件配置</a></li>
					<li><a data-href="<?php echo url('System/config'); ?>" data-title="配置管理" href="javascript:void(0)">配置管理</a></li>
					<li><a data-href="<?php echo url('System/logs'); ?>" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-dbmanage">
			<dt><i class="Hui-iconfont">&#xe639;</i> 数据管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('Dbmanage/lis'); ?>" data-title="数据库字典" href="javascript:void(0)">数据库字典</a></li>
					<li><a data-href="<?php echo url('Dbmanage/backlist'); ?>" data-title="数据库备份" href="javascript:void(0)">数据库备份</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-files">

			<dt><i class="Hui-iconfont">&#xe63e;</i> 文件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('Files/uploadFile'); ?>" data-title="上传文件" href="javascript:;">上传文件</a></li>
					<li><a data-href="<?php echo url('Files/conversionFile'); ?>" data-title="转换文档" href="javascript:;">转换文件</a></li>
					<li><a data-href="<?php echo url('Files/exportFile'); ?>" data-title="导出文件" href="javascript:;">导出文件</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="<?php echo url('Index/welcome'); ?>">我的桌面</span>
					<em></em>
				</li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div class="loading hide"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('Index/welcome'); ?>"></iframe>
		</div>
	</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
	</ul>
</div>

<div class="hide" id="network-speed"></div>

    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ROOT__/js/admin.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__ADMIN__/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>

<script type="text/javascript">
$(function(){
	// 初始化页面
	initialize_page();
	$(".loading").show();
	$("body").Huitab({
		tabBar:".navbar-wrapper .navbar-levelone",
		tabCon:".Hui-aside .menu_dropdown",
		className:"current",
		index:0,
	});
});
</script>
</body>
</html>