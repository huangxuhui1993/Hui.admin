<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\Public\tips.html";i:1517843261;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1517758706;}*/ ?>
<!DOCTYPE HTML>
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
<title>信息提示</title>
</head>
<body>
	<div class="tips_main">
		<div class="tips_box">
			<h1>系统信息提示</h1>
			<div class="tips_con">
				<?php if(empty($url) || (($url instanceof \think\Collection || $url instanceof \think\Paginator ) && $url->isEmpty())): ?>
					<script type="text/javascript">
						(function(){
							var wait = '<?php echo $waitSecond; ?>';
							var interval = setInterval(function(){
								var time = --wait;
								if(time <= 0){
									window.location.href = '<?php echo $jumpUrl; ?>';
									clearInterval(interval);
								};
							}, 1000);
						})();
					</script>
					<p><?php echo $message; ?></p>
					<p><a href="<?php echo $jumpUrl; ?>">如果你的浏览器没反应，请点击这里...</a></p>
				<?php else: ?>
					<p><a href="<?php echo $url; ?>"><?php echo $message; ?></a></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>