<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\conversion\index.html";i:1500722636;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1501424099;}*/ ?>
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
<link href="__ROOT__/js/webuploader/webuploader.css" rel="stylesheet" type="text/css" />
<title>文档转换器</title>
</head>
<body>
<div class="page-container">

	<form class="form form-horizontal" id="form-conversion">
		<div class="panel panel-default">
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
						<div class="uploader-thum-container">
							<input class="input-text upload-url radius f-l" type="text" name="uploadfile" id="uploadfile" readonly>
							<div class="ml-10" id="filePicker">
								<i class="Hui-iconfont">&#xe642;</i> 浏览文件
							</div>
							<button class="btn btn-default btn-uploadstar radius ml-10" type="button" onclick="delete_file()" >
								<i class="Hui-iconfont">&#xe6e2;</i> 清除文件
							</button>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="cl text-c mt-40">
			<button class="btn btn-primary radius" type="submit">
				<i class="Hui-iconfont">&#xe726;</i> 转换文件
			</button>
			<button class="btn btn-default radius ml-40" onclick="conversion_list('<?php echo url('Conversion/lis'); ?>','文件列表')" type="button">
				<i class="Hui-iconfont">&#xe667;</i> 文件列表
			</button>
		</div>

		<input type="hidden" name="id" id="id" value="">
	</form>

</div>

<!-- 上传进度条 -->
<div id="progress-bar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content radius">
			<div class="modal-body ">
				<p class="text-c">
					<span class="badge badge-default radius" id="percentage"></span>
				</p>
				
				<div class="progress radius" style="margin:20px auto;">
					<div class="progress-bar progress-bar-success">
						<span class="sr-only"></span>
					</div>
				</div>

			</div>
		</div>
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

        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript" src="__ROOT__/js/webuploader/webuploader.js"></script>
<script type="text/javascript">
$(function(){
	var $progressbar = $("#progress-bar"); // 上传进度条
	var $uploadfile = $("#uploadfile"); // 文件信息

	var uploader = WebUploader.create({
		// 选完文件后，是否自动上传
		auto: true,
		// swf文件路径
		swf: '__ROOT__/js/webuploader/Uploader.swf', // 加载swf文件
		// 文件接收服务端
		server: "<?php echo url('upload/fileUpload',['type'=>'office']); ?>",
		// 选择文件的按钮，可选
		pick: '#filePicker',
	});

    // 当文件被加入队列之前触发
    uploader.on('beforeFileQueued',function(file){
        var id = $("#id").val();
        if(id.length != 0){
            layer.msg('请先清除文件', {icon:0,shade: 0.04,time:1000});
            return false;
		}
    });

	// 当有文件被添加进队列的时候
    uploader.on('fileQueued',function(file){
        $uploadfile.val(file.name);
    });

	// 文件上传过程中创建进度条实时显示
    uploader.on( 'uploadProgress',function(file,percentage){
        $progressbar.modal("show");
        // 进度条
        $(".sr-only").css("width",percentage * 100 + '%');
        // 百分比
        $("#percentage").text(Math.round(percentage * 100) + '%');
    });

	// 文件上传成功
	uploader.on('uploadSuccess', function(file,response){
		console.log(response);
        if(response.error == 1){
            $uploadfile.val('');
            layer.msg(response.message, {icon:0,shade: 0.04,time:1000});
        }else{
            $("#id").val(response.id);
            layer.msg(response.message, {icon:1,shade: 0.04,time:1000});
        }
	});

	// 文件上传失败
	uploader.on('uploadError',function(file){
        $uploadfile.val('');
		layer.msg('服务器错误!');
	});

    // 完成上传不论成功或失败，删除进度条
    uploader.on('uploadComplete',function(file){
        $progressbar.modal("hide");
    });

	// 表单验证Ajax提交
	$("#form-conversion").validate({
		rules:{
			format:{required:true},
			uploadfile:{required:true},
			id:{required:true},
		},
		messages:{
		  	format:{required: "请选择转换的格式"},
		  	uploadfile:{required: "请上传文件"},
		  	id:{required: "文件参数缺失"},
		},
		onkeyup:false,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "<?php echo url('Conversion/fileConversion'); ?>",
                beforeSend:function(){
                    index = layer.msg('正在转换文件，请耐心等待...',{
                        icon: 16,
                        area: 'auto',
                        shade: 0.04,
                        shadeClose: false,
						time: 0
                    });
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
                                delete_file();
                            }
                        });
					}else{
                        layer.msg(result.msg, {icon:0,shade: 0.01,time:1000});
                    }
				},
                error:function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('server error!',{icon:0,time:1000});
				}
			});
		}
	});

});

// 清除文件
function delete_file(){
    var id = $("#id").val();
    if(id.length == 0){
        layer.msg('没有文件可以清除', {icon:0,shade: 0.04,time:1000});
        return false;
	}
    $.ajax({type:'post', url:"<?php echo url('Common/deleteFile'); ?>", data:{'id':id},
        success: function(result){
            if(result.error == 0){
                $("#id").val('');
                $("#format").val('');
                $("#uploadfile").val('');
                layer.msg('文件清除成功！', {icon:1,shade: 0.04,time:1000});
            }else{
                layer.msg('文件清除失败', {icon:0,shade: 0.04,time:1000});
            }
        }
    });
}
</script>
</body>
</html>