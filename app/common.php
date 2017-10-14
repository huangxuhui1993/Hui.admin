<?php
// 应用函数公共文件
use think\Db;
use think\Config;
use app\admin\model\Attach;
use app\admin\model\Channel;

// 上传导出文件路径常量
define('HUI_FILES', ROOT_PATH.'public'.DS.Config::get('hui_files_path').DS);
if(!is_dir(HUI_FILES)){
    mkdir(HUI_FILES);
    chmod(HUI_FILES,0777); // 设置权限
}

/**
 * 网站运行时间
 * @return integer 运行时间
 */
function site_run_time(){
	$sitestart = strtotime(Config::get('websetup.sitetime'));//获取特定时间戳
	$sitenow = time();//获取服务器当前时间戳
	$sitetime = $sitenow - $sitestart;//时间戳相减
	return (int)($sitetime / 86400);//转换为天数	
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function truesize($size, $delimiter = ''){
    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}

/**
 * 字符处理
 * @param string $str 内容
 */
function encode($str){
	if(isset($str)){
		$str = preg_replace("/\\\'/","'",$str);
	}
	return $str;
}

/**
 * 字符串截取，支持中文和其他编码
 * @static
 * @access public
 * @param string $str 需要转换的字符串
 * @param int $start 开始位置
 * @param int $length 截取长度
 * @param string $charset 编码格式
 * @param bool   $suffix 截断显示字符
 * @return string
 */
function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
    if(function_exists("mb_substr"))
        $slice = mb_substr($str, $start, $length, $charset);
    elseif(function_exists('iconv_substr')) {
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
    return $suffix ? $slice.'...' : $slice;
}

/**
 * 系统加密方法
 * @param string $data 要加密的字符串
 * @param string $key  加密密钥
 * @param int $expire  过期时间 单位 秒
 * @return string
 */
function hui_encrypt($data, $key = '', $expire = 0) {
    $key  = md5(empty($key) ? Config::get('data_auth_key') : $key);
    $data = base64_encode($data);
    $x    = 0;
    $len  = strlen($data);
    $l    = strlen($key);
    $char = '';

    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }

    $str = sprintf('%010d', $expire ? $expire + time():0);

    for ($i = 0; $i < $len; $i++) {
        $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1))) % 256);
    }
    return str_replace(['+','/','='],['-','_',''],base64_encode($str));
}

/**
 * 系统解密方法
 * @param  string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 * @return string
 */
function hui_decrypt($data, $key = ''){
    $key    = md5(empty($key) ? Config::get('data_auth_key') : $key);
    $data   = str_replace(['-','_'],['+','/'],$data);
    $mod4   = strlen($data) % 4;
    if ($mod4) {
       $data .= substr('====', $mod4);
    }
    $data   = base64_decode($data);
    $expire = substr($data,0,10);
    $data   = substr($data,10);

    if($expire > 0 && $expire < time()) {
        return '';
    }
    $x      = 0;
    $len    = strlen($data);
    $l      = strlen($key);
    $char   = $str = '';

    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }

    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }else{
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return base64_decode($str);
}

/**
 * 邮件发送函数
 * @param  array 
 * $data = [
 *		'title'=>'标题',
 *		'content'=>'内容',
 *		'email'=>'收件邮箱'
 *	]
 * @return [type]
 */
