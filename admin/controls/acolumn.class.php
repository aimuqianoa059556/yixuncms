<?php
	class Acolumn{
		//栏目列表
		function index(){
			$acolumn = D('acolumn');
			$this->mess('提示：只能删除空栏目，如果栏目下有单页信息，请先将其删除.');
			$this->assign("list",$acolumn->field('id,title,ord')->select());
			$this->display();
		}
		//添加栏目
		function add(){
			$acolumn = D('acolumn');
			$this->mess('带 <span class="red_font"> * </span> 为必填项');
			$this->display();
		}
		//插入操作
		function insert(){
			$acolumn = D('acolumn');
			if($acolumn->insert($_POST,1,1)){
				$this->mess("新分类【{$_POST["title"]}】添加成功",true);
			}else{
				$this->mess($acolumn->getMsg(),false);
				$this->assign("post",$_POST);
			}
			$this->display("add");
		}
		//修改界面
		function mod(){
			$this->mess('提示: 带<span class="red_font"> * </span>的项目为必填信息。 ');
			$acolumn = D("acolumn");
			$data = $acolumn->find($_GET["id"]);
			$this->assign("post",$acolumn->find($_GET["id"]));
			$this->display();
		}
		//修改操作
		function update(){
			$acolumn = D("acolumn");
			if($acolumn->update($_POST,1,1)){
				$this->mess("分类修改成功",true);
				$this->assign("list",$acolumn->field('id,title')->select());
				$this->redirect("index");
			}else{
				$mess = $acolumn->getMsg();
				if($mess=="")
					$mess = "未作出任何改动";
				$this->mess($mess,false);
				$this->assign("post",$_POST);
				$this->display("mod");
			}
		}
		//删除分类
		function del(){
			$acolumn = D('acolumn');
			$about=D("about");
			if($about->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("分类中有单页存在不能删除，请先删除本类中的单页信息！", false);				
			}else{
				if($acolumn->delete($_GET["id"]))
					$this->mess("分类删除成功",true);
				else
					$this->mess("分类删除失败",false);
			}
			$this->assign("list",$acolumn->field('id,title,audit')->select());
			$this->display("index");			
		}

		function order(){
			$acolumn = D("acolumn");
			for($i=0;$i<count($_POST["ids"]);$i++){
				$acolumn->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));
			}
			$this->redirect("index");
		}
	}