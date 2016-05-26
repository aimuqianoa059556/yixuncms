<?php
	class notice{
		function index(){
			$notice = D("notice");
			$this->mess("共有 <font color='red'>{$notice->total()}</font> 条公告，其中：<br><span style='background:#FAECBA'>黄底色</span>为不显示公告，结束时间为<font color='red'>红色</font>表示公告已经过期");
			if($_GET["action"]==1)
				$where = array("display"=>1);
			else if($_GET["action"]==2)
				$where = array("display"=>0);
			else if($_GET["action"]==3)
				$where = array("endtime"=>'');
			else if($_GET["action"]==4)
				$where = array("endtime <"=>time(),"endtime !="=>'');
			else if($_GET["action"]==5)
				$where = array("endtime >"=>time(),"endtime !="=>'');
			else
				$where="";			
			$notices = $notice->field('id,title,color,starttime,endtime,ord,display')->order("ord asc")->select($where);
			$this->assign("notices",$notices);
			$this->display();
		}
		
		function add(){
			$this->mess('带<font color="red"> * </font>号为必填项<br>特别提示：公告内容不在前台调用，请随意填写！');
			$this->showform();
			$this->assign("color",Form::color("color","000000"));
			$this->display();
		}
		
		function insert(){
			$_POST['starttime'] = strtotime($_POST['starttime']);
			$_POST['endtime'] = empty($_POST['endtime']) ? 0 : strtotime($_POST['endtime']);
			$notice = D('notice');
			$content = $_POST['content'];
			unset($_POST['content']);
			$lastid = $notice->insert($_POST,1,1);
			if($lastid && $notice->aimage($content,$lastid,"notice_")){
				$this->redirect("index");
			}else{
				$this->mess($notice->getMsg(),false);
				$this->assign("post",$_POST);
				$this->showform($_POST['starttime'],$_POST['endtime']);
				$this->assign("color",Form::color("color","000000"));
				$notice->delete(array('id'=>$lastid));
				$this->display("add");
			}
		}
		
		function mod(){
			$notice = D("notice");
			$this->mess('带<font color="red"> * </font>号为必填项<br>特别提示：公告内容不在前台调用，请随意填写！');
			$data = $notice->find($_GET["id"]);
			$this->showform($data['starttime'],$data['endtime']);
			$this->assign("color",Form::color("color",$data["color"]));			
			$this->assign("post",$data);
			$this->display();
		}
		
		function update(){
			$notice = D("notice");
			$_POST['starttime'] = strtotime($_POST['starttime']);
			$_POST['endtime'] = empty($_POST['endtime']) ? 0 : strtotime($_POST['endtime']);
			$content = $_POST['content'];
			unset($_POST['content']);
			$affected = $notice->update($_POST,1,1);
			$affected1 = $notice->aimage($content,$_POST["id"],"notice_");
			$affected_rows = $affected+$affected1;
			if($affected_rows){
				$this->redirect("index");
			}else{
				$mess = $notice->getMsg();
				if($mess=="")
					$mess="您未对公告作任何更改";
				$this->mess($mess,false);
				$this->showform($_POST['starttime'],$_POST['endtime']);
				$this->assign("color",Form::color("color",$_POST["color"]));			
				$this->assign("post",$_POST);
				$this->display("mod");
			}
		}
		
		function del(){
			$notice = D("notice");
			if($notice->delete($_GET["id"])){
				$notice->delres($_GET["id"],"notice_");
				$this->redirect("index");
			}else{
				$this->error("公告删除失败",2,"index");
			}
		}
		
		function order(){
			$notice = D("notice");
			for($i=0;$i<count($_POST["ids"]);$i++){
				$notice->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));
			}
			$this->redirect("index");
		}
		
		private function showform($start="",$end=""){
			if($start=="")
				$start = time();
			$this->assign("starttime",Form::date("starttime",date("Y-m-d H:i:s",$start),1));
			if($end != "" && $end != "0")
				$end = date("Y-m-d H:i:s",$end);
			else
				$end = "";
			$this->assign("endtime",Form::date("endtime",$end,1));
			$this->assign("ck",Form::editor("content","desc","150","#FAFAFA"));
		}
	}