<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\system\logs.html";i:1516334737;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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
<title>日志管理</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form id="search">
			<input type="hidden" name="apage" id="apage" value="1">
			<input type="text" name="keywords" id="keywords" value="<?php echo $keywords; ?>" placeholder="请输入关键词" class="input-text radius search-input ">
			<button class="btn btn-success radius" type="button" onclick="ajaxPage(1);return;"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a class="btn btn-success radius" href="javascript:;" onclick="export_data('<?php echo url('Export/xlsxExport'); ?>','日志文件','ExportLogs')"><i class="Hui-iconfont">&#xe644;</i> 导出数据</a>
			<a class="btn btn-danger radius" href="javascript:;" onclick="del_logs('del')"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		</span>
		<span class="r">
			<form action="<?php echo url('System/logs'); ?>" method="get">
				共 <span class="badge badge-default radius" id="count"><?php echo $count; ?></span> 条数据
				<input type="text" name="page" class="page-input input-text radius ml-10" onkeyup="if(event.keyCode !=37 && event.keyCode != 39)value=value.replace(/\D/g,'')">
				<button class="btn btn-default radius" type="submit">跳转</button>
			</form>
		</span>
	</div>

	<div class="mt-20">
	
		<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>

		<form action="<?php echo url('System/dellog'); ?>" method="post" id="log-form">
			<table class="table table-border table-bordered table-hover table-bg table-sort">
				<thead>
					<tr>
						<th class="text-c"><input type="checkbox"></th>
						<th class="text-c">ID</th>
						<th class="text-c">管理员</th>
						<th class="text-c">客户端IP</th>
						<th>内容</th>
						<th class="text-c">时间</th>
						<th class="text-c">状态</th>
						<th class="text-c">操作</th>
					</tr>
				</thead>
				<tbody id="ajax_lists"><tr class="text-c"><td colspan="20" class="f-14">加载中...</td></tr></tbody>
			</table>
		</form>
		<div class="f-r" id="page">
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
<script type="text/javascript">
ajaxPage(1);
function ajaxPage(page){
	$('#apage').val(page);
    $.ajax({
        url:"<?php echo url('System/logs'); ?>",
        type:'POST',
        dataType:'json',
        data: $('#search').serialize(),
        success:function(json){
            dump(json)
            $('#ajax_lists').html(json.list);
            $('#page').html(json.page);
            $('#count').text(json.count);
        }
    });
}
</script>
</body>
</html>