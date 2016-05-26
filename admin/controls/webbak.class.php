<?php 
	class Webbak{
		function index(){
			$this->weblist();
			$this->display();
		}

		function add(){
			$this->mess("可将整站或指定的目录压缩为.ZIP文件，方便您进行网站备份.<br>为节约您的主机空间，开始压缩后系统将删除您原有的压缩包备份文件.");
			$this->display(); 
		}
		
		//下载压缩文件
		function dow(){
			$filename=PROJECT_PATH.'webbak/'.$_GET['file'];
			header("Content-disposition:filename=".$_GET['file']);
			header("Content-type:application/octetstream");
			header("Content-Length:".filesize($filename));
			header("Pragma:no-cache");
			header("Expires:0");
			readfile($filename);
		}
		//压缩文件
		function zip(){
			$datalist=$this->list_dir($_POST['dir']);
 			$webbak = PROJECT_PATH."webbak/";
			deldir($webbak);
 			if(!file_exists($webbak)){
				if(!@mkdir($webbak,0755)){
					echo "目录创建失败";
				}
			}
 			$filename = $webbak.date('Y-m-d')."-bak.zip"; //最终生成的文件名（含路径）
			if(!file_exists($filename)){   
				//重新生成文件   
				$zip = new ZipArchive();//使用本类，linux需开启zlib，windows需取消php_zip.dll前的注释   
				if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {   
					exit('无法打开文件，或者文件创建失败');
				}
				for($i=0;$i<count($datalist);$i++){
					$zip->addFile($datalist[$i],$datalist[$i]);
				}
				$zip->close();//关闭   
			} 
			$this->weblist();
			$this->mess("文件打包成功，您可以将其下载到本地进行保存.",true);
			$this->display('index');
		}
		
		private function weblist(){
			$num = 0;
			$dirname=PROJECT_PATH.'webbak/';
			$dir_handle = opendir($dirname);
			$html='<ul class="viewmess">';
			$html.='<li class="dark-row">';
			$html.='<span class="list_width width_font" style="width:250px;">压缩文件</span>';
			$html.='<span class="list_width width_font" style="width:110px;">文件大小</span>';
			$html.='<span class="list_width width_font" style="width:150px;">备份日期</span>';
			$html.='<span class="list_width width_font">下&nbsp;&nbsp;载</span>';
			$html.='</li>';

 			while($file = readdir($dir_handle)){
				if($file != "." && $file != ".."){
					$dirfile = $dirname."/".$file;
					$style = $num++%2==0 ? 'light-row' : 'dark-row';
					$html.='<li class='.$style.'>';
					$html.='<span class="list_width" style="width:250px">'.$file.'</span>';
					$html.='<span class="list_width" style="width:110px">'.toSize(filesize($dirfile)).'</span>';
					$html.='<span class="list_width" style="width:145px">'.date("Y-m-d",filemtime($dirfile)).'</span>';
					$html.='<span class="list_width">【<a onclick="return confirm(\'您正在下载数据文件'.$file.'！\')" href="'.B_URL.'/dow/file/'.$file.'">下载</a>】</span>';
					$html.='</li>';
				
				}
			}
			if($num==0){
				$mess="您还没有进行过文件压缩，请先进行网站打包.";
				$v=false;
			}else{
				$mess="共享版不支持压缩包自主删除，重新备份时系统会自动将原备份文件删除.<br>以下是您近期的压缩备份文件，请将其下载到本地进行保存.";
				$v=null;
			}
			$this->mess($mess,$v);			
			$html.='</ul>';
			closedir($dir_handle);
			$this->assign('file',$html);
		}
		
		private function list_dir($dir){
			$result = array();
			if (is_dir($dir)){
				$file_dir = scandir($dir);//返回目录列表中的文件及目录名称
				foreach($file_dir as $file){
					if ($file == '.' || $file == '..'){
						continue;
					}
					elseif (is_dir($dir.$file)){
						$result = array_merge($result, $this->list_dir($dir.$file.'/'));
					}
					else{
						array_push($result, $dir.$file);
					}
				}
			}
			return $result;
		}
		
		private function toSize($size){
			$dw="B";
			if($size > pow(2, 30)){
				$size=round($size/pow(2, 30), 2);
				$dw="GB";
			}else if($size > pow(2, 20)){
				$size=round($size/pow(2, 20), 2);
				$dw="MB";
			}else if($size > pow(2, 10)){
				$size=round($size/pow(2, 10), 2);
				$dw="KB";
			}else{ 
				$dw="B";
			}
			return $size.$dw;
		}
	}