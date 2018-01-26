<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\conversion\preview.html";i:1516844235;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;}*/ ?>
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

<script type="text/javascript" src="__ROOT__/js/flexpaper/js/flexpaper_flash.js"></script>
<title>文件预览</title>
</head>
<body>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray">
		<span class="l">
			<a class="btn btn-success radius" href="javascript:;" onclick="close_window();">
				<i class="Hui-iconfont">&#xe6a6;</i> 关闭
			</a>
		</span>
		<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</div>

	<div class="cl mt-10">
		<?php if($rs['ext'] == 'swf'): ?>
			<div id="viewerPlaceHolder" style="width:860px;height:600px;">Document loading..</div>
			<script type="text/javascript">                
				var fp = new FlexPaperViewer('FlexPaperViewer', 'viewerPlaceHolder', {
						config:{
							SwfFile :'/<?php echo config('hui_files_path'); ?>/<?php echo $rs['url']; ?>',
							Scale :1,
							ZoomTransition : 'easeOut',
							ZoomTime : 0.5,
							ZoomInterval : 0.2,
							FitPageOnLoad : true,
							FitWidthOnLoad : true,
							FullScreenAsMaxWindow : false,
							ProgressiveLoading : false,
							MinZoomSize : 0.2,
							MaxZoomSize : 5,
							SearchMatchAll : false,
							InitViewMode : 'Portrait',
							RenderingOrder : 'flash',
							PrintPaperAsBitmap : false,
							ViewModeToolsVisible : true,
							ZoomToolsVisible : true,
							NavToolsVisible : true,
							CursorToolsVisible : true,
							SearchToolsVisible : true,                        
							localeChain: 'zh_CN',
							WMode : 'window'
						}
					});  
			</script>
		<?php else: ?>
			<p>PDF文件预览正在开发中...</p>
		<?php endif; ?>
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