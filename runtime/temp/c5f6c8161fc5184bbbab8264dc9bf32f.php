<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\system\config.html";i:1500617124;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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
<title>配置管理</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
	<form action="<?php echo url('System/config'); ?>" method="post" id="search">
		<input type="text" name="keywords" id="keywords" value="<?php echo $keywords; ?>" placeholder="请输入名称、标识" class="search-input input-text radius">
		<button class="btn btn-success radius" type="button" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a class="btn btn-primary radius" href="<?php echo url('System/add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加配置项</a>
			<a class="btn btn-primary radius" href="javascript:;" onclick="parent.code_window('<?php echo url('System/codemirror'); ?>','配置文件','2')"><i class="Hui-iconfont">&#xe63e;</i> 配置文件</a>
		</span>
		<span class="r">共 <span class="badge badge-default radius"><?php echo $count; ?></span> 条数据</span>
	</div>
	<div class="mt-20">
		<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>

		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="80">ID</th>
					<th width="150">标识</th>
					<th width="150">名称</th>
					<th width="100">类型</th>
					<th width="100">分组</th>
					<th width="150">添加时间</th>
					<th width="150">更新时间</th>
					<th width="100">状态</th>
					<th width="100">排序</th>
					<th width="150">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['name']; ?></td>
					<td><?php echo $vo['title']; ?></td>
					<td><?php echo $vo['type']; ?></td>
					<td><?php echo $vo['group']; ?></td>
					<td><?php echo $vo['create_time']; ?></td>
					<td><?php echo $vo['update_time']; ?></td>
					<td><?php echo $vo['status']; ?></td>
					<td><span class="badge badge-secondary radius"><?php echo $vo['sort']; ?></span></td>
					<td class="f-14">
						<a title="编辑" href="<?php echo url('System/edit',['id'=>$vo['id']]); ?>" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a>
						<a title="删除" href="javascript:;" onclick="delete_info('<?php echo url('System/del',['id'=>$vo['id']]); ?>','配置项')" class="ml-15" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "$empty_str" ;endif; ?>
			</tbody>
		</table>
		<div class="f-r">
			<?php echo $list->render(); ?>
		</div>
	</div>

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

</body>
</html>