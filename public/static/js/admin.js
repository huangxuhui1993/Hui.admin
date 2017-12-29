$(function(){
    // 全局配置参数
    laydate.skin('molv');
    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-bottom-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
});

// SystemTimer 系统定时器
function SystemTimer(){

    fnDate();

    window.setTimeout('SystemTimer()', 1000);
}

// 消息
function message(){
    alert('消息');
}

// 刷新之后显示当前页面
function initialize_page(){
    var data = $.cookie("Huimenu");
    if (data != undefined && data != 'null'){
        var dataObj = eval("("+data+")");
        creatIframe(dataObj.href, dataObj.title);
        min_titleList(); 
    }

}

// 查看图片
function see_img(src,title){
    var img_json = {
          "title": title,
          "id": 1,
          "start": 0,
          "data": [{
              "alt": title,
              "pid": 1,
              "src": src,
              "thumb": ""
            }]
        }
    layer.photos({
        photos: img_json,
        shift:0
    });
}

// 导出数据
function export_data(url,title,type){
    if(url == '' || title == '' || type == ''){
        parent.layer.msg('导出数据参数缺失!',{icon:0,time:1000,offset: '100px',shade: 0.03});
        return false;
    }
    window.onbeforeunload = function(event){
        return '关闭或刷新页面，将导致导出数据失败！';
    }
    var index;
    $.ajax({
        type:"POST",
        url:url,
        data:"type="+type,
        beforeSend: function(){
            index = parent.layer.msg('正在导出数据......',{
                icon: 16,
                offset: '100px',
                area: 'auto',
                shade: 0.4,
                shadeClose: false,
                time: 0
            });
        },
        success: function(result){
            window.onbeforeunload = '';
            parent.layer.close(index);
            if(result.error == 1){
                parent.layer.msg(result.msg,{offset: '100px'});
                return false;   
            }else{
                parent.layer.open({
                    title:'导出数据',
                    type: 1,
                    skin: 'layui-layer-lan',
                    shadeClose: true,
                    area: ['360px', '160px'],
                    content: '<div style="width:300px; height:40px; margin:10px; padding:20px;">恭喜，数据导出成功！<a href=\"'+result.file+'\" target="_blank" style="color:#F00">点此下载文件</a></div>'
                }); 
            }   
        }
    });
}

// 回收站操作
function recyclebin_operation(style,msg){
    parent.layer.msg('确定要'+msg+'！', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            $("#style").val(style);
            $("#document-form").submit();
        }
    });
    
}

// 文档操作
function document_operation(style,msg){
    parent.layer.msg('确定要'+msg+'！', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            $("#style").val(style);
            $("#document-form").submit();
        }
    });
    
}

// 添加文档
function add_document(url){
    var cid = $("#cid").val();
    if(cid == ''){
        parent.toastr.error("请选择栏目！");
        return false;
    }else{
        var addform = url+'?cid='+cid;
        window.location.href = addform;
    }
}

// 设置信息状态
function setup_status(url,status){
    var msg = status == 0 ? '确定要启用？':'确定要禁用？';
    parent.layer.msg(msg, {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            window.location.href = url;
        }
    });
}

// 重定向页面提示信息
function prompt_window(msg,code){
    if(code == 'success'){
        parent.toastr.success(msg);
    }else if(code == 'error'){
        parent.toastr.error(msg);
    }
}

// 跳转提示页面
function prompt_html(url,code,msg,wait){
    code = parseInt(code);
    wait = parseInt(wait);
    var interval = setInterval(function(){
        var time = --wait;
        if(time <= 0) {
            window.location.href = url;
        };
    },500);
    layer.confirm(msg,{
        title:'温馨的提示',
        icon: code,
        shade: 0.04,
        offset: ['50px'],
        closeBtn: 0,
        btn: ['跳转']
    },function(){
        window.location.href = url;
    });
}

// 清除缓存
function clear_cache(url){
    $.ajax({
        type: 'post',
        url: url,
        data: {'flag':1},
        beforeSend:function(){
            index = layer.msg('正在清除缓存...',{
                icon: 16,
                offset: '100px',
                area: 'auto',
                shade: 0.4,
                shadeClose: false,
                time: 0
            });
        },
        success: function(result){
            layer.close(index); // 关闭加载层
            if(result.error == 1){
                toastr.warning('暂无可清除的缓存！');
            }else{
                toastr.success('缓存清除成功！');
            }
        }
    });
}

