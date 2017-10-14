<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\phpStudy\WWW\Hui\public/../app/admin\view\index\welcome.html";i:1500999028;s:61:"F:\phpStudy\WWW\Hui\public/../app/admin\view\public\meta.html";i:1501424099;}*/ ?>
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

<title>我的桌面</title>
</head>
<body>
<div class="page-container">

	<div class="panel panel-default">
		<div class="panel-body">
			<p class="f-20 text-success">欢迎使用Hui.admin v1.0管理系统！</p>
			<p><i class="Hui-iconfont">&#xe728;</i> 运行天数：<?php echo site_run_time(); ?>天</p>
			<p><i class="Hui-iconfont">&#xe668;</i> <?php echo time_tips(); ?></p>
			<p><i class="Hui-iconfont">&#xe671;</i> 上次登录IP：<?php echo session('loginip'); ?>　　<i class="Hui-iconfont">&#xe606;</i> 上次登录时间：<?php echo date('Y-m-d H:i:s',session('logintime')); ?>　　<i class="Hui-iconfont">&#xe64b;</i> 登录次数：<?php echo $user_info['loginnumber']; ?></p>
		</div>
	</div>
	
	<div class="panel panel-default mt-20">
		<div class="panel-header"><i class="Hui-iconfont">&#xe61c;</i> 信息统计</div>
		<div class="panel-body">
			<div class="row cl mt-20">
				<div id="access" class="col-xs-6 col-sm-6 statistical-1"></div>
				<div id="source" class="col-xs-6 col-sm-6 statistical-2"></div>
				<div id="document" class="col-xs-6 col-sm-6 statistical-3"></div>
				<div id="china" class="col-xs-6 col-sm-6 statistical-4"></div>
			</div>
		</div>
	</div>

	<table class="table table-border table-bordered table-bg mt-20 radius">
		<thead>
			<tr class="success">
				<th colspan="2" scope="col"><i class="Hui-iconfont">&#xe64f;</i> 服务器信息</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($server_list) || $server_list instanceof \think\Collection || $server_list instanceof \think\Paginator): $i = 0; $__LIST__ = $server_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $vo['name']; ?></td>
				<td><span class="label label-secondary radius"><?php echo $vo['val']; ?></span></td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script>

        <!-- echarts百度统计图插件 -->
        <script type="text/javascript" src="__ROOT__/js/echarts/echarts.min.js"></script>

<!-- 中国地图 -->
<script type="text/javascript" src="__ROOT__/js/echarts/china.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
// 初始化
toolbox = {feature:{saveAsImage:{},right:'20px'}};
textStyle = {fontSize: 14};

// 访问统计
var accessChart = echarts.init(document.getElementById('access'));
accessChart.setOption({
    title: {
    	text: '访问量',
    	textStyle:textStyle
	},
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c}"
    },
    legend: {
        data:['访问次数']
    },
    toolbox: {
		feature:{
			restore:{},
			saveAsImage:{},
			magicType: {
				type: ['line', 'bar']
			}
		}
	},
    xAxis: {
        data: <?php echo $access_list['x']; ?>
    },
    yAxis: {},
    series: [{
        name: '访问次数',
        type: 'bar',
        data: <?php echo $access_list['y']; ?>
    }],
    color:['#6e7074']
});

// 访问来源
var sourceChart = echarts.init(document.getElementById('source'));
sourceChart.setOption({
    title : {
        text: '访问来源',
        textStyle:textStyle,
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    toolbox: toolbox,
    legend: {
        orient: 'vertical',
        left: 'left',
        data: <?php echo $source_list['source']; ?>
    },
    series : [{
        name: '访问来源',
        type: 'pie',
        radius : '55%',
        center: ['50%', '60%'],
        data: <?php echo $source_list['value']; ?>,
        itemStyle: {
            emphasis: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'rgba(0, 0, 0, 0.5)'
            }
        }
    }]
});

// 文档统计
var documentChart = echarts.init(document.getElementById('document'));
documentChart.setOption({
    title: {
        text: '文档',
        textStyle:textStyle,
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c}"
    },
    legend: {
        data:['文档统计']
    },
    toolbox: {
		feature:{
			restore:{},
			saveAsImage:{},
			magicType: {
				type: ['line', 'bar']
			}
		}
	},
    xAxis: {
        data: <?php echo $document_list['x']; ?>
    },
    yAxis: {},
    series: [{
        name: '文档统计',
        type: 'line',
        data: <?php echo $document_list['y']; ?>
    }]
});

// 中国地图
var chartChart = echarts.init(document.getElementById('china'));
chartChart.setOption({
    title: {
        text: '地区',
        textStyle:textStyle
    },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c}次"
    },
    visualMap: {
        min: <?php echo $map_list['min']; ?>,
        max: <?php echo $map_list['max']; ?>,
        left: 'left',
        top: 'bottom',
        orient: 'horizontal',
        text: ['max', 'min'], // 文本，默认为数值文本
        calculable: true  //是否启用值域漫游，即是否有拖拽用的手柄，以及用手柄调整选中范围。
    },
    toolbox: {              //工具栏
        show: true,
        orient: 'vertical', //垂直
        left: 'right',
        top: 'center',
        feature: {
            mark: {show: true},
            saveAsImage: {show: true} //保存为图片
        }
    },
    series: [{
            name: '访问量',
            type: 'map',
            mapType: 'china',
            roam: true, //是否开启鼠标缩放和平移
            data: <?php echo $map_list['map']; ?>
        }]
});
</script>
</body>
</html>