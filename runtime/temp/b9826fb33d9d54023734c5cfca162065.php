<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\user\lis.html";i:1500617253;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1501424099;s:71:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\redirect.html";i:1500700021;}*/ ?>
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
<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb">
	<?php echo $bread; ?>
	<a class="refresh btn btn-success radius r" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo url('User/lis'); ?>" method="post" id="search">
			<input type="text" name="keywords" id="keywords" value="<?php echo $keywords; ?>" placeholder="请输入关键字" class="search-input input-text radius">
			<button class="btn btn-success radius" type="button" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a class="btn btn-primary radius" href="<?php echo url('User/add'); ?>" >
				<i class="Hui-iconfont">&#xe600;</i> 添加管理员
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
				<tr class="text-c">
					<th>ID</th>
                    <th>账号</th>
                    <th>角色</th>
                    <th>邮箱</th>
                    <th>登陆时间</th>
                    <th>登录IP</th>
                    <th>状态</th>
                    <th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['username']; ?></td>
                    <td><?php echo get_user_role($vo['id']); ?></td>
                    <td><?php echo $vo['email']; ?></td>
                    <td><?php echo $vo['logintime']; ?></td>
                    <td><?php echo $vo['loginip']; ?></td>
                    <td><?php echo $vo['state']['1']; ?></td>
					<td class="f-14">
						<a onclick="setup_status('<?php echo url('User/userState',['id'=>$vo['id'],'state'=>$vo['state']['2']]); ?>','<?php echo $vo['state']['2']; ?>')" href="javascript:;" title="状态" data-toggle="tooltip" data-placement="top">
							<?php if($vo['state']['2'] == '1'): ?>
								<i class="Hui-iconfont">&#xe631;</i>
							<?php else: ?>
								<i class="Hui-iconfont">&#xe615;</i>
							<?php endif; ?>
						</a>
						<a title="编辑" href="<?php echo url('User/edit',['id'=>$vo['id']]); ?>" class="ml-15" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a>
						<a title="删除" href="javascript:;" onclick="delete_info('<?php echo url('User/del',['id'=>$vo['id']]); ?>','管理员')" class="ml-15" data-toggle="tooltip" data-placement="top">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "$empty_str" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>

    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
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