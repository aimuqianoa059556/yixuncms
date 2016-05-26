<?php
	class Job{
		function index(){
			$job = D("job");
			if(isset($_GET["mess"])){
				if($_GET["stats"]=="1")
					$this->mess(base64_decode($_GET["mess"]),true);
				else
					$this->mess(base64_decode($_GET["mess"]),false);
			}else{
				$this->mess("共有 {$job->total()} 条职位，其中：结束时间为红色表示公告已经过期");
			}
			if($_GET["action"]==3)
				$where = array("endtime"=>'');
			else if($_GET["action"]==4)
				$where = array("endtime <"=>time(),"endtime !="=>'');
			else if($_GET["action"]==5)
				$where = array("endtime >"=>time(),"endtime !="=>'');
			else
				$where="";			
			$arts = $job->field('id,title,starttime,endtime')->select($where);
			$this->assign("arts",$arts);
			$this->display();
		}
		
		function add(){
			$this->mess('带<span class="red_font"> * </span>号的为必填项');
			$this->showform();
			$this->display();
		}
		
		function insert(){
			$_POST['starttime'] = strtotime($_POST['starttime']);
			$_POST['endtime'] = empty($_POST['endtime']) ? 0 : strtotime($_POST['endtime']);
			$job = D("job");
			$content = $_POST["content"];
			unset($_POST["content"]);
			$lastid = $job->insert($_POST,1,1);			
			if($lastid && $job->aimage($content,$lastid)){
				$mess = "招聘职位添加成功";
				$this->redirect("index","stats/1/mess/".base64_encode($mess));
			}else{
				$_POST["content"]=stripslashes($content);
				$this->mess($job->getMsg(),false);
				$this->showform($_POST['starttime'],$_POST['endtime']);
				$this->assign("post",$_POST);
				$job->delete(array('id'=>$lastid));
				$this->display("add");
			}
		}
		
		function mod(){
			$this->mess('带<span class="red_font"> * </span>号的为必填项');
			$job = D("job");
			$data = $job->find($_GET["id"]);
			$this->assign("post",$data);
			$this->showform($data['starttime'],$data['endtime']);
			$this->display();
		}
		
		function update(){
			$_POST["starttime"] = strtotime($_POST["starttime"]);
			$_POST['endtime'] = empty($_POST['endtime']) ? 0 : strtotime($_POST['endtime']);
			$job = D("job");
			$content = $_POST["content"];
			unset($_POST["content"]);			
			$affected = $job->update($_POST,1,1);
			$affected1 = $job->aimage($content,$_POST["id"]);
			$affected_rows = $affected+$affected1;			
			if($affected_rows){
				$mess="招聘职位修改成功";
				$this->redirect("index","stats/1/mess/".base64_encode($mess));
			}else{
				$_POST["content"] = stripcslashes($content);				
				$mess = $job->getMsg();
				if($mess=="")
					$mess = "您未对招聘职位做出任何修改";
				$this->mess($mess,false);
				$this->showform($_POST["starttime"],$_POST["endtime"]);
				$this->assign("post",$_POST);
				$this->display("mod");	
			}
		}
		
		function del(){
			$job = D("job");
			$data = $job->field('id,title')->find($_GET["id"]);
			if($job->delete($_GET["id"])){
				$mess = "职位【{$data["title"]}】删除成功";
				$this->redirect("index","stats/1/mess/".base64_encode($mess));
			}else{
				$mess = "职位【{$data["title"]}】删除";
				$this->redirect("index","stats/0/mess/".base64_encode($mess));				
			}
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
			$this->assign("ck",Form::editor("content","basic","150","#FAFAFA",false));
		}		
	}