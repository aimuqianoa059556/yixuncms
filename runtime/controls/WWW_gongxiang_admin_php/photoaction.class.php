<?php
	class PhotoAction extends Common {
		function index(){
			if(isset($_GET["mess"])){
				if($_GET["stats"]==1)
					$this->mess(base64_decode($_GET["mess"]).'成功',true);
				else
					$this->mess(base64_decode($_GET["mess"]).'失败',false);
			}else{
				$this->mess("部分类别中的产品在添加后都处于锁定状态,只有审核后的产品才能发布.<br>审核后的产品也可以锁定,锁定的产品不被发布. 
");			
			}
			$photo = D("photo");
			if($_GET["audit"]=="on"){
				$where = array("pid !="=>42,"audit"=>1);
				$pget = "/audit/on";
			}
			if($_GET["audit"]=="off"){
				$where = array("pid !="=>42,"audit"=>0);
				$pget = "/audit/off";
			}
			if(!empty($_GET["pid"])){
				$where["pid"] = $_GET["pid"];
				$pget = "/pid/{$_GET["pid"]}";
				$pid = $_GET["pid"];
			}else{
				$pid = 0;
			}
			if(!empty($_GET["search"])){
				$where["title"] = "%{$_GET["search"]}%";
				$pget .= "/search/".$_GET["search"];
				$this->assign("search",$_GET["search"]);
			}
			if(empty($where)){
				$where = array("pid !="=>42);
			}
			$this->assign("select",D("phcolumn")->formselect("pid",$pid));			
			$page = new Page($photo->total($where),PHTURE_PAGE_SIZE,$pget);
			$arts = $photo->field('id,title,uid,posttime,recommend,audit')
						  ->where($where)
						  ->order('id desc')
						  ->limit($page->limit)
						  ->r_select(array('user','username','id','uid'));
			$this->assign("arts",$arts);
			$this->assign("fpage",$page->fpage());
			$this->assign("page",$page->page);			
			$this->display();
		}
		
		function add(){
			$this->mess('提示：带 <span class="red_font">*</span> 号为必填项。<br>特别提示：图片必须≤2M，否则将不能被成功上传，如您的图片大于2M,请先行处理！');
			$this->assign("select",D("phcolumn")->formselect());
			$this->assign("ck",Form::editor("content","full",300,"#FAFAFA"));
			$this->display();
		}
		
		function insert(){
			$photo = D("photo");
			global $thumbSize;
			$up = $this->upimg('phoimg',$thumbSize['width'],$thumbSize['height']);
			if($up[0]){
				$_POST["pic"] = $up[1];
				if($_POST["pid"]=="0")
					$_POST["pid"]="";
				$_POST["uid"]=1;//用户编号，待更改
				$_POST["posttime"] = time();
				$content = $_POST['content'];
				unset($_POST['content']);
				$phcolumn = D("phcolumn")->field("audit")->find($_POST["pid"]);
				if($phcolumn["audit"]==0){
					$_POST["audit"] = 1;
				}
				$lastid = $photo->insert($_POST,1,1);//返回新存入产品的ID编号
				if($lastid && $photo->aimage($content,$lastid,"ph_")){
					$mess = "产品【{$_POST["title"]}】添加成功，您可以继续添加！";
					$this->mess($mess,true);
				}else{
					$this->delpic($up[1],'phoimg');
					$this->mess($photo->getMsg(),false);
					$this->assign("select",D("phcolumn")->formselect("pid",$_POST["pid"]));
					$_POST["content"]=stripslashes($content);
					$this->assign("post",$_POST);
					$photo->delete(array('id'=>$lastid));
				}				
			}else{
				$this->mess($up[1],false);
				$this->assign("select",D("phcolumn")->formselect("pid",$_POST["pid"]));
				$_POST["content"]=stripslashes($content);				
				$this->assign("post",$_POST);
			}

		if(isset($_POST["jz"])){
				$this->assign("select",D("phcolumn")->formselect("pid",$_POST["pid"]));
				$this->assign("jz","checked");
			}else{
				$this->assign("select",D("phcolumn")->formselect());
			}			
			$this->assign("ck",Form::editor("content","full",300,"#FAFAFA"));
			$this->display("add");
		}
		
		function mod(){
			if(isset($_GET["mess"]))
				$this->mess(base64_decode($_GET["mess"]), false);
			else
				$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息.<br>不更换缩略图片时请不要点击“更换图片”按钮！ ');
			$photo = D("photo");
			$post = $photo->find($_GET["id"]);
			if($post["pic"] == "" || $post["pic"] == "no_image.gif"){
				$post["pic"] = "no_image.gif";
			}else{
				$post["pic"] = $post["pic"];
			}
			$this->assign("post",$post);
			$this->assign("select",D("phcolumn")->formselect("pid",$post["pid"]));
			$this->assign("ck",Form::editor("content","full",300,"#FAFAFA"));
			$this->display();
		}
		
		function update(){
			global $thumbSize;	
			$photo = D("photo");
			$pget = "/page/{$_GET["page"]}";
			if(!empty($_GET["search"]))
				$pget .= "/search/{$_GET["search"]}";
			if(!empty($_GET["pid"]))
				$pget .= "/pid/{$_GET["pid"]}";
			if(!empty($_GET["audit"]))
				$pget .= "/audit/{$_GET["audit"]}";	
			$phpic = $photo->field("pic")->find($_POST["id"]);
			if(!empty($_FILES["pic"])){
				$up = $this->upimg('phoimg',$thumbSize['width'],$thumbSize['height']);	
				if($up[0]){
					$_POST["pic"] = $up[1];
					$this->delpic($phpic['pic'],'phoimg');
				}else{
					$mess = '提示：您没有选择缩略图片或缩略图片上传失败';
					$this->redirect("mod", "mess/".base64_encode($mess)."/id/{$_POST["id"]}");
				}
			}			
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$content = $_POST['content'];
			unset($_POST['content']);
			$affected = $photo->update($_POST,1,1);
			$affected1 = $photo->aimage($content,$_POST["id"],"ph_");
			$affected_rows = $affected+$affected1;
			if($affected_rows){
				$mess = "产品修改成功";
				$this->redirect("index","stats/1/mess/".base64_encode($mess).$pget);
			}else{
				$mess = $photo->getMsg();
				if($mess=="")
					$mess="提示：您没有对幻灯片做出任何修改！";
				$this->redirect("mod", "mess/".base64_encode($mess)."/id/{$_POST["id"]}");
			}
		}
		function del(){
			$photo = D("photo");
			$data = $photo->field('pic')->find($_GET["id"]);
			$result = $photo->delete($_GET["id"]);
			$pget = "/page/{$_GET["page"]}";
			if(!empty($_GET["search"]))
				$pget .= "/search/{$_GET["search"]}";
			if(!empty($_GET["pid"]))
				$pget .= "/pid/{$_GET["pid"]}";
			if(!empty($_GET["audit"]))
				$pget .= "/audit/{$_GET["audit"]}";
			if($result){
				$photo->delres($_GET["id"],"ph_");
				$this->delpic($data['pic'],"phoimg");
				$this->redirect('index','mess/'.base64_encode('产品成功删除').'/stats/1'.$pget);
			}else{
				$this->redirect('index','mess/'.base64_encode('产品成功失败').'/stats/1'.$pget);
			}
		}
		function status(){
			debug();
			$photo = D("photo");
			//接收由AJAX传递的参数及值
			$update = array("id"=>$_GET["id"],$_GET["s"]=>$_GET["val"]);
			if($photo->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		}
		function fpro(){
			$photo = D("photo");
			if(isset($_POST["audits_x"]) && isset($_POST["audits_y"])){
				$result = $photo->where($_POST["id"])->update("audit='1'");
				$mess = "批量设置审核";
			}else if(isset($_POST["locks_x"]) && isset($_POST["locks_y"])){
				$result = $photo->where($_POST["id"])->update("audit='0'");
				$mess = "批量设置锁定";				
			}else if(isset($_POST["recommend_x"]) && isset($_POST["recommend_y"])){
				$result = $photo->where($_POST["id"])->update("recommend='1'");
				$mess = "批量设置推荐";				
			}else if(isset($_POST["norecommend_x"]) && isset($_POST["norecommend_y"])){
				$result = $photo->where($_POST["id"])->update("recommend='0'");
				$mess = "批量取消推荐";					
			}else if(isset($_POST["dels_x"]) && isset($_POST["dels_y"])){
				$data = $photo->field('pic')->where(array('id'=>$_POST["id"]))->select();
				$result = $photo->delete($_POST["id"]);
				foreach($_POST["id"] as $id){
					$photo->delres($id,"ph_");
					foreach($data as $v){
						$this->delpic($v['pic'],"phoimg");
					}
				}
				$mess = "批量删除";
			}
			$pget = "/page/{$_GET["page"]}";
			if(!empty($_GET["search"]))
				$pget .= "/search/{$_GET["search"]}";
			if(!empty($_GET["pid"]))
				$pget .= "/pid/{$_GET["pid"]}";			
			if(!empty($_GET["audit"]))
				$pget .= "/audit/{$_GET["audit"]}";
			if($result){
				$this->redirect('index','mess/'.base64_encode($mess).'/stats/1'.$pget);
			}else{
				$this->redirect('index','mess/'.base64_encode($mess).'/stats/0'.$pget);
			}
		}
	}