<?php
namespace org\util;
use think\Config;

// 微信接口类
class WeChat{
    private static $appid;      // 开发者ID(AppID)
    private static $appsecret;  // 开发者密码(AppSecret)

    function __construct(){
        self::$appid = Config::get('websetup.wechat_appid');
        self::$appsecret = Config::get('websetup.wechat_appsercert');
    }

    // 微信授权地址
    public static function getAuthorizeUrl($url){
        $url_link = urlencode($url);
        return "https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . self::$appid . "&redirect_uri={$url_link}&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
    }

    // 获取TOKEN
    public static function getToken(){
        $urla = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . self::$appid . "&secret=" . self::$appsecret;
        $outputa = self::curlGet($urla);
        $result = json_decode($outputa,true);
        return $result['access_token'];
    }

    /**
     * getUserInfo 获取用户信息
     * @param  string $code         微信授权code
     * @param  string $weiwei_token Token
     * @return array
     */
    public static function getUserInfo($code,$weiwei_token){
        $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . self::$appid . "&secret=" . self::$appsecret . "&code={$code}&grant_type=authorization_code";
        $access_token_json = self::curlGet($access_token_url);
        $access_token_array = json_decode($access_token_json, true);
        $openid = $access_token_array['openid'];
        $new_access_token = $weiwei_token;

        //全局access token获得用户基本信息
        $userinfo_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token={$new_access_token}&openid={$openid}";
        $userinfo_json = self::curlGet($userinfo_url);
        $userinfo_array = json_decode($userinfo_json, true);
        return $userinfo_array;
    }

    /**
     * pushMessage 发送自定义的模板消息
     * @param  array  $data          模板数据
        $data = [
            'openid' => '', 用户openid
            'url' => '', 跳转链接
            'template_id' => '', 模板id
            'data' => [ // 消息模板数据
                'first'    => ['value' => urlencode('黄旭辉'),'color' => "#743A3A"],
                'keyword1' => ['value' => urlencode('男'),'color'=>'blue'],
                'keyword2' => ['value' => urlencode('1993-10-23'),'color' => 'blue'],
                'remark'   => ['value' => urlencode('我的模板'),'color' => '#743A3A']
            ]
        ];
     * @param  string $topcolor 模板内容字体颜色，不填默认为黑色
     * @return array
     */
    public static function pushMessage($data = [],$topcolor = '#0000'){
        $template = [
            'touser'      => $data['openid'],
            'template_id' => $data['template_id'],
            'url'         => $data['url'],
            'topcolor'    => $topcolor,
            'data'        => $data['data']
        ];
        $json_template = json_encode($template);
        $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . self::getToken();
        $result = self::curlPost($url, urldecode($json_template));
        $resultData = json_decode($result, true);
        return $resultData;
    }

    /**
     * addLog 日志记录
     * @param string $log_content 日志内容
     */
    public static function addLog($log_content = ''){
        $data = "";
        $data .= "DATE: [ ".date('Y-m-d H:i:s')." ]\r\n";
        $data .= "INFO: ".$log_content."\r\n\r\n";
        file_put_contents(RUNTIME_PATH . '/wechat.log', $data, FILE_APPEND);
    }

    /**
     * 发送get请求
     * @param string $url 链接
     * @return bool|mixed
     */
    private static function curlGet($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        if(curl_errno($curl)){
            return 'ERROR '.curl_error($curl);
        }
        curl_close($curl);
        return $output;
    }

    /**
     * 发送post请求
     * @param string $url 链接
     * @param string $data 数据
     * @return bool|mixed
     */
    private static function curlPost($url,$data = null){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
        if(!empty($data)){
            curl_setopt($curl,CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
        }
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

}