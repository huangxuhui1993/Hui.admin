window.cookie_config = {expires:7, path:'/'};
$(function(){
    // 全局配置参数
    laydate.skin('molv');
    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });
});

// 记事本
function notepad(){
    if(typeof(Storage) !== "undefined"){ // Check browser support
        var data = localStorage.getItem("memoData");
        layer.prompt({
            title: '记事本',
            formType: 2,
            value: data,
            area: ['500px', '400px'] // 自定义文本域宽高
        }, function(text, index){
            layer.close(index);
            localStorage.setItem("memoData", text);
        });
    }else{
        layer.msg("抱歉！您的浏览器不支持 Web Storage ...");
    }
}

// 信息排序
function sorting(url, obj){
    var sort = $(obj).val();
    var id = $(obj).attr('alt');
    $.post(url, {id:id, sort:sort}, function(data){
        log(data);
        parent.layer.msg(data.msg);
    });
}

// 运行时间网络测试
function run_time(){
    var platform = navigator.platform; // 浏览器的操作系统平台
    $('#plat-form').empty().text(platform);

    var starttime = new Date();
    $.ajax({
        type:'GET',
        url:'/static/runtime.json',
        cache:false,
        success:function(data){
            var endtime = new Date();
            var runtime = endtime.getTime() - starttime.getTime();

            var boxObj = $("#run-time-box");
            boxObj.removeClass('label-default label-success label-warning label-danger');
            if(runtime <= 200){
                boxObj.addClass('label-success');
            }else if(runtime > 200 && runtime <= 500){
                boxObj.addClass('label-warning');
            }else{
                boxObj.addClass('label-danger');
            }

            $('#run-time').empty().text(runtime + '毫秒(MS)');
        }
    });
}

// 文件上传窗口
function upload_window(url){
    layer_open(url, '上传文件', 600, 240, 0.01, false);
}

// 确认选择邮箱
function confirm_email(){
    var index = parent.layer.getFrameIndex(window.name), // 获取iframe层的索引
    emails = $('#emails').val();
    if(emails != ''){
        parent.document.getElementById('emails').value = emails;
        parent.document.getElementById('emails-text').innerHTML = 'ID:(' + emails + ')';
        parent.layer.close(index); // 执行关闭
    }else{
        layer.msg('请选择邮箱！');
    }
}

// 修改邮箱
function email_edit(url, id){
    if(url != '' && id != ''){
        var email = $('#email' + id).val();
        var remarks = $('#remarks' + id).val();
        $.post(url, {id:id, email:email, remarks:remarks}, function(data){
            log(data);
            layer.msg(data.msg);
        });
    }else{
        layer.msg('参数缺失！');
    }
}

// 选择邮箱窗口
function select_email_window(url){
    layer_open(url, '邮箱列表', 900, 500, 0.01, false);
}

// 发送邮件窗口
function send_email_window(url){
    layer_open(url, '发送邮件', 900, 660, 0.1, false);
}

// 文档转换窗口
function conversion_window(url){
    layer_open(url, '文档转换', 850, 400, 0.1, false);
}

