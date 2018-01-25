<?php
// 应用函数公共文件
use think\Db;
use think\Config;
use think\Session;
use think\Request;
use think\Debug;
use app\admin\model\Attach;
use app\admin\model\Channel;
use app\admin\model\Models;
use app\common\model\Document;
use app\home\model\Member;


// 上传导出文件路径常量
define('HUI_FILES', ROOT_PATH . 'public' . DS . Config::get('hui_files_path') . DS);
if(!is_dir(HUI_FILES)){
    mkdir(HUI_FILES);
    chmod(HUI_FILES, 0777); // 设置权限
}

/**
 * add_logs 记录系统日志
 * @param string  $operate 操作字符串
 * @param integer $status  状态 0：失败 1：成功
 * @param integer $type    类型 1：数据库记录日志 2：文件记录日志
 * @return boolean
 */
function add_logs($operate = '', $status = 0, $type = 1){
    $logs_switch = Config::get('websetup.logs') == 1 ? true : false; // 是否开启日志
    $condition = !empty($operate) && is_string($operate) && is_numeric($status) && is_numeric($type) ? true : false; // 条件
    if($logs_switch && $condition){
        switch($type){
            case 1:
                $data['username'] = Session::get('uname');
                $data['ip'] = Request::instance()->ip();
                $data['operate'] = $operate;
                $data['status'] = $status;
                $data['time'] = time();
                Db::name('logs')->insert($data);
                break;
            case 2:
                $data = "";
                $data .= "DATE: [ " . date('Y-m-d H:i:s') . " ]\r\n";
                $data .= "INFO: " . $operate . "\r\n\r\n";
                file_put_contents(RUNTIME_PATH . '/logs.log', $data, FILE_APPEND);
                break;
            default:
                return false;
                break;
        }
    }else{
        return false;
    }
}

/**
 * function_location 查找函数位置
 * @param  mixed $funcname 函数名字符串或数组
 * @return string
 */
function function_location($funcname = ''){
    try{
        if(is_array($funcname)){
            $obj = new ReflectionMethod($funcname[0], $funcname[1]);
            $funcname = $funcname[1];
        }else{
            $obj = new ReflectionFunction($funcname);
        }
    }catch(ReflectionException $e){
        return $e->getMessage();
    }
    $start = $obj->getStartLine();
    $end = $obj->getEndLine();
    $filename = $obj->getFileName();
    return "<pre>Function {$funcname} Defined By {$filename}({$start} - {$end})</pre>";
}

/**
 * download_shortcut 创建保存为桌面快捷方式
 * @param  string $filename 保存的文件名
 * @param  string $url      访问的连接
 * @param  string $icon     图标路径
 */
function download_shortcut($filename = '', $url = '', $icon = ''){
    if(!empty($filename) && !empty($url)){
        // 创建基本代码
        $shortCut = "[InternetShortcut]\r\n";
        $shortCut .= "IDList=[{000214A0-0000-0000-C000-000000000046}]\r\n";
        $shortCut .= "Prop3=19,2\r\n";
        $shortCut .= "URL={$url}\r\n";
        if(!empty($icon)){
            $shortCut .= "IconFile={$icon}";
        }

        header("content-type:application/octet-stream");

        // 获取用户浏览器
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $encode_filename = rawurlencode($filename);

        // 不同浏览器使用不同编码输出
        if(preg_match("/MSIE/", $user_agent)){
            header('content-disposition:attachment; filename="' . $encode_filename . '"');
        }elseif(preg_match("/Firefox/", $user_agent)){
            header("content-disposition:attachment; filename*=\"utf8''" . $filename . '"');
        }else{
            header('content-disposition:attachment; filename="' . $filename . '"');
        }
        echo $shortCut;
    }else{
        return false;
    }
}

/**
 * remove_spaces 删除字符串内容所有空格
 * @param  string $str 需要处理的字符串
 * @return string
 */
function remove_spaces($str = ''){
    $spaces = [" ", "　", "\t", "\n", "\r"];
    $replace = ["", "", "", "", ""];
    return empty($str) ? null : str_replace($spaces, $replace, $str);
}

/**
 * remove_array_spaces 删除数组-值的空格
 * @param  array  $arr 数组
 * @return array
 */
function remove_array_spaces($arr = []){
    if(is_array($arr) && !empty($arr)){
        $data = [];
        foreach($arr as $key => $value){
            $data[$key] = remove_spaces($value);
        }
        return $data;
    }else{
        return [];
    }
}

