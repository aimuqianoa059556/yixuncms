<?php
	class Common extends Action {
		function init(){
		if(!file_exists("./runtime/install.lock")){
			header("Location:".B_ROOT."/install/index.php");
		}
			if(!(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]===1)){
				$this->redirect("login/index");
			}
			$webadmin=array('base','flink','about', 'banner','notice','board');
			if(in_array($_GET["m"], $webadmin) && $_SESSION["webadmin"]!=1){
				$this->error("权限不足，你不是网络编辑不能操作这个模块", 3, "index/index");
			}
			$useradmin=array('user', 'group');
			if(in_array($_GET["m"], $useradmin) && $_SESSION["useradmin"]!=1){
				$this->error("权限不足，你不能对用户及用户组进行管理", 3, "index/index");
			}
			$articleadmin=array('article', 'play','column');
			if(in_array($_GET["m"], $articleadmin) && $_SESSION["articleadmin"]!=1){
				$this->error("权限不足，你不能对文章进行操作", 3, "index/index");
			}
			$photoadmin=array('photo','phcolumn');
			if(in_array($_GET["m"], $photoadmin) && $_SESSION["photoadmin"]!=1){
				$this->error("权限不足，你不能对产品进行操作", 3, "index/index");
			}	
			$funadmin=array('fun','advert');
			if(in_array($_GET["m"], $funadmin) && $_SESSION["funadmin"]!=1){
				$this->error("权限不足，你不能对扩展进行操作", 3, "index/index");
			}
			$upgrade=array('databak','webbak','style','template','upgrade');
			if(in_array($_GET["m"], $upgrade) && $_SESSION["boardadmin"]!=1){
				$this->error("权限不足，你不能对升级与维护进行操作", 3, "index/index");
			}			
			if($_GET["m"]=="job" && $_SESSION["jobadmin"]!=1){
				$this->error("权限不足，你不能对招聘进行操作", 3, "index/index");
			}else if($_GET["m"]=="wap" && $_SESSION["sendcomment"]!=1){
				$this->error("权限不足，你不能对手机网站进行操作", 3, "index/index");				
			}
		}
		//消息提示及判定
		function mess($mess="ok",$is=null){
			$message = "";
			if(is_array($mess)){
				foreach($mess as $m){
					$message .= $m;
				}
			}else{
				$message = $mess;
			}
			if(is_null($is)){
				$this->assign("mess","");
			}else if($is){
				$this->assign("mess","ok");
			}else{
				$this->assign("mess","error");
			}
			$this->assign("tmess",$message);
		}
		//处理CK图片上传方法
		protected function upimage(){
			$path=PROJECT_PATH.'public/uploads';//图片上传路径
			global $pictureSize;
			$up=new FileUpload($path.'/tmp');//图片上传临时路径
			$up->set("allowtype", array("gif", "png", "jpg", "jpeg"))//允许上传类型
			   ->set("thumb", array("width"=>$pictureSize["maxWidth"], "height"=>$pictureSize["maxHeight"]))//限制尺寸
			   ->set("watermark", array("water"=>$path.'/'.WATER, "position"=>POSITION));//设置图片水印
			if($up->upload("upload")){
				$filename=$up->getFileName();//如果图片上传成功返回图片名称
				$_SESSION["article"][]=$filename;//多个图片存入SESSION一维数组
				$this->mkhtml(B_PUBLIC."/uploads/tmp/".$filename);//将路径返回CK路径框
			}else{
				$mess=strip_tags($up->getErrorMsg());//上传失败返回错误信息
				$this->mkhtml('', $mess);//弹出错误信息
			}
		}
		//处理CKflash上传方法
		protected function upflash(){
			$up=new FileUpload(PROJECT_PATH.'public/uploads/tmp');
			$up->set("allowtype", array("flv","swf"));
			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml(B_PUBLIC."/uploads/tmp/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());	
				$this->mkhtml('', $mess);
			}
		}
		protected function mkhtml($fileurl,$message="") {
			$str='<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', \''.$fileurl.'\', \''.$message.'\');</script>';
			exit($str);
		}
		
		//图片上传
		protected function upimg($dir,$w,$h){
			$path=PROJECT_PATH.'public/uploads/'.$dir;
			$up = new FileUpload($path);
			$up->set("thumb",array('width'=>$w,'height'=>$h));
			if($up->upload("pic")){
				$filename = $up->getFilename();
				return array(true,$filename);
			}else{
				return array(false,$up->getErrorMsg());
			}
		}	
		protected function delpic($filename,$dir){
			$file = PROJECT_PATH.'public/uploads/'.$dir.'/'.$filename;
			if(file_exists($file)){
				unlink($file);
			}
		}		
		
		protected function proRandName() {		
			$fileName=date('YmdHis').rand(100,999);   //获取随机文件名	
			return $fileName;    //返回文件名加原扩展名
		}
	}