<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\email\lis.html";i:1516867854;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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

<title>邮箱地址列表</title>
</head>

<body>
<div class="page-container">
	<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>

	<div class="text-c">
		<form action="<?php echo url('Email/add'); ?>" method="post" id="for">
			<input type="text" name="email" id="email" placeholder="请输入邮箱地址" value="<?php echo \think\Session::get('data.email'); ?>" class="search-input input-text radius">
			<input type="text" name="remarks" id="remarks" placeholder="备注" value="<?php echo \think\Session::get('data.remarks'); ?>" class="search-input input-text radius">
			<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 添加邮箱</button>
		</form>
	</div>
	<table class="table table-border table-bordered table-bg mt-10">
		<thead>
			<tr class="text-c">
				<th><input type="checkbox" class="email_id checkAllCurrent"></th>
				<th width="40">ID</th>
				<th>邮箱</th>
				<th>备注</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $vo['id']; ?>"  class="email_id checkItem"></td>
					<td><?php echo $vo['id']; ?></td>
					<td>
						<input type="text" id="email<?php echo $vo['id']; ?>" value="<?php echo $vo['email']; ?>" placeholder="请输入邮箱地址" class="input-text radius">
					</td>
					<td>
						<input type="text" id="remarks<?php echo $vo['id']; ?>" value="<?php echo $vo['remarks']; ?>" class="input-text radius">
					</td>
					<td>
						<a title="编辑" href="javascript:;" onclick="email_edit('<?php echo url('Email/edit'); ?>', '<?php echo $vo['id']; ?>')" class="ml-20" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a> 
						<a title="删除" href="javascript:;" onclick="" class="ml-20" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "$empty_str" ;endif; ?>
		</tbody>
	</table>
</div>

<input type="hidden" class="email_id xcheckValue" id="emails" />

<div class="text-c">
	<button class="btn btn-primary radius size-M" onclick="confirm_email();"><i class="Hui-iconfont">&#xe676;</i> 确认选择</button>
</div>

    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ROOT__/js/admin.js"></script>

        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript" src="__ROOT__/js/XCheck.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	// 多选
    $.XCheck({groupClass: ".email_id"});

	// 表单验证
	$("#for").validate({
		rules:{email: {required: true}},
		messages:{email: {required: ""}}
	});
});
</script>
</body>
</html>