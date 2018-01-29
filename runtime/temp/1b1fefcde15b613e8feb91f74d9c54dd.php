<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\files\export_file.html";i:1500704965;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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
<title>导出文件列表</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Files/exportFile'); ?>" method="post">
			<input type="text" name="keywords" value="<?php echo $keywords; ?>" placeholder="请输入文件名" class="search-input input-text radius">
			<button class="btn btn-success radius" type="submit" ><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a class="btn btn-danger radius" href="javascript:;" onclick="export_del()">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除
			</a>
		</span>
		<span class="r">共 <span class="badge badge-default radius"><?php echo $count; ?></span> 条数据</span>
	</div>

	<div class="portfolio-content">
		<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>

		<form action="<?php echo url('Files/exportDel'); ?>" method="post" id="files-form">
			<ul class="cl portfolio-area">
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="item" id="tips<?php echo $vo['id']; ?>">
						<div class="portfoliobox">
							<input class="checkbox" name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>">
							<a href="/<?php echo config('hui_files_path'); ?>/<?php echo $vo['url']; ?>" target="_blank" title="点击下载">
								<div class="picbox">
									<img src="__ROOT__/images/files/<?php echo $vo['ext']; ?>.png">
								</div>
							</a>
							<div class="textbox f-18">
								<a title="删除" href="javascript:;" onclick="delete_info('<?php echo url('Files/exportDel',['id'=>$vo['id']]); ?>','导出文件')">
									<i class="Hui-iconfont">&#xe6e2;</i>
								</a>
								<a title="详情" href="javascript:;" class="ml-10" onclick="tips('文件分类：<?php echo $vo['title']; ?><br>文件名称：<?php echo $vo['name']; ?><br>导出时间：<?php echo $vo['create_time']; ?>','tips<?php echo $vo['id']; ?>')" data-toggle="tooltip" data-placement="top">
									<i class="Hui-iconfont">&#xe695;</i>
								</a>
							</div>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</form>
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
$(function(){
	$(".portfolio-area li").Huihover();
});

function tips(title,id){
	layer.tips(title,'#'+id,{
		tips: [1, '#000']
	});
}
</script>

</body>
</html>