// 初始化高德地图
function init_map(){
    var infoWindow;
    var map = new AMap.Map('container', {
        zoom: 11,
        resizeEnable: true
    });
    map.plugin(['AMap.Scale', 'AMap.ToolBar', 'AMap.Geolocation', 'AMap.OverView', 'AMap.MapType'], function(){
        map.addControl(new AMap.Scale());    // 比例尺--展示地图在当前层级和纬度下的比例尺
        map.addControl(new AMap.ToolBar());  // 工具条--集成了缩放、平移、定位等功能按钮在内的组合控件
        map.addControl(new AMap.OverView()); // 鹰眼--在地图右下角显示地图的缩略图
        map.addControl(new AMap.MapType());  // 类别切换--实现默认图层与卫星图、实施交通图层之间切换的控

        // 定位插件
        geolocation = new AMap.Geolocation();
        map.addControl(geolocation);
        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', function(obj){ // 返回定位信息
            console.log(obj);
            // 构建信息窗体中显示的内容
            var info = [];
            info.push("<div>类型 : " + obj.location_type + "定位");
            info.push("状态 : " + obj.info);
            info.push("经度 : " + obj.position.lat);
            info.push("纬度 : " + obj.position.lng);
            info.push("位置：" + obj.addressComponent.province + '-' + obj.addressComponent.city + '-' + obj.addressComponent.district + "</div>");
            infoWindow = new AMap.InfoWindow({
                content: info.join("<br/>") //使用默认信息窗体框样式，显示信息内容
            });
            infoWindow.open(map, [obj.position.lng, obj.position.lat]);
        });
        AMap.event.addListener(geolocation, 'error', function(obj){ // 返回定位出错信息
            console.log(obj);
            parent.layer.msg('定位失败：' + obj.info + '--' + obj.message);
        });

        // 地图查询
        auto = new AMap.Autocomplete({input: 'where'});
        placeSearch = new AMap.PlaceSearch({ // 构造地点查询类
            map: map
        });
        AMap.event.addListener(auto, 'select', function(e){ // 注册监听，当选中某条记录时会触发
            placeSearch.setCity(e.poi.adcode);
            placeSearch.search(e.poi.name); // 关键字查询查询
        });

        // 为地图注册click事件获取鼠标点击出的经纬度坐标
        var clickEventListener = map.on('click', function(e){
            $('#lnglat').val(e.lnglat.getLng() + ',' + e.lnglat.getLat());
        });

    });
}

// 地图定位窗口
function positioning_window(url){
    layer_open(url, '地图定位', 750, 700, 0.1, false);
}

// 检测网速窗口
function netpersec_window(url){
    layer_open(url, '检测网速', 450, 290, 0.1, false);
}

// 数据表详情
function table_details(title, url){
    parent.layer_open(url, title, 850, 600, 0.1, true);
}

// 查看图片
function see_img(src,title){
    layer.photos({
        photos: {
            "title": title,
            "id": 1,
            "start": 0,
            "data": [{
                "alt": title,
                "pid": 1,
                "src": src,
                "thumb": ""
            }]
        },
        shift:0
    });
}

// 导出数据
function export_data(url, title, type){
    if(url == '' || title == '' || type == ''){
        parent.layer.msg('导出数据参数缺失!', {
            icon:0,
            time:1000,
            offset: '100px',
            shade: 0.03
        });
        return false;
    }
    window.onbeforeunload = function(event){
        return '关闭或刷新页面，将导致导出数据失败！';
    }
    var index;
    $.ajax({
        type:"POST",
        url:url,
        data:"type=" + type,
        beforeSend: function(){
            index = parent.loading('正在导出数据......');
        },
        success: function(result){
            window.onbeforeunload = '';
            parent.layer.close(index);
            if(result.error == 1){
                parent.layer.msg(result.msg, {offset: '100px'});
                return false;
            }else{
                parent.layer.open({
                    title: title,
                    type: 1,
                    skin: 'layui-layer-lan',
                    shadeClose: true,
                    area: ['360px', '160px'],
                    content: '<div style="width:300px; height:40px; margin:10px; padding:20px;">恭喜，数据导出成功！<a href=\"' + result.file + '\" style="color:#F00">点此下载文件</a></div>'
                });
            }
        }
    });
}

