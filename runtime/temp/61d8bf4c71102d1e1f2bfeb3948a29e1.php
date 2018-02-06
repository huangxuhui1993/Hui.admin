<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\conversion\index.html";i:1517748887;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1517758706;}*/ ?>
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
<script type="text/javascript" src="__ROOT__/js/html5shiv.js"></script>
<script type="text/javascript" src="__ROOT__/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/skin/<?php echo (isset($Huiskin) && ($Huiskin !== '')?$Huiskin:'default'); ?>/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__ROOT__/js/toastr/toastr.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__ADMIN__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="__ROOT__/js/jquery/jquery.min.js"></script> 

<title>文档转换</title>
</head>

<body>
<div class="page-container">

	<form class="form form-horizontal" id="form-conversion">
		<div class="panel panel-default mt-10">
			<div class="panel-header"><i class="Hui-iconfont">&#xe647;</i> 完善表单内容</div>
			<div class="panel-body">

				<small>目前只支持Office各种格式文档（不包含PDF文件）转换PDF和SWF</small>

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">转换格式：</label>
					<div class="formControls col-xs-8 col-sm-8">
						<span class="select-box radius">
							<select name="format" id="format" class="select">
								<option value="">请选择转换的格式</option>
								<option value="1">PDF</option>
								<option value="2">SWF</option>
							</select>
						</span>
					</div>
				</div>

				<div class="row cl mb-20">
					<label class="form-label col-xs-4 col-sm-2">上传文件：</label>
					<div class="formControls col-xs-8 col-sm-10">
						<a href="javascript:;" class="btn btn-secondary radius size-M" onclick="open_window('<?php echo url('Common/uploadPage', ['type' => 'office', 'tag' => 'id']); ?>', 480, 170, 0);">
							<i class="Hui-iconfont">&#xe642;</i> 选择文件
						</a>
						<input type="text" class="input-text radius width-50" name="id" id="id" placeholder="ID" readonly>
					</div>
				</div>

			</div>
		</div>

		<div class="cl text-c mt-40">
			<button class="btn btn-primary radius" type="submit">
				<i class="Hui-iconfont">&#xe726;</i> 转换文件
			</button>
			<button class="btn btn-default radius ml-40" onclick="open_window('<?php echo url('Conversion/lis'); ?>', 1024, 720, 0);" type="button">
				<i class="Hui-iconfont">&#xe667;</i> 文件列表
			</button>
		</div>

	</form>

</div>

    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->

        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript">
$(function(){
	// 表单验证Ajax提交
	$("#form-conversion").validate({
		rules:{
			format:{required:true},
			id:{required:true},
		},
		messages:{
		  	format:{required: "请选择转换的格式"},
		  	id:{required: "文件参数缺失"},
		},
		onkeyup:false,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "<?php echo url('Conversion/fileConversion'); ?>",
                beforeSend:function(){
                    index = loading('正在转换文件，请耐心等待......');
                },
				success:function(result){
					console.log(result);
                    layer.close(index); // 关闭加载层
				    if(result.error == 0){
                        layer.msg('文件转换成功！',{
                            time: 0,
							btn: ['确认并清除原文件'],
							yes: function(ts){
                                layer.close(ts);
                            }
                        });
					}else{
                        layer.msg(result.msg);
                    }
				},
                error:function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('server error!');
				}
			});
		}
	});

});
</script>
</body>
</html>