/**
 * site_run_time 网站运行时间
 * @return integer 运行时间
 */
function site_run_time(){
	$sitestart = strtotime(Config::get('websetup.sitetime')); // 获取特定时间戳
	$sitenow = time(); // 获取服务器当前时间戳
    # 把秒数转换为时分秒的格式
    return second_to_time($sitenow - $sitestart); // 时间戳相减
}

/**
 * second_to_time 将秒数转换为时间（年、天、小时、分、秒）
 * @param  integer $time 秒数
 * @return string
 */
function second_to_time($time = 0){
    if(is_numeric($time)){
        $value = ['years' => 0, 'days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 0];
        if($time >= 31556926){
            $value['years'] = floor($time / 31556926);
            $time = ($time % 31556926);
        }
        if($time >= 86400){
            $value['days'] = floor($time / 86400);
            $time = ($time % 86400);
        }
        if($time >= 3600){
            $value['hours'] = floor($time / 3600);
            $time = ($time % 3600);
        }
        if($time >= 60){
            $value['minutes'] = floor($time / 60);
            $time = ($time % 60);
        }
        $value['seconds'] = floor($time);
        return $value['days'] . '天' . $value['hours'] . '小时' . $value['minutes'] . '分' . $value['seconds'] . '秒';
    }else{
        return false;
    }
}

/**
 * truesize 格式化字节大小
 * @param  integer $size     字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function truesize($size = 0, $delimiter = ''){
    if(is_numeric($size)){
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
        return round($size, 2) . $delimiter . $units[$i];
    }else{
        return false;
    }
}

/**
 * encode 字符处理
 * @param  string $str 内容
 * @return string
 */
function encode($str = ''){
	return empty($str) ? $str : preg_replace("/\\\'/", "'", $str);
}

/**
 * msubstr 字符串截取，支持中文和其他编码
 * @param  string  $str     需要转换的字符串
 * @param  integer $start   开始位置
 * @param  integer  $length 截取长度
 * @param  string  $charset 编码格式
 * @param  boolean $suffix  截断显示字符
 * @return string
 */
function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
    if(function_exists("mb_substr")){
        $slice = mb_substr($str, $start, $length, $charset);
    }elseif(function_exists('iconv_substr')){
        $slice = iconv_substr($str,$start,$length,$charset);
        if(false === $slice) {
            $slice = '';
        }
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    return $suffix ? $slice . '...' : $slice;
}

/**
 * hui_encrypt 系统加密方法
 * @param  string  $data   要加密的字符串
 * @param  string  $key    加密密钥
 * @param  integer $expire 过期时间 单位 秒
 * @return string
 */
function hui_encrypt($data, $key = '', $expire = 0) {
    $key  = md5(empty($key) ? Config::get('data_auth_key') : $key);
    $data = base64_encode($data);
    $x    = 0;
    $len  = strlen($data);
    $l    = strlen($key);
    $char = '';
    for($i = 0; $i < $len; $i++){
        if($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }
    $str = sprintf('%010d', $expire ? $expire + time() : 0);
    for($i = 0; $i < $len; $i++){
        $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1))) % 256);
    }
    return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($str));
}

/**
 * hui_decrypt 系统解密方法
 * @param  string $data 要解密的字符串（必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 * @return string
 */