function send_mailer($data){
	if(is_array($data)){
		if(empty($data['title']) || !isset($data['title'])){
			throw new Exception("邮件标题为空！");
		}elseif(empty($data['content']) || !isset($data['content'])){
			throw new Exception("邮件内容为空！");
		}elseif(empty($data['email']) || !isset($data['email'])){
			throw new Exception("收件人邮箱为空！");
		}else{
			ini_set("magic_quotes_runtime",0);
			$mail  = new PHPMailer();
			$mail->CharSet    = Config::get('websetup.mailer_char');                 								//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
			$mail->IsSMTP();                            														// 设定使用SMTP服务
			$mail->SMTPAuth   = true;                   														// 启用 SMTP 验证功能
			$mail->SMTPSecure = Config::get('websetup.mailer_secure');                  							// SMTP 安全协议
			$mail->Host       = Config::get('websetup.mailer_host');       											// SMTP 服务器
			$mail->Port       = Config::get('websetup.mailer_port');                    							// SMTP服务器的端口号
			$mail->Username   = Config::get('websetup.mailer_username');  											// SMTP服务器用户名
			$mail->Password   = Config::get('websetup.mailer_password');        									// SMTP服务器密码
			$mail->SetFrom(Config::get('websetup.mailer_from_email'),Config::get('websetup.mailer_from_name')); 		// 设置发件人地址和名称
			$mail->AddReplyTo(Config::get('websetup.mailer_reply_email'),Config::get('websetup.mailer_reply_name'));  	// 设置邮件回复人地址和名称
			
			$mail->Subject    = $data['title'];                     			// 设置邮件标题
			$mail->AltBody    = "查看该邮件，请切换到支持 HTML 的邮件客户端";  	    // 可选项，向下兼容考虑
			$mail->MsgHTML($data['content']);      								// 设置邮件内容
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
 * 检测数据库大小
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
    foreach($row as $value) {
        $size += $value["Data_length"] + $value["Index_length"];
    }
    return $size;
}

/**
 * 系统非常规MD5加密方法
 * @param  string $str 要加密的字符串
 * @return string
 */
function user_md5($str){
	$key = Config::get('data_auth_key');
	return '' === $str ? '' : md5(sha1($str) . $key);
}

/**
 * 过滤网站敏感词
 * @param  string $text 需要过滤的内容
 * @return [type]       [description]
 */
function clean_sensitive_words($text){
	if(!empty($text)){
		$sensitive_words = Config::get('websetup.sensitive_words');
		if(isset($sensitive_words)){
			return preg_replace("/{$sensitive_words}/i", '**', $text);
		}else{
			return false;
		}
	}else{
		return false;
	}
}

/**
 * 获取访客浏览器语言
 * @return string
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
 * 获取访客操作系统
 * @return string
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
 * 获取真实ip
 * @return string
 */
function get_real_ip(){
	$ip_json = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=myip');
	$ip_arr = json_decode(stripcslashes($ip_json),1);
	if ($ip_arr['code'] == 0) {
		return $ip_arr['data']['ip'];
	}
}

/**
 * 时间提醒函数
 * @return string
 */
function time_tips(){
	date_default_timezone_set('Asia/Shanghai');
	$str = "";
	$hour = date("H");
	if ($hour >= 6 && $hour <= 11){
		$str .= "上午好，";
	}elseif($hour>=12 && $hour <= 13){
		$str .= "中午好，";
	}elseif($hour>= 14 && $hour <= 18){
		$str .= "下午好，";
	}elseif($hour >= 19 && $hour <= 23){
		$str .= "晚上好，";
	}elseif($hour >= 0 && $hour <= 5){
		$str .= "凌晨好，";
	}	
	$str .= "今天 ";
	$week = date("D");
	switch ($week){
		case "Mon":
			$str .= "星期一，祝您工作愉快！";
			break;
		case "Tue":
			$str .= "星期二，祝您工作愉快！";
			break;
		case "Wed":
			$str .= "星期三，祝您工作愉快！";
			break;
		case "Thu":
			$str .= "星期四，祝您工作愉快！";
			break;
		case "Fri":
			$str .= "星期五，祝您工作愉快！";
			break;
		case "Sat":
			$str .= "星期六，祝您周末愉快！";
			break;
		case "Sun":
			$str .= "星期日，祝您周末愉快！";
			break;
	}
	return $str;
}

/**
 * 获取文件类型文字提示
 * @param string $type
 * @return string
 */
function get_file_type($type){
    switch($type){
        case 'photo':
            return '图片文件';
            break;
        case 'office':
            return 'Office文件';
            break;
        case 'attach':
            return '附件文件';
            break;
        case 'video':
            return '视频文件';
            break;
        default:
            return '未知类型';
            break;
    }
}

/**
 * 获取文件存储路径
 * @param integer $val 文件id
 * @param string $picUrl 默认图片
 * @param  bool $thumb 是否使用缩略图
 * @return string 文件路径
 */
function get_file_url($val,$picUrl,$thumb = false){
    $attUrl = $picUrl;
    if($val == ''){
        return $attUrl;
    }else{
        $db = new Attach();
        $hui_files_path = Config::get('hui_files_path');
        $rs = $db->field('url,thumb')->where(['id' => $val])->find();
        if($rs){
            unset($attUrl);
            if($thumb){
                if($rs['thumb'] != ''){
                    $attUrl = "/{$hui_files_path}/".$rs['thumb'];
                }else{
                    $attUrl = "/{$hui_files_path}/".$rs['url'];
                }
            }else{
                $attUrl = "/{$hui_files_path}/".$rs['url'];
            }
        }
        return $attUrl;
    }
}

/**
 * 获取栏目名称
 * @param integer $cid 栏目id
 * @return string 栏目名称
 */
function get_channel_name($cid){
	$result = Channel::get($cid);
	if($result){ 
		return $result['cname']; 
	}else{ 
		return "未知"; 
	}
}