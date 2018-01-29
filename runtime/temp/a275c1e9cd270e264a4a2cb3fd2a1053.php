<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\files\upload_file.html";i:1500706301;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1516177861;}*/ ?>
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
<title>上传文件列表</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('Files/uploadFile'); ?>" method="post">
			<span class="channel-select select-box radius mr-20">
	            <select name="state" id="state" class="select">
	            	<option value=""><?php echo !empty($state)?'显示全部' : '请选择状态'; ?></option>
					<option value="1">已使用</option>
					<option value="2">未使用</option>
	            </select>
			</span>
			<input type="text" name="keywords" value="<?php echo $keywords; ?>" placeholder="请输入文件名（或格式）" class="search-input input-text radius">
			<button class="btn btn-success radius" type="submit" ><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a class="btn btn-success radius" href="javascript:;" onclick="delete_info('<?php echo url('Files/cleanFile'); ?>','垃圾文件')">
				<i class="Hui-iconfont">&#xe6e2;</i> 清理垃圾文件
			</a>
		</span>
		<span class="r va-m">
			总数：<span class="badge badge-default radius mr-10"><?php echo $count; ?></span>
			使用中：<span class="badge badge-success radius mr-10"><?php echo $ycount; ?></span>
			未使用：<span class="badge badge-warning radius"><?php echo $ncount; ?></span>
			<smail class="c-success">（请定时清理未使用文件，减少磁盘负担）</smail>
		</span>
	</div>

	<div class="portfolio-content">
		<script type="text/javascript">
	window.onload = function(){ 
		prompt_window('<?php echo (\think\Session::get('msg') ?: "empty"); ?>','<?php echo (\think\Session::get('code') ?: "empty"); ?>');
	}
</script>

		<ul class="cl portfolio-area">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li class="item" id="tips<?php echo $vo['id']; ?>">
					<div class="portfoliobox">
						<input class="checkbox" name="" type="checkbox" value="<?php echo $vo['id']; ?>">
						<a href="<?php echo get_file_url($vo['id'],'__ROOT__/images/nopic.png',false); ?>" target="_blank" title="点击下载">
							<div class="picbox">
								<img src="__ROOT__/images/files/<?php echo $vo['ext']; ?>.png">
							</div>
						</a>
						<div class="textbox f-18">
							<a title="删除" href="javascript:;" onclick="delete_file('<?php echo $vo['id']; ?>')" data-toggle="tooltip" data-placement="top">
								<i class="Hui-iconfont">&#xe6e2;</i>
							</a>
							<a title="详情" href="javascript:;" class="ml-10" onclick="tips('文件类型：<?php echo get_file_type($vo['type']); ?><br>原文件名称：<?php echo $vo['title']; ?><br>大小：<?php echo truesize($vo['size']); ?><br>上传时间：<?php echo $vo['create_time']; ?>','tips<?php echo $vo['id']; ?>')" data-toggle="tooltip" data-placement="top">
								<i class="Hui-iconfont">&#xe695;</i>
							</a>
						</div>
						<em>
							<?php if($vo['aid'] != '0'): ?>
							<span class="label label-success radius">使用中</span>
							<?php else: ?>
							<span class="label label-warning radius">未使用</span>
							<?php endif; ?>
						</em>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
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
	// 初始化
	$("#state").val('<?php echo $state; ?>');
	$(".portfolio-area li").Huihover();
});

// 删除文件
function delete_file(id){
    if(id.length == 0){
        parent.layer.msg('没有文件可以删除', {icon:0,shade: 0.04,time:1000,offset:'100px'});
        return false;
	}
    parent.layer.msg('删除之后无法恢复！', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
        	parent.layer.close(index);
		    $.ajax({type:'post', url:"<?php echo url('Common/deleteFile'); ?>",data:{'id':id},
		        success: function(result){
		            if(result.error == 0){
		                parent.layer.msg('删除成功', {icon:1,shade: 0.04,time:1000,offset:'100px'},function(){
		                	location.href = "<?php echo url('Files/uploadFile'); ?>";
		                });
		            }else{
		                parent.layer.msg('删除失败', {icon:0,shade: 0.04,time:1000,offset:'100px'});
		            }
		        }
		    });
        }
    });
}

function tips(title,id){
	layer.tips(title,'#'+id,{
		tips: [1, '#000']
	});
}
</script>

</body>
</html>