// 回收站操作
function recyclebin_operation(style,msg){
    parent.layer.msg('确定要' + msg + '！', {
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
    parent.layer.msg('确定要' + msg + '！', {
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
        parent.layer.msg("请选择栏目！");
        return false;
    }else{
        var addform = url + '?cid=' + cid;
        window.location.href = addform;
    }
}

// 设置信息状态
function setup_status(url, status){
    var msg = status == 0 ? '确定要启用？' : '确定要禁用？';
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
function prompt_window(msg, code){
    var title = "Hui.admin温馨提醒";
    if(code == 'success'){
        return parent.layer.alert(msg, {
            title:title,
            icon: 1,
            shade:0.1,
            time:2500
        });
    }
    if(code == 'error'){
        return parent.layer.alert(msg, {
            title:title,
            icon: 0,
            shade:0.1,
            time:2500
        });
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
    layer.confirm(msg, {
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
    var index;
    $.ajax({
        type: 'post',
        url: url,
        data: {'flag':1},
        beforeSend:function(){
            index = loading('正在清除缓存...');
        },
        success: function(result){
            layer.close(index); // 关闭加载层
            if(result.error == 1){
                layer.msg('暂无可清除的缓存！');
            }else{
                layer.msg('缓存清除成功！');
            }
        }
    });
}

// 备份数据库
function backup_db(url, style){
    window.onbeforeunload = function(event){
        return '关闭或刷新页面，将导致导备份文件受损！';
    }
    $.ajax({
        type: 'post',
        url: url,
        data:{'style':style},
        beforeSend:function(){
            index = parent.loading('正在备份...');
        },
        success: function(result){
            window.onbeforeunload = '';
            parent.layer.close(index); // 关闭加载层
            if(result.error == 1){
                parent.layer.msg('数据库备份失败！', {
                    icon:0,
                    offset: '100px',
                    shade: 0.03
                });
            }else{
                parent.layer.msg('数据库备份成功！', {
                    icon:1,
                    shade: 0.03,
                    offset: '100px',
                    time:1000
                },function(){
                    window.location.reload();
                });
            }
        },
        error: function(XmlHttpRequest, textStatus, errorThrown){
            parent.layer.msg('error!', {
                icon:0,
                time:1000,
                offset: '100px',
                shade: 0.03
            });
        }
    });
}

// 查看数据库备份sql文件
function get_sql_file(url, sql_path){
    var str = encodeURIComponent(sql_path);
    var file_path = url + '?path=' + str;
    code_window(file_path, '源代码：www/' + sql_path, 1);
}

// 源代码文件路径
function code_path(url){
    layer.prompt({
        title: '请输入源代码路径',
        offset: '100px'
    }, function(file, index){
        layer.close(index);
        var str = encodeURIComponent(file);
        var file_path = url + '?path=' + str;
        code_window(file_path, '源代码：www/' + file, 1);
    });
}

// 模型验证器
function models_path(url,file){
    var str = encodeURIComponent(file);
    var file_path = url + '?path=' + str;
    code_window(file_path, '源代码：www/' + file, 2);
}

// 删除信息提示
function delete_info(url,title){
    parent.layer.msg('您确定删除' + title + '？', {
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

// 个人设置窗口
function personal_window(url, title){
    layer_open(url, '个人信息', 400, 310, 0.1, false);
}

/**
 * 查看源代码窗口
 * @param url 文件路径
 * @param title 窗口名称
 * @param flag 1：可编辑，2：不可编辑
 * @returns {boolean}
 */
function code_window(url, title, flag){
    if(url == '' || title == '' || flag == ''){
        layer.msg("打开窗口参数缺失！");
        return false;
    }else{
        parent.layer_open(url, title, 900, 555, 0.1, false);
    }
}

// 检测搜索内容
function search(){
    var keywords = $.trim($("#keywords").val());
    if(keywords == ''){
        parent.layer.msg("请输入搜索内容！");
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
        content: '<img src="' + src + '">'
    });
}

// 检测浏览器是否安装flash
function flashChecker(){
    var hasFlash = 0,           // 是否安装了flash
    flashVersion = 0,           // flash版本
    isIE = /*@cc_on!@*/0;       // 是否IE浏览器
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
    var oDiv = document.getElementById("real-date"),
    date = new Date(),
    year = date.getFullYear(), // 当前年份
    month = date.getMonth(), // 当前月份
    data = date.getDate(), // 天
    hours = date.getHours(), // 小时
    minute = date.getMinutes(), // 分
    second = date.getSeconds(); // 秒
    var time = year + "-" + fnW((month + 1)) + "-" + fnW(data) + " " + fnW(hours) + ":" + fnW(minute) + ":" + fnW(second);
    oDiv.innerHTML = time;
}

// 补位当某个字段不是两位数时补0
function fnW(str){
    var num;
    str >= 10 ? num = str : num = "0" + str;
    return num;
}

// 刷新之后显示当前页面
function initialize_page(){
    var data = $.cookie("Huimenu");
    if(data != undefined && data != 'null'){
        var dataObj = eval("(" + data + ")");
        creatIframe(dataObj.href, dataObj.title);
        min_titleList(); 
    }
}

// 刷新验证码
function reload_verify(className){
    var verifyimg = $('.' + className).attr('src');
    if(verifyimg.indexOf('?') > 0){
        $('.' + className).attr('src', verifyimg + '&random=' + Math.random());
    }else{
        $('.' + className).attr('src', verifyimg.replace(/\?.*$/,'') + '?' + Math.random());
    }
}

// js打印日志
function log(str){
    try{
        console.log(str);
        // console.trace();
    }catch(exception){  
        return;  
    }
}

// 数据加载层
function loading(msg){
    return window.layer.msg(msg, {
        icon:16,
        area:'auto',
        shade:0.1,
        shadeClose:false,
        time:0
    });
}

/**
 * layer_open layer窗口
 * @param  {string}  url    页面路径
 * @param  {integer} w      窗口宽
 * @param  {integer} h      窗口高
 * @param  {integer} shade  遮罩层透明度
 * @param  {bool}    maxmin 最大化
 */
function layer_open(url, title, w, h, shade, maxmin){
    return window.layer.open({
        title: title,
        type: 2,
        area: [w + 'px', h + 'px'],
        fixed: true, // 不固定
        maxmin: maxmin,
        scrollbar: false,
        shade: shade,
        content: url
    });
}

/**
 * open_window 打开window窗口
 * @param  {string}  u 页面路径
 * @param  {integer} w 窗口宽
 * @param  {integer} h 窗口高
 * @param  {integer} r 窗口偏移
 */
function open_window(u, w, h, r, data){
    var l = (screen.width - w) / 2 - r;
    var t = (screen.height - h) / 2 - r;
    var e = window.open(u, "_blank", "width=" + w + ",height=" + h + ",toolbars=0,resizable=0,left=" + l + ",top=" + t);
    e.parentData = {w:w, h:h, data:data};
    e.focus();
    return e;
}

// 关闭window窗口
function close_window(){
    window.opener = null;
    window.open('', '_self');
    window.close();
}

// 格式化文件大小
function render_size(value){
    if(null == value || value == ''){
        return "0 Bytes";
    }
    var unitArr = new Array("Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB");
    var index = 0;
    var srcsize = parseFloat(value);
    index = Math.floor(Math.log(srcsize) / Math.log(1024));
    var size = srcsize / Math.pow(1024, index);
    size = size.toFixed(2); // 保留的小数位数
    return size + unitArr[index];
}

// 浏览器H5桌面通知
function show_notification(title, msg){
    var data = {body: msg, icon: "/favicon.ico"};
    var Notification = window.Notification || window.mozNotification || window.webkitNotification;
    if(Notification){ // 支持桌面通知
        if(Notification.permission == "granted") { // 已经允许通知
            var instance = new Notification(title, data);
            instance.onclick = function() { // 点击事件
                instance.close();
            };
        }else{ // 第一次询问或已经禁止通知(如果用户之前已经禁止显示通知，那么浏览器不会再次询问用户的意见，Notification.requestPermission()方法无效)
            Notification.requestPermission(function(status) {
                if(status === "granted"){ // 用户允许
                    var instance = new Notification(title, data);
                    instance.onclick = function() { // 点击事件
                        instance.close();
                    };
                }else{ // 用户禁止
                    return false;
                }
            });
        }
    }
}