<?php
	class Play{
		function index(){
			$play=D("play");
			$this->mess('共有幻灯片 <b class="red_font">'.$play->total().'</b> 条，在首页中最多显示6张，可以通过输入整数改变幻灯片显示顺序,从小到大的排列顺序.<br><span style="background:#FAECBA"><a href="'.B_URL.'/index/action/2">深色</a></span>的记录被设置为行业动态,如果结束时间为<a href="'.B_URL.'/index/action/4" style="color:red">红色</a>表示已经过期,如果开始时间为<a href="'.B_URL.'/index/action/5" style="color:blue">蓝色</a>表示还没有到期.');
			if($_GET["action"]==1)
				$where=array("display"=>1);
			else if($_GET["action"]==2)
				$where=array("display"=>0);
			else if($_GET["action"]==3)
				$where=array("endtime"=>'');
			else if($_GET["action"]==4)
				$where=array("endtime <"=>time(), "endtime !="=>'');
			else if($_GET["action"]==5)	
				$where=array("endtime >"=>time());
			else
				$where="";
			$this->assign("plays", $play->field("id,aid,title,starttime,endtime,ord,display")->order("ord asc")->select($where));	
			$this->display();
		}
		function add(){
			$play = D("play")->where(array("aid"=>$_GET["aid"]))->find();
 			if($play){
				$this->redirect("mod","id/{$play["id"]}");
			} 
			$this->mess("提示：带 <span class='red_font'>*</span> 号为必填项");
			$this->assign("article",D("article")->field("id,title")->find($_GET["aid"]));
			$this->showform();
			$this->display();
		}
		function insert(){
			$play = D("play");
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			if($_POST["endtime"]=="") {
				$_POST["endtime"]=0;
			}else{
				$_POST["endtime"]=strtotime($_POST["endtime"]);
			}
			global $playSize;	
			$up = $this->upimg('play',$playSize['pwidth'],$playSize['pheight']);						
			if($up[0]){
				$_POST["pic"] = $up[1];
				if($play->insert($_POST,1,1)){
					$this->redirect("index");
				}else{
					if($up[0])
						$this->delpic($up[1],"play");
					$this->mess($play->getMsg(),false);
					$this->assign("post",$_POST);
					$this->assign("article",D("article")->field("id,title")->find($_POST["aid"]));
					$this->showform();
					$this->display("add");
				}
			}else{
				$this->mess($up[1],false);
				$this->assign("post",$_POST);
				$this->assign("article",D("article")->field("id,title")->find($_POST["aid"]));
				$this->showform();
				$this->display("add");
			}
		}
		function mod(){
			$play = D("play");
			if(isset($_GET["stats"]))
				$this->mess(base64_decode($_GET["stats"]), false);
			else
				$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$data = $play->find($_GET["id"]);
			$this->assign("article",$data);
			$this->showform($data["starttime"],$data["endtime"]);
			$this->display();
		}
		
		function update(){
			$play = D("play");
			$data = $play->find($_POST['id']);
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			if($_POST["endtime"]=="") {
				$_POST["endtime"]=0;
			}else{
				$_POST["endtime"]=strtotime($_POST["endtime"]);
			}
			global $playSize;	
			if(!empty($_FILES["pic"])){
				$up = $this->upimg('play',$playSize['pwidth'],$playSize['pheight']);	
				if($up[0]){
					$_POST["pic"] = $up[1];
					$this->delpic($data['pic'],'play');
				}else{
					$mess = '提示：幻灯上传失败，请重新上传';
					$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
				}
			}
			if($play->update($_POST,1,1)){
				$this->redirect("index");
			}else{
				$mess=$play->getMsg();
				if($mess=="")
					$mess="提示：您没有对幻灯片做出任何修改！";
				$this->mess($mess, false);
				$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
			}
		}
		
		function del(){
			$play = D("play");
			$data = $play->field('pic')->find($_GET["id"]);
			if($play->delete($_GET["id"])){
				$this->delpic($data['pic'],'play');
				$this->redirect("index");
			}else{
				$this->error("幻灯片删除失败！", 3, "index");
			}
		}
		function order(){
			$play = D("play");
			for($i=0;$i<count($_POST['ids']);$i++){
				$play->update(array("id"=>$_POST['ids'][$i],"ord"=>$_POST['ord'][$i]));
			}
			$this->redirect("index");
		}
		private function showform($start="",$end=""){
			if($start=="")
				$start = time();
			$this->assign("starttime",Form::date("starttime",date("Y-m-d H:i:s",$start),1));
			if($end != "" && $end != "0")
				$end=date("Y-m-d H:i:s",$end);
			else
				$end="";
			$this->assign("endtime",Form::date("endtime",$end,1));
		}
	}