// 备份数据库
function backup_db(url,style){
    window.onbeforeunload = function(event){
        return '关闭或刷新页面，将导致导备份文件受损！';
    }
    $.ajax({
        type: 'post',
        url: url,
        data:{'style':style},
        beforeSend:function(){
            index = parent.layer.msg('正在备份...',{
                icon: 16,
                offset: '100px',
                area: 'auto',
                shade: 0.04,
                shadeClose: false,
                time: 0
            });
        },
        success: function(result){
            window.onbeforeunload = '';
            parent.layer.close(index); // 关闭加载层
            if(result.error == 1){
                parent.layer.msg('数据库备份失败！', {icon:0,offset: '100px',shade: 0.03});
            }else{
                parent.layer.msg('数据库备份成功！', {icon:1,shade: 0.03,offset: '100px',time:1000},function(){
                    window.location.reload();
                });
            }
        },
        error: function(XmlHttpRequest, textStatus, errorThrown){
            parent.layer.msg('error!',{icon:0,time:1000,offset: '100px',shade: 0.03});
        }
    });
}

// 源代码文件路径
function code_path(url){
    layer.prompt({title: '请输入源代码路径',value: 'public/static/notepad.txt',offset: '100px'}, function(file, index){
        layer.close(index);
        var str = encodeURIComponent(file);
        var file_path = url+'?path='+str;
        code_window(file_path,'源代码：www/'+file,1);
    });
}

// 模型验证器
function models_path(url,file){
    var str = encodeURIComponent(file);
    var file_path = url+'?path='+str;
    code_window(file_path,'源代码：www/'+file,2);
}

// 删除信息提示
function delete_info(url,title){
    parent.layer.msg('您确定删除'+title+'？', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            window.location.href = url;
        }
    });
}

// 删除系统日志提示
function del_logs(url){
    parent.layer.msg('您确定删除系统日志？', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            if(url == 'del'){
                $("#log-form").submit();
            }else{
               location.href = url;
            }
        }
    });
}

// 批量删除导出文件
function export_del(){
    parent.layer.msg('您确定批量删除文件？', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            $("#files-form").submit();
        }
    });
}

// 批量删除转换文件
function conversion_del(){
    parent.layer.msg('您确定批量删除文件？', {
        time: 0,
        offset: '100px',
        btn: ['确定', '取消'],
        yes: function(index){
            parent.layer.close(index);
            $("#files-form").submit();
        }
    });
}

// 转换文件预览
function preview_file(url,title){
    // 获取窗口索引
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.open({
        title: title,
        type: 2,
        area: ['900px', '720px'],
        fixed: true, //不固定
        maxmin: false,
        scrollbar: false,
        content: url
    });
    parent.layer.close(index);
}

// 转换文件列表
function conversion_list(url,title){
    // 获取窗口索引
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.open({
        title: title,
        type: 2,
        area: ['80%', '720px'],
        fixed: true, //不固定
        maxmin: true,
        scrollbar: false,
        content: url
    });
    parent.layer.close(index);
}

// 个人设置窗口
function personal_window(url,title){
    layer.open({
        title: "个人信息",
        offset: '100px',
        type: 2,
        area: ['400px', '310px'],
        fixed: true, //不固定
        maxmin: false,
        scrollbar: false,
        content: url
    });
}

// 文件转换器窗口
function conversion_window(url,title){
    layer.open({
        title: '文档转换器',
        offset: '100px',
        type: 2,
        area: ['850px', '380px'],
        fixed: true, //不固定
        maxmin: false,
        scrollbar: false,
        content: url
    });
}

/**
 * 查看源代码窗口
 * @param url 文件路径
 * @param title 窗口名称
 * @param flag 1：可编辑，2：不可编辑
 * @returns {boolean}
 */
function code_window(url,title,flag){
    if(url == '' || title == '' || flag == ''){
        toastr.error("打开窗口参数缺失！");
        return false;
    }else{
        layer.open({
            title: title,
            type: 2,
            area: ['900px', '550px'],
            fixed: true, //不固定
            maxmin: false,
            scrollbar: false,
            content: url
        });
    }
}

