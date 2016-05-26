<?php
	class About{
		function index(){
			$about = D("about");
			if(!empty($_GET["pid"])){
				$where=array('pid'=>$_GET["pid"]);
			}else{
				$where="";
			}
			if(isset($_GET["mess"])){
				if($_GET["stats"]==1)
					$this->mess(base64_decode($_GET["mess"]).'成功',true);
				else
					$this->mess(base64_decode($_GET["mess"]).'失败',false);
			}else{
				$this->mess("共有 <span class='red_font'>{$about->total()}</span> 个单页项，为确保数据正确调用“企业简介”不提供删除操作.");			
			}
			$this->assign('acolumn',D('acolumn')->field('id,title')->select());
			$this->assign("arts",$about->field('id,pid,title,audit,ord')->order('ord,id desc')->select($where));
			$this->display();
		}
		
		function add(){
			$this->mess('带 <span class="red_font">*</span> 号的为必填项');
			$this->assign('acolumn',D('acolumn')->field('id,title')->select());
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			$this->display();
		}
		
		function insert(){
			$about = D("about");
			$content = $_POST["content"];
			unset($_POST["content"]);
			$lastid = $about->insert($_POST,1,1);
			if($lastid && $about->aimage($content,$lastid,"us_")){
				$this->mess("单页【<b>{$_POST["title"]}</b>】添加成功，可以继续添加",true);
			}else{
				$_POST["content"]=stripslashes($content);
				$this->assign("post",$_POST);
				$this->mess($about->getMsg(),false);
				$about->delete(array('id'=>$lastid));
			}
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			if(isset($_POST["jz"])){
				$this->assign('acolumn',D('acolumn')->field('id,title')->select());
				$this->assign('select',D('acolumn')->field('id')->find($_POST['pid']));
				$this->assign("jz","checked");
			}else{
				$this->assign('acolumn',D('acolumn')->field('id,title')->select());
			}	
			$this->display("add");			
		}
		
		function mod(){
			$this->mess('带 <span class="red_font">*</span> 号的为必填项');
			$about = D("about");
			$post=$about->find($_GET["id"]);
			$this->assign('acolumn',D('acolumn')->field('id,title')->select());
			$this->assign('select',D('acolumn')->field('id')->where(array('id'=>$post['pid']))->find());			
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			$this->assign("post",$post);
			$this->display();
		}
		
		function update(){
			$about = D("about");
			$content = $_POST['content'];
			unset($_POST['content']);
			$affected = $about->update($_POST,1,1);
			$affected1 = $about->aimage($content,$_POST["id"],"us_");
			$affected_rows = $affected+$affected1;
			if($affected_rows){
				$this->redirect('index',"stats/1/pid/{$_POST["pid"]}/mess/".base64_encode('修改'));
			}else{
				if($mess=="")
					$mess="提示：您没有做出任何修改！";
				$this->mess($mess,false);
				$_POST["content"]=stripslashes($content);
				$this->assign("ck",Form::editor("content","full",300,"#FAFAFA"));
				$this->assign('acolumn',D('acolumn')->field('id,title')->select());
				$this->assign('select',D('acolumn')->field('id')->where(array('id'=>$_POST['pid']))->find());
				$this->assign("post",$_POST);
				$this->display("mod");
			}
		}
		
		function del(){
			$about = D("about");
			$result = $about->delete($_GET["id"]);
			if($result){
				$about->delres($_GET["id"],"us_");
				$this->redirect('index','mess/'.base64_encode('单页删除')."/stats/1/pid/{$_GET["pid"]}");
			}else{
				$this->redirect('index','mess/'.base64_encode('单页删除')."/stats/0/pid/{$_GET["pid"]}");
			}		
		}
		
		function order(){
			$about = D("about");
			for($i=0;$i<count($_POST["ids"]);$i++){
				$about->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));
			}
			$this->redirect("index",'mess/'.base64_encode('单页排序')."/stats/1/pid/{$_GET["pid"]}");
		}
		
		function status(){
			debug();
			$about = D("about");
			//接收由AJAX传递的参数及值
			$update = array("id"=>$_GET["id"],$_GET["s"]=>$_GET["val"]);
			if($about->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		}
		
	}