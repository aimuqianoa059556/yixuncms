<?php
	class Phcolumn{
		//栏目列表
		function index(){
			$phcolumn = D('phcolumn');
			$this->mess('提示：可以通过重新排序改变栏目的在首页中的显示顺序,数值小的排在前面，还可以关闭部分栏目的显示.<br>注意：只能删除空栏目，如果样目下有文章或子栏目，请先删除.');
			$this->assign("list",$phcolumn->parsetree());
			$this->display();
		}
		//添加栏目
		function add(){
			$phcolumn = D('phcolumn');
			$this->mess('带 <span class="red_font">*</span> 为必填项');
			$this->assign("select",$phcolumn->formselect());
			$this->display();
		}
 		//插入操作
		function insert(){
			$phcolumn = D('phcolumn');
			if($_POST["pid"] == "0"){
				$_POST['path'] = "0";
			}else{
				$data = $phcolumn->field("path")->find($_POST["pid"]);
				$_POST['path'] = $data["path"]."-".$_POST["pid"];
			}
			if($phcolumn->insert($_POST,1,1)){
				$this->mess("新分类【{$_POST["title"]}】添加成功",true);
			}else{
				$this->mess($phcolumn->getMsg(),false);
				$this->assign("post",$_POST);
			}
			if(isset($_POST["jz"])){
				$this->assign("select",$phcolumn->formselect("pid",$_POST["pid"]));
				$this->assign("jz","checked");
			}else{
				$this->assign("select",$phcolumn->formselect());
			}
			$this->display("add");
		}
		//修改界面
		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息。<br>注意：不能将类别移动到自己或自己的子类中去. ');
			$phcolumn = D("phcolumn");
			$data = $phcolumn->find($_GET["id"]);
			$this->assign("select",$phcolumn->formselect("pid",$data["pid"]));
			$this->assign("post",$phcolumn->find($_GET["id"]));
			$this->display();
		}
		//修改操作
		function update(){
			$phcolumn = D("phcolumn");
			if($phcolumn->catMod($_POST)){
				$this->mess("分类修改成功",true);
				$this->assign("list",$phcolumn->parsetree());
				$this->display("index");
			}else{
				$this->mess($phcolumn->getMsg(),false);
				$this->assign("select",$phcolumn->formselect("pid",$_POST["pid"]));
				$this->assign("post",$_POST);
				$this->display("mod");
			}
		}
		//删除分类
		function del(){
			$phcolumn = D('phcolumn');
			$photo = D("photo");
			if($phcolumn->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("请先删除当前分类下的子分类",false);
			}else if($photo->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("该分类中有产品存在不能删除，请先删除本类中的产品！", false);
			}else{
				if($phcolumn->delete($_GET["id"]))
					$this->mess("分类删除成功",true);
				else
					$this->mess("分类删除失败",false);
			}
			$this->assign("list",$phcolumn->parsetree());
			$this->display("index");			
		}
		//排序操作
		function ord(){
			$phcolumn = D('phcolumn');
			$affected_rows = 0;
			for($i=0;$i<count($_POST['id']);$i++){
				$affected_rows += $phcolumn->update(array("id"=>$_POST['id'][$i],"ord"=>$_POST['ord'][$i]));
			}
			if($affected_rows > 0){
				$this->mess('栏目顺序修改成功',true);
			}else{
				$this->mess('未作顺序调整',false);
			}
			$this->assign("list",$phcolumn->parsetree());
			$this->display("index");
		}
		function dis(){
			$data["id"]=$_GET["id"];
			$data["display"]=$_GET["con"];
			D("phcolumn")->update($data);
		}
	}