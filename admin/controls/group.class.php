<?php
	class Group{
		function index(){
			$this->mess('管理员用户组不能删除，否则不能登录系统.');
			$this->assign("groups",D("group")->field('id,groupname,description')->select());
			$this->display();
		}
		
		function add(){
			$this->mess('提示:带 <span class="red_font">*</span> 号项目为必填信息');
			$this->display();
		}
		
		function insert(){
			$group = D("group");
			if($group->insert($_POST,1,1)){
				$this->mess("用户组{$_POST["groupname"]}添加成功",true);
				$this->assign("groups",D("group")->field('id,groupname,description')->select());
				$this->display("index");
			}else{
				$this->mess($group->getMsg(),false);
				$this->assign($_POST);
				$this->display("add");
			}
		}
		
		function mod(){
			$this->mess('提示：带<span class="red_font">*</span>号项目为必填信息.');
			$this->assign(D("group")->find($_GET['id']));
			$this->display();
		}
		
		function update(){
			$group = D("group");
			$_POST["useradmin"] = !empty($_POST["useradmin"]) ? $_POST["useradmin"] : 0;
			$_POST["webadmin"] = !empty($_POST["webadmin"]) ? $_POST["webadmin"] : 0;
			$_POST["articleadmin"] = !empty($_POST["articleadmin"]) ? $_POST["articleadmin"] : 0;
			$_POST["sendcomment"] = !empty($_POST["sendcomment"]) ? $_POST["sendcomment"] : 0;
			$_POST["photoadmin"] = !empty($_POST["photoadmin"]) ? $_POST["photoadmin"] : 0;
			$_POST["jobadmin"] = !empty($_POST["jobadmin"]) ? $_POST["jobadmin"] : 0;
			$_POST["boardadmin"] = !empty($_POST["boardadmin"]) ? $_POST["boardadmin"] : 0;
			$_POST["funadmin"] = !empty($_POST["funadmin"]) ? $_POST["funadmin"] : 0;
			$affectedrow = $group->update($_POST,1,1);
			if($affectedrow){
				$this->mess("用户组{$_POST["groupname"]}修改成功");
				$this->assign("groups",D("group")->field('id,groupname,description')->select());
				$this->redirect("index");
			}else{
				if($affectedrow=="false")
					$mess = "未做任何修改";
				else
					$mess = $group->getMsg();
				$this->mess($mess,false);
				$this->assign($_POST);
				$this->display("mod");
			}
		}
		function del(){
 			$group = D("group");
			if(D("user")->total(array('gid'=>$_GET["id"]))>0){
				$this->mess('请将该组用户成员移至其它组中再进行删除',false);
			}else{
				if($group->delete($_GET['id'])){
					$this->mess('成功删除用户组',true);
				}else{
					$this->mess($group->getMsg(),false);
				}
			}
			$this->assign("groups",$group->field('id,groupname,description')->select());
			$this->display('index'); 
		}
	}