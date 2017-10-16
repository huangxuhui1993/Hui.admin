<?php
namespace org\util;

class HttpCurl
{
	/**
     * @brief                  get请求
     * @param $url             请求的url
     * @param array $param     请求的参数
     * @param array $header    头部数据
     * @param int $timeout     超时时间
     * @param int $followAction 是否允许被抓取的链接跳转
     * @param int $gzip         是否启用gzip压缩
     * @param string $format    格式
     * @return mixed
     */
    public static function get($url, $param = array(), $header = array(), $timeout = 3, $followAction = 0, $gzip = 0, $format = 'html')
    {
        $ch = curl_init();
        if (is_array($param)) {
            $url = $url . '?' . http_build_query($param);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
        if ($followAction) {
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); //允许被抓取的链接跳转
        }
        if ($gzip) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Encoding: gzip, deflate'));
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        }

        $data = curl_exec($ch);

        if ($format == 'json') {
            $data = json_decode($data, true);
        }

        curl_close($ch);
        return $data;
    }

	/**
     * @brief                   post请求
     * @param $url              请求的url地址
     * @param array $param      请求的参数
     * @param array $header     http头
     * @param int $ssl          是否启用ssl
     * @param string $format    返回的格式
     * @return mixed
     */
    public static function post($url, $param = array(), $header = array(), $ssl = 0, $format = 'json')
    {
        $ch = curl_init();
        if (is_array($param)) {
            $urlparam = http_build_query($param);
        } else if (is_string($param)) { //json字符串
            $urlparam = $param;
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120); //设置超时时间
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //返回原生的（Raw）输出
        curl_setopt($ch, CURLOPT_POST, 1); //POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $urlparam); //post数据
        if ($header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        if ($ssl) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 对认证证书来源的检查
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); //将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
        }

        $data = curl_exec($ch);
        if ($format == 'json') {
            $data = json_decode($data, true);
        }

        curl_close($ch);
        return $data;
    }
}
