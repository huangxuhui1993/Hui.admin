<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\system\websetup.html";i:1500697111;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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

<title>网站配置</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

	<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>


	<form action="<?php echo url('System/websetup'); ?>" method="post" class="form form-horizontal" id="form-article-add">
		<input type="hidden" name="group" value="<?php echo $group; ?>">
		<div class="HuiTab">
			
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2"><?php echo $vo['title']; ?>：</label>
				<div class="formControls col-xs-8 col-sm-5">
					<?php switch($vo['type']): case "2": ?>
							<input type="text" name="<?php echo $vo['name']; ?>" id="<?php echo $vo['name']; ?>" placeholder="" value="<?php echo $vo['value']; ?>" class="input-text radius">
					    <?php break; case "3": ?>
							<textarea name="<?php echo $vo['name']; ?>" id="<?php echo $vo['name']; ?>" style="height:150px;" class="textarea radius" placeholder=""><?php echo $vo['value']; ?></textarea>
					    <?php break; case "4": ?>
							<span class="skin-minimal">
								<?php $_result=parse_config_attr($vo['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<div class="radio-box">
								    <input type="radio" name="<?php echo $vo['name']; ?>" id="<?php echo $vo['name']; ?>" value="<?php echo $key; ?>" <?php if($vo['value'] == $key): ?>checked<?php endif; ?> >
								    <label for="status"><?php echo $v; ?></label>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>
					    <?php break; case "5": ?>
							<span class="select-box radius">
								<select name="<?php echo $vo['name']; ?>" id="<?php echo $vo['name']; ?>" class="select">
									<option value="">请选择<?php echo $vo['title']; ?></option>
									<?php $_result=parse_config_attr($vo['extra']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $key; ?>" <?php if($vo['value'] == $key): ?>selected<?php endif; ?>><?php echo $v; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
					    <?php break; endswitch; ?>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>

			<div class="row cl">
				<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
					<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存更新</button>
				</div>
			</div>
		</div>
	</form>
</div>

    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ROOT__/js/admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
