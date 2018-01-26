<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\conversion\lis.html";i:1516844232;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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

<title>转换文件列表</title>
</head>
<body>

<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray">
		<span class="l">
			<a class="btn btn-success radius" href="javascript:;" onclick="close_window();">
				<i class="Hui-iconfont">&#xe6a6;</i> 关闭
			</a>
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
				<tr>
					<th class="text-c">ID</th>
					<th>原文件名</th>
					<th class="text-c">页数</th>
					<th class="text-c">转换文件</th>
					<th class="text-c">格式</th>
					<th class="text-c">添加时间</th>
					<th class="text-c">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr>
					<td class="text-c"><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['title']; ?></td>
					<td class="text-c"><?php echo $vo['page']; ?></td>
					<td class="text-c"><?php echo $vo['name']; ?></td>
					<td class="text-c"><?php echo $vo['ext']; ?></td>
					<td class="text-c"><?php echo $vo['create_time']; ?></td>
					<td class="text-c f-14">
						<a title="预览" href="javascript:;" onclick="open_window('<?php echo url('Conversion/preview', ['id' => $vo['id']]); ?>', 900, 700, 0);" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe695;</i>
						</a>
						<a title="删除" href="javascript:;" onclick="delete_info('<?php echo url('Conversion/del', ['id' => $vo['id']]); ?>', '转换文件')" class="ml-15" data-toggle="tooltip" data-placement="top">
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
<script type="text/javascript">
	// 检测flash
    var fls = flashChecker();
    var url = ''
    if(!fls.f){
		//询问框
        parent.layer.confirm('您没有安装flash，无法预览swf文件',{
            title:'系统提示',
			btn: ['安装','取消'] //按钮
        },function(){
            window.open('https://www.adobe.com/go/getflash?spm=a2h0j.8191423.movie_player.5~5~5~8~A');
        },function(){
        });
	}
</script>
</body>
</html>