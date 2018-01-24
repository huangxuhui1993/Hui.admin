<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\common\network_speed.html";i:1516764846;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title>检测网速</title>
    </head>
    <style type="text/css">
        body,html{font-size:14px;font-family:"微软雅黑",Helvetica,Tahoma,Arial,sans-serif;color:#333;margin:0;padding:0}
        .box{text-align: center;margin-top: 10px;}
        img{width:200px;margin-top:10px;border:1px #999 solid;padding: 2px;}
    </style>
    <body>
    <div class="box">
        <div id="show-speed"></div>
        <script type="text/javascript">
            document.getElementById("show-speed").innerHTML = "正在下载测速图片，请稍后...";
            var Rand = Math.random();   
            var RandNum = 1 + Math.round(Rand * 1000);
            var szsrc = "http://test.hengdubank.com/Public/cs.jpg?rand=" + RandNum; // 服务器测试图片地址
            var st = new Date(); // 开始时间
            document.write("<img alt='测试图片' src='" + szsrc + "' onload='showSpeed()' />");
            function showSpeed(){
                var fs = 1.13 * 1024; // 图片文件大小(KB)
                var et = new Date(); // 结束时间
                var alltime = fs * 1000 / (et - st);
                var Lnum = Math.pow(10, 2);
                var kb_speed = Math.round(alltime * Lnum) / Lnum;
                var mb_speed = Math.round(kb_speed / 128 * Lnum) / Lnum;
                document.getElementById("show-speed").innerHTML = "您的下载速度为：" + kb_speed + " （KB/秒）  约 " + mb_speed + "（MB/秒）";
                window.parent.document.getElementById("js-wifi").children[1].innerHTML = mb_speed + "M/S";
                window.parent.document.getElementById("js-wifi").style.display = "block";
            }
        </script>
        <div>单位换算：宽带512kbps=64k/s&nbsp;&nbsp;1M=128k/s&nbsp;&nbsp;2M=256k/s。</div>
        <div>测试3-5次取平均值。</div>
    </div>
    </body>
</html>