<?php
	class Photo extends Ck{
		//产品缩略图上传
		function phupload($lastid,$prefix=""){
			global $thumbSize;//包含全局变量
			$path=PROJECT_PATH.'public/uploads/'.$prefix.$lastid;
			$up = new FileUpload($path);
			$up->set("thumb",array('width'=>$thumbSize['width'],'height'=>$thumbSize['height']));
			if($up->upload("pic")){
				$filename = $up->getFilename();
				return array(true,$filename);
			}else{
				return array(false,"可能的错误：①未作任何修改 ②未选择新缩略图 ③图片大于2M.<br>");
			}
		}	
	}