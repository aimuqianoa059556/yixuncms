<?php
	class LoginAction extends Action {
		function index(){
			debug(0);
			$this->display();
		}
		
		function prologin(){
			$this->validate();
			$user=D("user")->field('id,gid,username,disable')
				->where(array("username"=>$_POST["username"], "userpwd"=>md5($_POST["userpwd"]), "disable"=>0))
				->find();
			if($user){
				$group=D("group")->field('groupname,description,useradmin,webadmin,articleadmin,photoadmin,jobadmin,boardadmin,funadmin,sendcomment')->where(array("id"=>$user["gid"]))->find();
				$guser=array_merge($user, $group);
				if($guser["useradmin"] || $guser["webadmin"] || $guser["articleadmin"] || $guser["sendcomment"] || $guser["photoadmin"] || $guser["jobadmin"] || $guser["boardadmin"] || $guser["funadmin"]) {
					$_SESSION=$guser;//将数组存入SESSION
					$_SESSION["isLogin"]=1;//后台登录标识
					$_SESSION["login"]=1;//前台登录标识
					$this->redirect("index/index");
				}else {
					$this->error("不能登录后台，权限不足！", 3, "index");
				}
			}else{
				$this->error("用户登录失败,请重新登录！", 3, "index");
			}
		}
		//注销退出
		function logout(){
			$username=$_SESSION["username"];
			D("user")->logout();
			$this->success("再见{$username}, 成功退出!", 1, "index");
		}
		//登陆验证
		private function validate(){
			$stats=false;
			$errormess="登录失败：<br>";
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户名不能为空<br>";
				$stats=true;	
			}
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户密码不能为空<br>";
				$stats=true;	
			}
			if(strtoupper($_POST["code"])!=$_SESSION["code"]){
				$errormess.="验证码输出错误<br>";
				$stats=true;	
			}
			if($stats){
				$this->error($errormess, 3, "index");
			}
		}
		//验证码
		function code(){
			ob_clean();
			echo new Vcode(50,18);
		}		
	}