function hui_decrypt($data, $key = ''){
    $key    = md5(empty($key) ? Config::get('data_auth_key') : $key);
    $data   = str_replace(['-', '_'], ['+', '/'], $data);
    $mod4   = strlen($data) % 4;
    if ($mod4) {
       $data .= substr('====', $mod4);
    }
    $data   = base64_decode($data);
    $expire = substr($data, 0, 10);
    $data   = substr($data, 10);
    if($expire > 0 && $expire < time()) {
        return '';
    }
    $x      = 0;
    $len    = strlen($data);
    $l      = strlen($key);
    $char   = $str = '';
    for($i = 0; $i < $len; $i++){
        if($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }
    for($i = 0; $i < $len; $i++){
        if(ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))){
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }else{
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return base64_decode($str);
}

/**
 * send_mailer 邮件发送函数
 * @param  array $data 邮件数据
 * $data = [
 *		'title'=>'标题',
 *		'content'=>'内容',
 *		'email'=>'收件邮箱'
 *	]
 * @return bool
 */
function send_mailer($data = []){
	if(is_array($data) && !empty($data)){
		if(empty($data['title']) || !isset($data['title'])){
			throw new Exception("邮件标题为空！");
		}elseif(empty($data['content']) || !isset($data['content'])){
			throw new Exception("邮件内容为空！");
		}elseif(empty($data['email']) || !isset($data['email'])){
			throw new Exception("收件人邮箱为空！");
		}else{
			ini_set("magic_quotes_runtime",0);
			$mail  = new PHPMailer();
			$mail->CharSet    = Config::get('websetup.mailer_char');                 									// 设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
			$mail->IsSMTP();                            																// 设定使用SMTP服务
			$mail->SMTPAuth   = true;                   																// 启用 SMTP 验证功能
			$mail->SMTPSecure = Config::get('websetup.mailer_secure');                  								// SMTP 安全协议
			$mail->Host       = Config::get('websetup.mailer_host');       												// SMTP 服务器
			$mail->Port       = Config::get('websetup.mailer_port');                    								// SMTP服务器的端口号
			$mail->Username   = Config::get('websetup.mailer_username');  												// SMTP服务器用户名
			$mail->Password   = Config::get('websetup.mailer_password');        										// SMTP服务器密码
			$mail->SetFrom(Config::get('websetup.mailer_from_email'),Config::get('websetup.mailer_from_name')); 		// 设置发件人地址和名称
			$mail->AddReplyTo(Config::get('websetup.mailer_reply_email'),Config::get('websetup.mailer_reply_name'));  	// 设置邮件回复人地址和名称
			$mail->Subject    = $data['title'];                     													// 设置邮件标题
			$mail->AltBody    = "查看该邮件，请切换到支持 HTML 的邮件客户端";  	    									// 可选项，向下兼容考虑
			$mail->MsgHTML($data['content']);      																		// 设置邮件内容
            $email = $data['email'];
            // 检测是否为群发
            if(is_array($email)){
                foreach($email as $key => $value){
                    $mail->AddAddress($value);
                }
            }else{
                $mail->AddAddress($data['email']);
            }
            if(isset($data['file']) && !empty($data['file'])){
            	$mail->AddAttachment($data['file']); 					        // 附件文件 "./uploads/export/ExportLogs_5959ad222e933.xls"
			}
			if(!$mail->Send()){
			    throw new Exception($mail->ErrorInfo);
			}else{
			    return true;
			}	
		}
	}else{
		throw new Exception("参数格式错误！");
	}
}

/**
 * mysql_db_size 检测数据库大小
 * @return string 数据库大小
 */
function mysql_db_size(){
    $sql = "SHOW TABLE STATUS FROM ".Config::get('database.database');
    $prefix = Config::get('database.prefix');
    if($prefix != null) {
        $sql .= " LIKE '{$prefix}%'";
    }
    $row = Db::query($sql);
    $size = 0;
    foreach($row as $value){
        $size += $value["Data_length"] + $value["Index_length"];
    }
    return $size;
}

/**
 * user_md5 系统非常规MD5加密方法
 * @param  string $str 要加密的字符串
 * @return string      加码后字符串
 */
function user_md5($str){
	$key = Config::get('data_auth_key');
	return '' === $str ? '' : md5(sha1($str) . $key);
}

/**
 * clean_sensitive_words 过滤网站敏感词
 * @param  string $text 需要过滤的内容
 * @return string       处理后内容
 */
function clean_sensitive_words($text = ''){
	if(!empty($text)){
		$sensitive_words = Config::get('websetup.sensitive_words');
		return isset($sensitive_words) ? preg_replace("/{$sensitive_words}/i", '**', $text) : false;
	}else{
		return false;
	}
}

/**
 * get_browser_lang 获取访客浏览器语言
 * @return string 语言信息
 */
function get_browser_lang(){
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	if(!empty($language)){
		$lang = substr($language,0,5);
		if(preg_match('/zh-cn/i',$lang)){
			$lang = '简体中文';
		}elseif(preg_match('/zh/i',$lang)){
			$lang = '繁体中文';
		}else{
			$lang = 'English';
		}
		return $lang;
	}else{
		return 'Unknown';
	}
}

/**
 * get_os 获取访客操作系统
 * @return string 系统类型
 */
function get_os(){
	$agent = $_SERVER['HTTP_USER_AGENT'];
	if(!empty($agent)){
		if(preg_match('/win/i', $agent)){
			$os = 'Windows';
		}elseif(preg_match('/mac/i', $agent)){
			$os = 'MAC';
		}elseif(preg_match('/linux/i', $agent)){
			$os = 'Linux';
		}elseif(preg_match('/unix/i', $agent)){
			$os = 'Unix';
		}elseif(preg_match('/bsd/i', $agent)){
			$os = 'BSD';
		}else{
			$os = 'Other';
		}
		return $os;
	}else {
		return  'Unknown'; 
	}
}

/**
 * get_real_ip 获取真实IP
 * @return string IP地址
 */
function get_real_ip(){
	$ip_json = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=myip');
	$ip_arr = json_decode(stripcslashes($ip_json), 1);
	return $ip_arr['code'] == 0 ? $ip_arr['data']['ip'] : '';
}

/**
 * time_tips 时间提醒函数
 * @return string 提醒信息
 */
function time_tips(){
	date_default_timezone_set('Asia/Shanghai');
	$str = "";
	$hour = date('H');
	$week = date('D');
	if($hour >= 6 && $hour <= 11){
		$str .= "上午好，";
	}elseif($hour >= 12 && $hour <= 13){
		$str .= "中午好，";
	}elseif($hour >= 14 && $hour <= 18){
		$str .= "下午好，";
	}elseif($hour >= 19 && $hour <= 23){
		$str .= "晚上好，";
	}elseif($hour >= 0 && $hour <= 5){
		$str .= "凌晨好，";
	}
	$str .= "今天 ";
	$arr = [
		'Mon' => '星期一，祝您工作愉快！',
		'Tue' => '星期二，祝您工作愉快！',
		'Wed' => '星期三，祝您工作愉快！',
		'Thu' => '星期四，祝您工作愉快！',
		'Fri' => '星期五，祝您工作愉快！',
		'Sat' => '星期六，祝您周末愉快！',
		'Sun' => '星期日，祝您周末愉快！'
	];
	$str .= $arr[$week];
	return $str;
}

/**
 * parse_config_attr 分析枚举类型配置值 格式 a:名称1,b:名称2
 * @param  string $string 字符串
 * @return array          数组
 */
function parse_config_attr($string){
    $array = preg_split('/[,;\r\n]+/', trim($string, ",;\r\n"));
    if(strpos($string,':')){
        $value = [];
        foreach($array as $val){
            list($k, $v) = explode(':', $val);
            $value[$k] = $v;
        }
    }else{
        $value = $array;
    }
    return $value;
}

/**
 * get_file_type 获取文件类型文字提示
 * @param  string $type 类型
 * @return string       类型信息
 */
function get_file_type($type = ''){
    if(!empty($type)){
        $array = [
            'photo'  => '图片文件',
            'office' => 'Office文件',
            'attach' => '附件文件',
            'video'  => '视频文件'
        ];
        return $array[$type];
    }else{
        return false;
    }
}

/**
 * get_file_url 获取文件存储路径
 * @param  integer  $val   文件id
 * @param  string  $picUrl 默认图片
 * @param  boolean $thumb  是否使用缩略图
 * @return string          文件路径
 */
function get_file_url($val = 0, $picUrl = '', $thumb = false){
    $attUrl = $picUrl;
    if(empty($val) || !is_numeric($val)){
        return $attUrl;
    }else{
        $db = new Attach();
        $hui_files_path = Config::get('hui_files_path');
        $rs = $db->field('url,thumb')->where(['id' => $val])->find();
        if($rs){
            unset($attUrl);
            if($thumb){
                if($rs['thumb'] != ''){
                    $attUrl = "/{$hui_files_path}/" . $rs['thumb'];
                }else{
                    $attUrl = "/{$hui_files_path}/" . $rs['url'];
                }
            }else{
                $attUrl = "/{$hui_files_path}/" . $rs['url'];
            }
        }
        return $attUrl;
    }
}

/**
 * get_channel_info 获取栏目
 * @param  integer $id 栏目id
 * @return string      栏目名称
 */
function get_channel_info($id = 0){
    if(!empty($id) && is_numeric($id)){
        $result = Channel::get($id);
        return $result ? $result : false;
    }else{
        return false;
    }
}

/**
 * get_channel_name 获取栏目名称
 * @param  integer $cid 栏目id
 * @return string       栏目名称
 */
function get_channel_name($cid = 0){
    if(!empty($cid) && is_numeric($cid)){
        $result = Channel::get($cid);
        return $result ? $result['cname'] : false;
    }else{
        return false;
    }
}

/**
 * get_channel_name 获取栏目名称
 * @param  integer $cid 栏目id
 * @return string       栏目名称
 */
function get_channel_url($id = 0){
    if(!empty($id) && is_numeric($id)){
        $result = Channel::get($id);
        return $result['model'] == -1 ? $result['outurl'] : url($result['curl']);
    }else{
        return false;
    }
}

/**
 * get_channel_model 获取栏目模型
 * @param  integer $cid 栏目ID
 * @return string
 */
function get_channel_model($cid = 0){
    if(!empty($cid) && is_numeric($cid)){
        $channel = Channel::get($cid);
        if($channel['model'] == -1){
            return false;
        }else{
            $result = Models::get($channel['model']);
            return $result ? $result : false;
        }
    }else{
        return false;
    }
}

/**
 * get_channel_model_name 根据栏目ID获取模型名称
 * @param  integer $cid 模型ID
 * @return string       模型名称
 */
function get_channel_model_name($cid = 0){
    if(!empty($cid) && is_numeric($cid)){
        $channel = Channel::get($cid);
        if($channel['model'] == -1){
            return "外部导航";
        }else{
            $result = get_model_name($channel['model']);
            return $result ? $result : '';
        }
    }else{
        return false;
    }
}

/**
 * get_channel_document_count 获取栏目对应文档数量
 * @param  integer $cid 栏目ID
 * @return integer      数量
 */
function get_channel_document_count($cid = 0){
    if(!empty($cid) && is_numeric($cid)){
        $model = new Document();
        $result = $model->where('cid', $cid)->count();
        return $result ? $result : 0;
    }else{
        return false;
    }
}

/**
 * get_model_name 获取模型名称
 * @param  integer $mid 模型ID
 * @return string       模型名称
 */
function get_model_name($mid){
    if($mid == -1){
        return "外部导航";
    }
    $result = Models::get($mid);
    return $result ? $result['name'] : '';  
}

/**
 * get_channel 获取无限极栏目信息
 * @param  integer $pid  主栏目ID
 * @param  string $path  路径符号
 * @return array
 */
function get_channel($pid = 0, $path = ''){
    global $c_arr;
    $db = new Channel();
    // 读取数据
    $list = $db->where('pid', $pid)->order('pid,sorting')->select();
    if (is_array($list)){
        foreach($list as $val){
            if ($val['pid'] == $pid){
                if ($val['pid'] == 0){
                    $c_arr[] = [
                        'id' => $val['id'],
                        'pid' => $val['pid'],
                        'cname' => $val['cname'],
                        'mname' => $val['mname'],
                        'model' => $val['model'],
                        'outurl' => $val['outurl'],
                        'sorting' => $val['sorting'],
                        'keywords' => $val['keywords'],
                        'describle' => $val['describle'],
                        'status' => $val['status'],
                        'update_time' => $val['update_time']
                    ];
                }else{
                    $c_arr[] = [
                        'id' => $val['id'],
                        'pid' => $val['pid'],
                        'cname' => $path . $val['cname'],
                        'mname' => $val['mname'],
                        'model' => $val['model'],
                        'outurl' => $val['outurl'],
                        'sorting' => $val['sorting'],
                        'keywords' => $val['keywords'],
                        'describle' => $val['describle'],
                        'status' => $val['status'],
                        'update_time' => $val['update_time']
                    ];
                }
                get_channel($val['id'], "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $path);
            }
        }
    }
    return $c_arr;
}

/**
 * get_member_info 获取用户信息
 * @param  integer $id 用户ID
 * @return array       用户信息
 */
function get_member_info($id = 0){
    if(!empty($id) && is_numeric($id)){
        $result = Member::get($id);
        return $result ? $result : '';
    }else{
        return false;
    }
}

/**
 * get_member_vip_state 获取会员vip状态
 * @param  integer $id 用户ID
 */
function get_member_vip_state($id = 0){
    if(empty($id) || !is_numeric($id)) return false;
    $result = Member::get($id);
    if($result){
        return $result['activation_state'] == 1 ? 'VIP会员' : '普通会员'; 
    }else{
        return false;
    }
}