// 发送邮件窗口
function send_mailer_window(url,title){
    layer.open({
        title: '发送邮件',
        type: 2,
        area: ['700px', '770px'],
        fixed: true, //不固定
        maxmin: false,
        scrollbar: false,
        content: url
    });
}

// 获取新闻
function getNews($val,$url){
    var type = $val;
    $.post($url,{type:type},function(result){
            var str = '';
            $.each(result,function(n,value){
                str += '<div class="col-sm-3" style="height:209px;">';
                str += '<div class="thumbnail">';
                str += '<a href="'+value.docurl+'" target="_blank">';
                str += '<img src="'+value.imgurl+'" alt="" style="height:85px;">';
                str += '</a>';
                str += '<div class="caption">';
                str += '<p>'+value.title+'</p>';
                str += '</div>';
                str += '</div>';
                str += '</div>';
            });
            $("#newslist").html('');
            $("#newslist").append(str);
    });
}

// 检测搜索内容
function search(){
    var keywords = $.trim($("#keywords").val());
    if(keywords == ''){
        parent.toastr.error("请输入搜索内容！");
        return false;
    }else{
        $("#search").submit();
    }
}

// 数据库统计图
function db_statistical(val,src){
    parent.layer.open({
        title: false,
        type: 1,
        closeBtn: 1,
        area: ['800px', '410px'],
        shadeClose: true,
        content: '<img src="'+src+'">'
    });
}

// 全屏
function full_screen(obj){
    var flag = $(obj).attr("flag");
    if (flag == 'on'){
        // 判断各种浏览器，找到正确的方法
        var element = document.documentElement;
        var requestMethod = element.requestFullScreen || //W3C
        element.webkitRequestFullScreen ||    //Chrome等
        element.mozRequestFullScreen || //FireFox
        element.msRequestFullScreen; //IE11
        if (requestMethod) {
            requestMethod.call(element);
        }else if (typeof window.ActiveXObject !== "undefined") {//for Internet Explorer
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
        $(obj).attr({"flag":"off","title":"退出全屏"});
    }else{
        // 判断各种浏览器，找到正确的方法
        var exitMethod = document.exitFullscreen || //W3C
        document.mozCancelFullScreen ||    //Chrome等
        document.webkitExitFullscreen || //FireFox
        document.webkitExitFullscreen; //IE11
        if (exitMethod) {
            exitMethod.call(document);
        }else if (typeof window.ActiveXObject !== "undefined") {//for Internet Explorer
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
        $(obj).attr({"flag":"on","title":"全屏"});
    }
}

// 检测浏览器是否安装flash
function flashChecker(){
    var hasFlash = 0;         //是否安装了flash
    var flashVersion = 0; //flash版本
    var isIE = /*@cc_on!@*/0;      //是否IE浏览器
    if(isIE){
        var swf = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
        if(swf){
            hasFlash = 1;
            VSwf = swf.GetVariable("$version");
            flashVersion = parseInt(VSwf.split(" ")[1].split(",")[0]);
        }
    }else{
        if (navigator.plugins && navigator.plugins.length > 0) {
            var swf = navigator.plugins["Shockwave Flash"];
            if (swf) {
                hasFlash = 1;
                var words = swf.description.split(" ");
                for (var i = 0; i < words.length; ++i) {
                    if (isNaN(parseInt(words[i]))) continue;
                    flashVersion = parseInt(words[i]);
                }
            }
        }
    }
    return {f:hasFlash,v:flashVersion};
}

// js获取当前时间
function fnDate(){
    var oDiv=document.getElementById("real-date");
    var date=new Date();
    var year=date.getFullYear(); // 当前年份
    var month=date.getMonth(); // 当前月份
    var data=date.getDate(); // 天
    var hours=date.getHours(); // 小时
    var minute=date.getMinutes(); // 分
    var second=date.getSeconds(); // 秒
    var time=year+"-"+fnW((month+1))+"-"+fnW(data)+" "+fnW(hours)+":"+fnW(minute)+":"+fnW(second);
    oDiv.innerHTML=time;
}

// 补位当某个字段不是两位数时补0
function fnW(str){
    var num;
    str>=10?num=str:num="0"+str;
    return num;
} 