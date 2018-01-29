<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\common\positioning.html";i:1517189795;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>百度地图API地点搜索</title>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>

    <style type="text/css">
        *{ font-family: "微软雅黑";font-size:14px;color: #222;}
        input{width: 50px;height:25px;}
        #city-name{font-weight: bold;}
        #where{ width:200px; height:20px; color:blue; margin-top: 10px;margin-bottom: 10px;}
        #container{width:550px;height:450px;border:2px solid gray;margin:10px auto;}
        .msg{color: red;padding-top: 10px;}
    </style>
        
</head>

<body>
<center>
    <label >当前城市：<span id="city-name">定位中...</span>，输入地点：</label>
    <input id="where" name="where" type="text" placeholder="请输入地址" value="">
    <input type="button" value="查找" onclick="sear(document.getElementById('where').value);" />
    <input type="button" value="刷新" onclick="location.replace(location.href);" />
    <div id="container"></div>
    <div class="msg">提示：输入地点然后点击“查找”搜索，再点击地图地点设置对应位置信息</div>
</center>

<script type="text/javascript">
    // IP定位
    var myCity = new BMap.LocalCity();
    myCity.get(function(result){
        console.log(result);
        var cityName = result.name;
        document.getElementById('city-name').innerHTML = cityName;
    });

    // 浏览器定位
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            alert('您的位置：' + r.point.lng + ',' + r.point.lat);
        }else {
            alert('浏览器不支持-' + this.getStatus());
        }        
    });

    // 创建地图实例
    var map = new BMap.Map('container');
    var point = new BMap.Point(108.953098279, 34.2777998978);  // 创建点坐标
    map.centerAndZoom(point, 13);                       // 初始化地图，设置中心点坐标和地图级别
    map.enableScrollWheelZoom(true);                    // 开启鼠标滚轮缩放
    map.setDefaultCursor('crosshair');                  // 设置鼠标光标

    // 添加控件
    map.addControl(new BMap.NavigationControl());       // 平移缩放控件
    map.addControl(new BMap.ScaleControl());            // 比例尺控件
    map.addControl(new BMap.OverviewMapControl());      // 缩略图控件
    map.addControl(new BMap.MapTypeControl());          // 切换地图类型的控件
    map.addControl(new BMap.CopyrightControl());        // 版权控件
    
    // 地图点击事件
    map.addEventListener('click', function(e){
        console.log(e);
        var lng = e.point.lng;
        var lat = e.point.lat;
        alert("经度：" + lng + "，纬度：" + lat);
    });

    // 地图搜索
    function sear(result){
        if(result != ''){
            var local = new BMap.LocalSearch(map, {
                renderOptions:{map: map} 
            });
            local.search(result);
        }else{
            alert('请输入地址！');
        }
    }

    // 地图标注
    var marker = new BMap.Marker(point);                // 创建一个图像标注实例
    map.addOverlay(marker);
    marker.enableDragging();
    var gc = new BMap.Geocoder();                       // 获取用户的地址解析
    marker.addEventListener("dragend", function(e){
      gc.getLocation(e.point, function(rs){
          showLocationInfo(e.point, rs);  
      });  
    });
    function showLocationInfo(pt, rs){
        var opts = {  width : 250, height: 150, title : "当前位置" } ; 
        var addComp = rs.addressComponents;  
        var addr = "当前位置：" + addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber + "<br/>";  
        addr += "纬度: " + pt.lat + ", " + "经度：" + pt.lng;     
        var infoWindow = new BMap.InfoWindow(addr, opts); 
        marker.openInfoWindow(infoWindow);  
    } 
</script>
</body>
</html>