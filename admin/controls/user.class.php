<?php
	class User{
		function index(){
			$user =	D("user");
			$this->mess('管理员用户不能删除，否则将不能登录系统,<a href="'.B_URL.'/index/disable/1" style="background:#EECCCC;">深色记录</a>为禁用用户.<br> 用户被删除时,他的留言及评论信息也会一同删除. ');
			if($_GET["disable"] == "1"){
				//$where = array("disable"=>1);
				$where["disable"] = 1;
				$this->assign("disable",1);
				$pget = "disable/1";
			}else{
				$select = !empty($_GET["gid"]) ? $_GET["gid"] : 0;
				$search = !empty($_GET["search"]) ? $_GET["search"] : "";
				$this->assign("select",D("group")->formselect("gid",$select));
				if($select != 0){
					$where["gid"] = $select;
					$pget .= "/gid/{$select}";
					$this->assign("gid",$select);
				}
				if($search != ""){
					$where["username"] = "%{$_GET["search"]}%";
					$pget .= "/search/{$_GET["search"]}";
				}
			}
			$page = new Page($user->total($where),ARTICLE_PAGE_SIZE,$pget);
			$users = $user->field("id,username,regtime,email,disable")
						  ->limit($page->limit)
						  ->where($where)
						  ->select();
			$page->set("head","个用户");
			$this->assign("users",$users);
			$this->assign("search",$search);
			$this->assign("fpage",$page->fpage(0,3,2,4,5,6));
			$this->assign("page",$page->page);
			$this->display();
		}
		
		function add(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("select", D("group")->formselect("gid", 2));
			$this->display();
		}
		
		function insert(){
			$user = D("user");
			$_POST["srcpwd"] = $_POST["userpwd"];
			$_POST["userpwd"] = md5($_POST["userpwd"]);
			$_POST["repwd"] = md5($_POST["repwd"]);
			if($user->insert($_POST,1,1)){
				$this->mess("添加用户{$_POST["username"]}成功，可继续添加",true);
				$this->assign("post",array("jz"=>$_POST["jz"]));
				if($_POST["jz"]=="1")
					$gid = $_POST["gid"];
				else
					$gid = 2;
				$this->assign("select",D("group")->formselect("gid",$gid));
			}else{
				$this->mess($user->getMsg(),false);
				$this->assign("post",$_POST);
				$this->assign("select",D("group")->formselect("gid",$_POST["gid"]));
			}
			$this->display("add");
		}
		
		function mod(){
			$user = D("user");
			$this->mess('提示:带<span class="red_font">*</span>的项目为必填信息');
			$users = $user->field('id,gid,username,sex,regtime,email,disable')->find($_GET["id"]);
			$this->assign("select",D("group")->formselect("gid",$users["gid"]));
			$this->assign("post",$users);
			$this->display();
		}
		
		function update(){
			$user = D("user");
			if(!isset($_POST["disable"]))
				$_POST['disable']=0;
			if($_POST["userpwd"]==""){
				unset($_POST['userpwd']);
			}else{
				$_POST['userpwd'] = md5($_POST['userpwd']);
				$_POST['repwd'] = md5($_POST['repwd']);
			}
			$affectedrow = $user->update($_POST,1,1);
			if($affectedrow){
				$this->redirect('index');
			}else{
				if($affectedrow=="false")
					$mess = "未做任何修改";
				else
					$mess = $user->getMsg();
				$this->mess($mess,false);
				$this->assign("post",$_POST);
				$this->assign("select",D("group")->formselect("gid",$_POST['gid']));
				$this->display('mod');
			}
		}
		
		function del(){
			$user = D("user");
			//判定ID号的传递方式
			if(!empty($_POST)){
				$id = $_POST["id"];
			}else{
				$id = $_GET["id"];
			}
			//分页条件
			if(!empty($_GET['search']))
				$pget .= "/search/{$_GET['search']}";
			if(!empty($_GET['gid']))
				$pget .= "/gid/{$_GET['gid']}";
			if(!empty($_GET['disable']))
				$pget .= "/disable/{$_GET['disable']}";
			if($user->where($id)->r_delete(
				array("board", 'uid'),
				array('comment', 'uid'))){
				$this->redirect("index", "page/{$_GET['page']}".$pget);
			}else{
				$this->error("删除用户失败!", 3, "user/index/page/{$_GET['page']}".$pget);
			}
		}
	}