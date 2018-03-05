<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Cache;
use think\Cookie;
use org\util\HttpCurl;

class Ajax extends Controller{

    /**
     * news 获取新闻
     * @param  Request $request 请求信息
     * @return json             新闻列表
     */
	public function news(Request $request){
		if($request->isAjax()){
			$data = $request->post('type');
			if(empty($data)){
				return json([
					'message' => '参数错误！',
					'code' => 1
				]);
			}
			// Ajax实时新闻
			$curl = new HttpCurl();
			$url = 'http://wangyi.butterfly.mopaasapp.com/news/api';
			$data = [
				'type'  => $data,
				'page'  => 1,
				'limit' => 8
			];
			$result = $curl::get($url, $data);
			$news = json_decode($result, true);
			$newslist = $news['list'];
			// 截取新闻标题
			foreach($newslist as $k => $v){
				$newslist[$k]['title'] = msubstr($v['title'], 0, 15);
			}
			return json($newslist);
		}else{
			return '非法操作！';
		}
	}

    /**
     * clearCache 清除缓存
     * @param  Request $request 请求信息
     * @return json
     */
	public function clearCache(Request $request){
		if($request->isAjax()){
			# 清除cache缓存
			$cache = Cache::clear();
			# 清除temp缓存
			$temp = array_map('unlink', glob(TEMP_PATH . '*.php'));
			if(is_dir(TEMP_PATH)){
				rmdir(TEMP_PATH);
			}
	    	if($cache && $temp){
	    		add_logs('清除缓存', 1);
	    		return json(['error' => 0]);
	    	}else{
                add_logs('清除缓存', 0);
	    		return json(['error' => 1]);
	    	}
		}else{
			return '非法操作！';
		}
	}
	
}
