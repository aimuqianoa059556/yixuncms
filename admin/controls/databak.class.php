<?php 
	class Databak{
		function index(){
			$this->filelist();
			$this->display();
		}
		
		function add(){
			$this->mess("建议您每周进行一次数据备份，以便做灾难性恢复.");	
			$this->display();
		}
		
		//备份数据库
		function bakdata(){
			$db = new bakdb();
			$v = $db->outputSql();
			if($v){
				$this->mess("数据备份成功",true);
			}else{
				$this->mess("数据备份失败",false);
			}
			$this->display("add");
		}
		
		//恢复数据库
		function recovery() {
			$db = new bakdb();
			$file = $_GET['file'];
			$filename=PROJECT_PATH.'databak/'.$file;
  			$v= $db->inputSql($filename);
			$this->filelist();
			if($v){
				$this->mess("数据恢复成功",true);
			}else{
				$this->mess("数据恢复失败",false);
			}
			$this->display("index");
		}
		
		//删除数据文件
		function del(){
			$filename = $_GET['file'];
			$dirname=PROJECT_PATH.'databak/'.$filename;
			unlink($dirname);
			$this->filelist();
			$this->mess("删除成功",true);
			$this->display("index");			
		}
		
		//下载数据文件
		function dow(){
			$filename=PROJECT_PATH.'databak/'.$_GET['file'];
			header("Content-disposition:filename=".$_GET['file']);
			header("Content-type:application/octetstream");
			header("Content-Length:".filesize($filename));
			header("Pragma:no-cache");
			header("Expires:0");
			readfile($filename);
		}

		function filelist(){
			$num = 0;
			$dirname=PROJECT_PATH.'databak/';
			$dir_handle = opendir($dirname);
			$html='<ul class="viewmess">';
			$html.='<li class="dark-row">';
			$html.='<span class="list_width width_font" style="width:250px;">数据文件</span>';
			$html.='<span class="list_width width_font" style="width:110px;">文件大小</span>';
			$html.='<span class="list_width width_font" style="width:198px;">备份日期</span>';
			$html.='<span class="list_width width_font">操&nbsp;&nbsp;作</span>';
			$html.='</li>';

 			while($file = readdir($dir_handle)){
				if($file != "." && $file != ".."){
					$dirfile = $dirname."/".$file;
					$style = $num++%2==0 ? 'light-row' : 'dark-row';
					$html.='<li class='.$style.'>';
					$html.='<span class="list_width" style="width:250px">'.$file.'</span>';
					$html.='<span class="list_width" style="width:110px">'.toSize(filesize($dirfile)).'</span>';
					$html.='<span class="list_width" style="width:145px">'.date("Y-m-d",filemtime($dirfile)).'</span>';
					$html.='<span class="list_width">【<a id="cdf" onclick="return confirm(\'您确认恢复数据文件'.$file.'吗？\')" href="'.B_URL.'/recovery/file/'.$file.'">恢复</a>】【<a onclick="return confirm(\'您正在下载数据文件'.$file.'！\')" href="'.B_URL.'/dow/file/'.$file.'">下载</a>】【<a onclick="return confirm(\'您确认要删除数据文件'.$file.'吗？\')" href="'.B_URL.'/del/file/'.$file.'">删除</a>】</span>';
					$html.='</li>';
				
				}
			}
			if($num==0){
				$mess="您还没有进行过数据备份，请先进行备份.";
				$v=false;
			}else{
				$mess="以下是您近期的数据备份文件，您可以对期进行恢复、下载及删除操作.";
				$v=null;
			}
			$this->mess($mess,$v);			
			$html.='</ul>';
			closedir($dir_handle);
			$this->assign('file',$html);
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