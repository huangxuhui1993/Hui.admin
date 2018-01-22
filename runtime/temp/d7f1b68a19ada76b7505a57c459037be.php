<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\dbmanage\lis.html";i:1500807983;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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
<title>数据管理</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
<form name="frm" id="frm" method="post" action="<?php echo url('Dbmanage/optimize'); ?>">
	<div class="cl pd-5 bg-1 bk-gray">
		<span class="l">
			<button class="btn btn-success radius" type="submit"><i class="Hui-iconfont">&#xe728;</i> 立即优化</button>
			<a class="btn btn-primary radius" href="javascript:;" onclick="db_statistical('1','<?php echo url('Dbmanage/statistical',['style'=>1]); ?>')"><i class="Hui-iconfont">&#xe61c;</i> 记录数统计图</a>
			<a class="btn btn-primary radius" href="javascript:;" onclick="db_statistical('2','<?php echo url('Dbmanage/statistical',['style'=>2]); ?>')"><i class="Hui-iconfont">&#xe618;</i> 大小统计图</a>
			<a class="btn btn-primary radius" href="javascript:;" onclick="db_statistical('3','<?php echo url('Dbmanage/statistical',['style'=>3]); ?>')"><i class="Hui-iconfont">&#xe618;</i> 碎片统计图</a>
		</span>
	</div>
	<div class="mt-20">

		<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>


		<table class="table table-border table-bordered table-hover table-bg table-sort radius">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox"></th>
					<th>编号</th>
                    <th>表名</th>
                    <th>存储引擎</th>
                    <th>记录数</th>
                    <th>大小</th>
                    <th>碎片</th>
                    <th>整理</th>
                    <th>备注</th>
                    <th>创建时间</th>
                    <th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $vo['Name']; ?>" name="name[]"></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $vo['Name']; ?></td>
                    <td><?php echo $vo['Engine']; ?></td>
                    <td><?php echo $vo['Rows']; ?></td>
                    <td><?php echo truesize($vo['Data_length']); ?></td>
                    <td><?php echo truesize($vo['Data_free']); ?></td>
                    <td><?php echo $vo['Collation']; ?></td>
                    <td><?php echo $vo['Comment']; ?></td>
                    <td><?php echo $vo['Create_time']; ?></td>
                    <td class="f-14">
	                    <a title="预览" href="<?php echo url('Dbmanage/details',['name'=>$vo['Name']]); ?>" data-toggle="tooltip" data-placement="top">
	                    	<i class="Hui-iconfont">&#xe695;</i>
	                    </a>
                    </td>
				</tr>
			<?php endforeach; endif; else: echo "$empty_str" ;endif; ?>
			</tbody>
		</table>
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

</body>
</html>