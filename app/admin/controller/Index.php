<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use org\util\HttpCurl;
use think\Request;
use think\Config;
use think\Db;

/**
 * 系统首页信息控制器
 * Class Index
 * @package app\admin\controller
 */
class Index extends Base{

	public function index(){
		return $this->fetch();
	}

	public function welcome(){

		// 文档数量
		$document_count = Db::name('document')->count();
		$this->assign('document_count', $document_count);

		// 文件数量
		$file_count = Db::name('attach')->count();
		$this->assign('file_count', $file_count);

		// 用户数量
		$user_count = Db::name('user')->count();
		$this->assign('user_count', $user_count);

		// 日志数量
		$logs_count = Db::name('logs')->count();
		$this->assign('logs_count', $logs_count);

		$this->assign('server_list', $this->serverData()); // 服务器环境

		return $this->fetch();
	}

	# 服务器环境
	private function serverData(){
		return [
			0  => [
				'name' => '系统类型及版本号',
				'val' => php_uname()
			],
			1  => [
				'name' => 'PHP运行方式',
				'val' => php_sapi_name()
			],
			2  => [
				'name' => 'PHP版本',
				'val' => PHP_VERSION
			],
			3  => [
				'name' => 'Zend版本',
				'val' => Zend_Version()
			],
			4  => [
				'name' => '数据库大小',
				'val'=>truesize(mysql_db_size())
			],
			5  => [
				'name' => '系统上传大小',
				'val' => ini_get("file_uploads") ? ini_get("upload_max_filesize") : "禁用"
			],
			6  => [
				'name' => '最大运行时间',
				'val' => ini_get("max_execution_time") . "秒"
			],
			7  => [
				'name' => 'PHP安装路径',
				'val' => DEFAULT_INCLUDE_PATH
			],
			8  => [
				'name' => '应用根目录',
				'val' => ROOT_PATH
			],
			9  => [
				'name' => '磁盘大小',
				'val' => function_exists('disk_free_space') ? truesize(floor(disk_free_space(ROOT_PATH))) : "禁用"
			],
			10 => [
				'name' => '服务器IP地址',
				'val' => GetHostByName($_SERVER['SERVER_NAME'])
			],
			11 => [
				'name' => '客户端IP地址',
				'val' => request()->ip()
			],
			12 => [
				'name' => '服务器解译引擎',
				'val' => $_SERVER['SERVER_SOFTWARE']
			],
			13 => [
				'name' => '服务器语言',
				'val' => $_SERVER['HTTP_ACCEPT_LANGUAGE']
			],
			14 => [
				'name' => '端口号',
				'val' => $_SERVER['SERVER_PORT']
			],
			15 => [
				'name' => 'ThinkPHP框架版本号',
				'val' => THINK_VERSION
			]
		];
	}

}
