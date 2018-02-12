<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\login\index.html";i:1518421651;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo config('websetup.sitename'); ?></title>
    <link rel="stylesheet" type="text/css" href="__ADMIN__/h-ui.admin/css/login.css" media="all">
    <script type="text/javascript" src="__ROOT__/js/jquery/jquery.min.js"></script> 
</head>
<body id="login-page">

    <p id="SBIE" style="width: 100%;height: 30px;background: red;text-align: center;line-height: 30px;color: #fff;display:none;">亲爱的管理员您好，本系統大部分功能均采用的H5新技术，因为您的浏览器版本过低不支持这些功能。为了您更好的使用本系统建议您升级浏览器。为您精心推荐：
        <a href="http://chrome.360.cn/" target="_blank">360浏览器</a>&nbsp;
        <a href="http://rj.baidu.com/soft/detail/14744.html?ald" target="_blank">谷歌浏览器</a>&nbsp;
        <a href="http://www.firefox.com.cn/" target="_blank">火狐浏览器</a>
    </p>
    
    <div id="main-content">
        <!-- 主体 -->
        <div class="login-body">
            <div class="login-main pr">
                <form action="<?php echo url('Login/checkLogin'); ?>" method="post" class="login-form">
                    <?php echo token(); ?>
                    <h3 class="welcome"><i class="login-logo"></i>Hui.admin管理平台</h3>
                    <div id="itemBox" class="item-box">
                        <div class="item">
                            <i class="icon-login-user"></i>
                            <input type="text" name="name" placeholder="请填写账号" autocomplete="off" />
                        </div>
                        <span class="placeholder_copy placeholder_un">请填写账号</span>
                        <div class="item b0">
                            <i class="icon-login-pwd"></i>
                            <input type="password" name="password" placeholder="请填写密码" autocomplete="off" />
                        </div>
                        <span class="placeholder_copy placeholder_pwd">请填写密码</span>
                        <div class="item verifycode">
                            <i class="icon-login-verifycode"></i>
                            <input type="text" name="code" placeholder="请填写验证码" autocomplete="off">
                            <a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
                        </div>
                        <span class="placeholder_copy placeholder_check">请填写验证码</span>
                        <div>
                            <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo captcha_src(); ?>">
                        </div>
                    </div>
                    <div class="login_btn_panel">
                        <button class="login-btn" type="submit">
                            <span class="in"><i class="icon-loading"></i>登 录 中 ...</span>
                            <span class="on">登 录</span>
                        </button>
                        <div class="check-tips"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ROOT__/js/layer/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/admin.js"></script>

<script type="text/javascript">
	// 登陆表单获取焦点变色
	$(".login-form").on("focus", "input", function(){
        $(this).closest('.item').addClass('focus');
    }).on("blur","input",function(){
        $(this).closest('.item').removeClass('focus');
    });

	// 表单提交
	$(document).ajaxStart(function(){
		$("button:submit").addClass("log-in").attr("disabled", true);
	})
	$(document).ajaxStop(function(){
		$("button:submit").removeClass("log-in").attr("disabled", false);
	});

	$("form").submit(function(){
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;
		function success(data){
    		if(data.status){
                window.location.href = data.url;
			}else{
				self.find(".check-tips").text(data.info);
				// 刷新验证码
				$(".reloadverify").click();
			}
		}
	});

	$(function(){
		// 初始化选中用户名输入框
		$("#itemBox").find("input[name=name]").focus();
		// 刷新验证码
		var verifyimg = $(".verifyimg").attr("src");
        $(".reloadverify").click(function(){
            if( verifyimg.indexOf('?') > 0){
                $(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
            }else{
                $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'') + '?' + Math.random());
            }
        });

        // placeholder兼容性
        // 如果支持 
        function isPlaceholer(){
            var input = document.createElement('input');
            return "placeholder" in input;
        }
        // 如果不支持
        if(!isPlaceholer()){
            $(".placeholder_copy").css({
                display:'block'
            });
            $("#itemBox input").keydown(function(){
                $(this).parents(".item").next(".placeholder_copy").css({
                    display:'none'
                })                    
            });
            $("#itemBox input").blur(function(){
                if($(this).val()==""){
                    $(this).parents(".item").next(".placeholder_copy").css({
                        display:'block'
                    })                      
                }
            }); 
        }
	});

    // 检测浏览器版本
    window.onload = function() {
        var userAgent = navigator.userAgent.toLowerCase();
        jQuery.browser = {
            version: (userAgent.match( /.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [])[1],
            safari: /webkit/.test( userAgent ),
            opera: /opera/.test( userAgent ),
            msie: /msie/.test( userAgent ) && !/opera/.test( userAgent ),
            mozilla: /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent )
        }; 
        if(jQuery.browser.version == '9.0' || jQuery.browser.version == '8.0' || jQuery.browser.version == '7.0'){
            $('#SBIE').show();
        }     
    } 
</script>
</body>
</html>
