<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\email\send.html";i:1516870403;s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\public\meta.html";i:1516177545;}*/ ?>
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

<link href="__ROOT__/js/webuploader/webuploader.css" rel="stylesheet" type="text/css" />

<title>发送邮件</title>

</head>
<body onbeforeunload="return '真的要关闭或刷新此窗口吗？请保存数据！'">
<article class="page-container">
	<form class="form form-horizontal" id="form-email-send">
		<div class="row cl">
			<label class="form-label col-xs-2">选择邮箱：</label>
			<div class="formControls col-xs-10">
				<a href="javascript:;" onclick="open_window('<?php echo url('Email/lis'); ?>', 900, 500, 0);" class="btn btn-success radius size-M">
					<i class="Hui-iconfont">&#xe667;</i> 邮箱列表
				</a>
				<input type="hidden" name="emails" id="emails">
				<span class="label label-default radius" id="emails-text"></span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-2">邮件标题：</label>
			<div class="formControls col-xs-9">
				<input type="text" class="input-text radius" value="" placeholder="请输入邮件标题" id="title" name="title">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-2">上传附件：</label>
			<div class="formControls col-xs-10">
				<div id="Attach"></div>
				<div class="uploader-thum-container">
					<div id="filePicker">
						<i class="Hui-iconfont">&#xe642;</i> 上传附件
					</div>
				</div>
				<input type="hidden" name="aid" id="aid">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-2">邮件内容：</label>
			<div class="formControls col-xs-10">
				<textarea id="content" name="content" class="size-MINI" style="border:0px;"></textarea>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-12 text-c">
				<button class="btn btn-primary radius size-M" type="submit"><i class="Hui-iconfont">&#xe603;</i> 发送邮件</button>
			</div>
		</div>
	</form>
</article>

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

<!--请在下方写此页面业务相关的脚本-->
    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ROOT__/js/admin.js"></script>
        <!-- 百度UE编辑器Start -->
        <script type="text/javascript" src="__ROOT__/js/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" src="__ROOT__/js/ueditor/ueditor.all.js"></script>
        <script type="text/javascript" src="__ROOT__/js/ueditor/lang/zh-cn/zh-cn.js"></script>
        <!-- 百度UE编辑器End -->
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script type="text/javascript" src="__ROOT__/js/webuploader/webuploader.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	var $progressbar = $("#progress-bar"); 							// 上传进度条
	var uploader = WebUploader.create({
		auto: true,													// 选完文件后，是否自动上传
		swf: '__ROOT__/js/webuploader/Uploader.swf', 				// 加载swf文件
		server: "<?php echo url('upload/fileUpload',['type' => 'attach']); ?>",	// 文件接收服务端
		pick: '#filePicker',										// 选择文件的按钮，可选
	});
    
    uploader.on( 'uploadProgress',function(file,percentage){		// 文件上传过程中创建进度条实时显示
        $progressbar.modal("show");
        $(".sr-only").css("width",percentage * 100 + '%');
        $("#percentage").text(Math.round(percentage * 100) + '%');
    });
	
	uploader.on('uploadSuccess', function(file,response){			// 文件上传成功
		console.log(response);
		if(response.error == 1){
            layer.msg(response.message);
        }else{
        	layer.msg(response.message);
	        $("#aid").val(response.id);
        	$(".uploader-thum-container").hide();
	    	var afterHtml = '';
		    	afterHtml += '<span class="attlist'+response.id+'">';
		    	afterHtml += '<div class="imgDiv">';
		        afterHtml += '<img src="__ROOT__/images/files/'+response.ext+'.png" class="img-responsive thumbnail" style="width:60px;height:60px;">';
		        afterHtml += '<a href="javascript:delete_file('+response.id+',1);" class="delete" title="删除">';
		        afterHtml += '<img src="__ADMIN__/h-ui.admin/images/dialog_del.gif">';
		        afterHtml += '</a>';
		        afterHtml += '</div>';
		        afterHtml += '</span>';
            $('#Attach').append(afterHtml);
        }
	});
	
	uploader.on('uploadError',function(file){						// 文件上传失败
		layer.msg('服务器错误!');
	});
   
    uploader.on('uploadComplete',function(file){					// 完成上传不论成功或失败，删除进度条
    	$progressbar.modal("hide");
    });

	// 百度编辑器
    window.UEDITOR_HOME_URL = "__ADMIN__/lib/Ueditor/";
    var Ueditor = UE.getEditor('content',{
        initialFrameHeight: 250,
        initialFrameWidth: 670,
        autoFloatEnabled: false,
        autoHeightEnabled:false,
        toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','emotion',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink',
            'horizontal', 'date', 'time', 'spechars', 'preview', 'searchreplace'
        ]]
    });

    // 邮件信息ajax提交
	$("form").validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "<?php echo url('Email/send'); ?>",
                beforeSend:function(){
                    index = loading('邮件正在发送中......');
                },
				success: function(result){
                    layer.close(index); // 关闭加载层
					if(result.error == 0){
						layer.msg('邮件发送成功!');
						$("#title").val("");
						Ueditor.setContent('');
					}else{
						layer.msg(result.msg);
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!');
				}
			});
		}
	});

});

// 清除文件
function delete_file(id){
    if(id.length == 0){
        layer.msg('没有文件可以删除', {icon:0,shade: 0.04,time:1000});
        return false;
	}
    $.ajax({type:'post', url:"<?php echo url('common/deleteFile'); ?>",data:{'id':id},
        success: function(result){
            if(result.error == 0){
            	$("#aid").val("");
            	$(".attlist" + id).remove();
                $(".uploader-thum-container").show();
                layer.msg('附件删除成功！', {icon:1,shade: 0.04,time:1000});
            }else{
                layer.msg('删除失败！', {icon:0,shade: 0.04,time:1000});
            }
        }
    });
}
</script> 
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>