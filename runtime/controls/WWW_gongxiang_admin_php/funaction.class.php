<?php
	class FunAction extends Common {
		function index(){
			$fun = D("fun");		
			if(isset($_GET["mess"])){
				if($_GET["stats"]==1)
					$this->mess(base64_decode($_GET["mess"]).'成功',true);
				else
					$this->mess(base64_decode($_GET["mess"]).'失败',false);
			}else{
				$this->mess("共有 <span class='red_font'>{$fun->total()}</span> 个扩展项<br>该项为开发人员准备，如果需要为网站添加相应的模板页面及内容，添加完扩展后在控制器中分配后再对应模板页调用即可。<br>默认保留一个联系我们扩展，不可删除");			
			}		
			$this->assign("arts",$fun->field('id,title,audit,ord')->order('ord,id desc')->select());
			$this->display();
		}
		
		function add(){
			$this->mess('带 <span class="red_font">*</span> 号的为必填项');
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			$this->display();
		}
		
		function insert(){
			$fun = D("fun");
			$content = $_POST["content"];
			unset($_POST["content"]);
			$lastid = $fun->insert($_POST,1,1);
			if($lastid && $fun->aimage($content,$lastid,"fun_")){
				$this->mess("扩展【<b>{$_POST["title"]}</b>】添加成功，可以继续添加",true);
			}else{
				$_POST["content"]=stripslashes($content);
				$this->assign("post",$_POST);
				$this->mess($fun->getMsg(),false);
				$fun->delete(array('id'=>$lastid));
			}
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			$this->display("add");			
		}
		
		function mod(){
			$this->mess('带 <span class="red_font">*</span> 号的为必填项');
			$fun = D("fun");
			$this->assign("post",$fun->find($_GET["id"]));
			$this->assign("ck",Form::editor("content","full",200,"#FAFAFA"));
			$this->display();
		}
		
		function update(){
			$fun = D("fun");
			$content = $_POST['content'];
			unset($_POST['content']);
			$affected = $fun->update($_POST,1,1);
			$affected1 = $fun->aimage($content,$_POST["id"],"fun_");
			$affected_rows = $affected+$affected1;
			if($affected_rows){
				$this->redirect('index','stats/1/mess/'.base64_encode('修改'));
			}else{
				$mess = $fun->getMsg();
				if($mess=="")
					$mess="提示：您没有做出任何修改！";
				$this->mess($mess,false);
				$_POST["content"]=stripslashes($content);
				$this->assign("ck",Form::editor("content","full",300,"#FAFAFA"));
				$this->assign("post",$_POST);
				$this->display("mod");
			}
		}
		
		function del(){
			$fun = D("fun");
			$result = $fun->delete($_GET["id"]);
			if($result){
				$fun->delres($_GET["id"],"fun_");
				$this->redirect('index','mess/'.base64_encode('扩展删除').'/stats/1');
			}else{
				$this->redirect('index','mess/'.base64_encode('扩展失败').'/stats/0');
			}		
		}
		
		function order(){
			$fun = D("fun");
			for($i=0;$i<count($_POST["ids"]);$i++){
				$fun->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));
			}
			$this->redirect("index");
		}
		
		function status(){
			debug();
			$fun = D("fun");
			//接收由AJAX传递的参数及值
			$update = array("id"=>$_GET["id"],$_GET["s"]=>$_GET["val"]);
			if($fun->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		}		
	}