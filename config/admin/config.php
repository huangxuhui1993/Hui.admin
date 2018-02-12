<?php
return [
	'app_trace'              => true,

    // 系统表
    'tables_list' => 'addons|attach|auth_group|auth_group_access|auth_rule|backup|channel|config|convert|doc|document|export|fields|hooks|logs|map_statistics|models|user',
	
	// 系统字段
    'fields_list' =>'table|id|cid|uid|topic|color|aurl|isout|outurl|keywords|describle|hits|photo|photos|attach|content|sorting|status|isrec|tags|isdraft|ctime|aid|utime',
    
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => 'public/prompt',
    'dispatch_error_tmpl'    => 'public/prompt',

];
