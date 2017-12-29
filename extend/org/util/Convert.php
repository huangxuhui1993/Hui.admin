<?php
namespace org\util;
use think\Config;
use \COM as COM;

/**
 * office文档转换类
 * 实现office任何格式文档网页浏览
 * author 黄旭辉
 * 1,安装OpenOffice 4.1.3 (zh-CN)
 * 
 * 2,安装 SWFTOOLS http://www.swftools.org/download.html到C盘
 *   并把pdf2swf.exe文件移动到C盘根目录
 *
 * 3,php.ini 开启com.allow_dcom = true
 *   php.ini 添加extension=php_com_dotnet.dll
 *   检查该文件
 *   php/ext/php_com_dotnet.dll
 */

class Convert{
	
	private $osm;
	
	// 构造函数，启用OpenOffice的COM组件
	public function __construct(){
        ini_set('magic_quotes_runtime', 0); // 设置运行时间
		$this->osm = new COM("com.sun.star.ServiceManager") or die("Please be sure that OpenOffice.org is installed.n");
	}
	
	private function MakePropertyValue($name, $value){
		$oStruct = $this->osm->Bridge_GetStruct("com.sun.star.beans.PropertyValue");
		$oStruct->Name = $name;
		$oStruct->Value = $value;
		return $oStruct;
	}
	
	private function transform($input_url, $output_url){
		$args = array($this->MakePropertyValue('Hidden', true));
		$oDesktop = $this->osm->createInstance("com.sun.star.frame.Desktop");
		$oWriterDoc = $oDesktop->loadComponentFromURL($input_url, '_blank', 0, $args);
		$export_args = array($this->MakePropertyValue('FilterName', 'writer_pdf_Export'));
		$oWriterDoc->storeToURL($output_url, $export_args);
		$oWriterDoc->close(true);
		return $this->getPdfPages($output_url);
	}

	/**
	 * getPdfPages 获取PDF文件页数的函数获取，文件应当对当前用户可读（linux下）
	 * @param  string $path 文件路径
	 * @return int
	 */
	private function getPdfPages($path = ''){
		if(!file_exists($path)) return 0;
		if(!is_readable($path)) return 0;
		$fp=@fopen($path, "r"); // 打开文件
		if(!$fp){
			return 0;
		}else{
			$max = 0;
			while(!feof($fp)){
				$line = fgets($fp,255);
				if(preg_match('/\/Count [0-9]+/', $line, $matches)){
					preg_match('/[0-9]+/', $matches[0], $matches2);
					if ($max<$matches2[0]) $max = $matches2[0];
				}
			}
			fclose($fp);
			return $max; // 返回页数
		}
	}

	/**
	 * office文件转换pdf格式
	 * @param  string $input  需要转换的文件
	 * @param  string $output 转换后的pdf文件
	 * @return return string 页数
	 */
	public function run($input = '', $output = ''){
		if(empty($input) || empty($output)){
			return ['error' => 1, 'msg' => '参数缺失', 'flag' => 'run'];
		}
		$input = "file:///" . str_replace("\\", "/", $input);
		$output = "file:///" . str_replace("\\", "/", $output);
		return $this->transform($input, $output);
	}

	/**
	 * pdf2swf pdf文件转换swf格式
	 * @param  string $word_file  需要转换的文件路径
	 * @param  string $attach_dir 保存文件地址
	 * @return array
	 */
	public function pdf2swf($word_file = '', $attach_dir = ''){
		if(empty($word_file) || empty($attach_dir)){
			return ['error' => 1, 'msg' => '参数缺失', 'flag' => 'pdf2swf'];
		}
		$file_name = uniqid();
        $pdf_file =  "{$attach_dir}{$file_name}.pdf"; 										// PDF文件绝对路径
        $page = $this->run($word_file, $pdf_file); 											// 文件先转换为PDF格式
        if(isset($page) && $page > 0){
            $swf_file = "{$attach_dir}{$file_name}.swf"; 									// 转换后的swf文件
            $pd = str_replace("/", "\\", $pdf_file);
            $sw = str_replace("/", "\\", $swf_file);
            $cmd = Config::get('websetup.swftools') . " -t {$pd} -s flashversion=9 -o {$sw}";
            $phpwsh = new COM("Wscript.Shell") or die("Create Wscript.Shell Failed!");
            $exec = $phpwsh->exec("cmd.exe /c" . $cmd); 									// cmd执行pdf2swf转换命令
            $stdout = $exec->stdout();
            $stdout->readall();
            if(is_file($sw)){ 																// swf文件
                if(is_file($pdf_file)){ 													// 删除pdf文件
                    unlink($pdf_file);
                }
                return ['error' => 0, 'page' => $page, 'swf_file' => $file_name];
            }else{
                return ['error' => 1, 'msg' => 'swf文件不存在', 'flag' => 'pdf2swf'];
            }
        }else{
            return ['error' => 1, 'msg' => '转换pdf失败', 'flag' => 'pdf2swf'];
        }
	}
	
}
