<?php
namespace app\common\taglib;
use think\template\TagLib;

class Tag extends TagLib{
    # 定义标签列表
    protected $tags   =  [
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'adminjs'    => ['close' => 0],
        'validatejs' => ['close' => 0],
        'ueditor'    => ['close' => 0],
        'echarts'    => ['close' => 0],
    ];

    # admin 公共js文件
    public function tagAdminjs(){

		$str = <<<EOT
    	<!-- Tag标签加载js -->
        <script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
        <script type="text/javascript" src="__ROOT__/js/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="__ROOT__/js/laydate/laydate.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="__ADMIN__/h-ui.admin/js/H-ui.admin.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/icheck/jquery.icheck.min.js"></script>
        <script type="text/javascript" src="__ROOT__/js/toastr/toastr.js"></script>
        <script type="text/javascript" src="__ROOT__/js/admin.js"></script>
EOT;

        return $str;
    }

    # admin 数据validation验证js文件
    public function tagValidatejs(){

        $str = <<<EOT
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="__ADMIN__/lib/jquery.validation/1.14.0/messages_zh.js"></script>
EOT;

        return $str;
    }

    # 百度编辑器
    public function tagUeditor(){
        $str = <<<EOT
        <!-- 百度UE编辑器Start -->
        <script type="text/javascript" src="__ROOT__/js/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" src="__ROOT__/js/ueditor/ueditor.all.js"></script>
        <script type="text/javascript" src="__ROOT__/js/ueditor/lang/zh-cn/zh-cn.js"></script>
        <!-- 百度UE编辑器End -->
EOT;

        return $str;
    }

    # 百度统计图
    public function tagEcharts(){
        $str = <<<EOT
        <!-- echarts百度统计图插件 -->
        <script type="text/javascript" src="__ROOT__/js/echarts/echarts.min.js"></script>
EOT;

        return $str;
    }

}
