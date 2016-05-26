<?php
	class CkModel extends Dpdo {
		function aimage($content,$lastid,$prefix=""){
			if(rtrim($content)==""){
				$this->setMsg("内容不能为空");
				return false;
			}
			$content = str_replace(array("\"","'"),array("&quot;","&#039;"),stripslashes($content));
			if(!empty($_SESSION["article"])){
				$srcpath = PROJECT_PATH."public/uploads/";
				$path = $srcpath.$prefix.$lastid.'/';
				if(!file_exists($path)){
					mkdir($path,0755);
				}
				foreach($_SESSION["article"] as $filename){
					$content = str_replace("tmp/".$filename,$prefix.$lastid."/".$filename,$content);
					rename($srcpath."tmp/".$filename,$path.$filename);
				}
				$_SESSION["article"] = array();
			}
			return $this->where($lastid)->update("content='{$content}'");
		}
		function delres($id,$prefix=""){
/* 			if($prefix==""){
				
			} */
			$directory = PROJECT_PATH."public/uploads/".$prefix.$id.'/';
			if(file_exists($directory)){
				if($dir_handle=@opendir($directory)){
					while($filename=readdir($dir_handle)){
						if($filename!="." && $filename!=".."){
							unlink($directory."/".$filename);
						}
					}
					closedir($dir_handle);
				}
				rmdir($directory);
			}
		}
	}