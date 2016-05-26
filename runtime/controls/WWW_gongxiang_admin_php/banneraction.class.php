<?php
	class BannerAction extends Common {
		function index(){
			$banner=D("banner");
			$this->mess('共有焦点图 <b class="red_font">'.$banner->total().'</b> 条，在前端最多显示6张，可以通过输入整数改变焦点图显示顺序,从小到大的排列顺序.<br><span style="background:#FAECBA"><a href="'.B_URL.'/index/action/2">深色</a></span>的记录被设置为不显示');
			if($_GET["action"]==1)
				$where=array("display"=>1);
			else if($_GET["action"]==2)
				$where=array("display"=>0);
			else
				$where="";
			$this->assign("plays", $banner->field("id,title,pic,ord,display")->order("ord asc")->select($where));	
			$this->display();
		}

		function add(){
			$this->mess('带 <span class="red_font"> * </span> 号为必填项');
			$this->display();
		}

		function insert(){
			$banner = D("banner");
			global $bannerSize;
			$up = $this->upimg('banner',$bannerSize['bwidth'],$bannerSize['bheight']);
			if($up[0]){
				$_POST["pic"] = $up[1];
				if($banner->insert($_POST,1,1)){
					$this->redirect("index");
				}else{
					if($up[0])
						$this->delpic($up[1],"banner");
					$this->mess($banner->getMsg(),false);
					$this->assign("post",$_POST);
					$this->display("add");
				}
			}else{
				$this->mess($up[1],false);
				$this->assign("post",$_POST);
				$this->display("add");
			}
		}
		
		function mod(){
			$banner = D("banner");
			if(isset($_GET["stats"]))
				$this->mess(base64_decode($_GET["stats"]), false);
			else
				$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$data = $banner->find($_GET["id"]);
			$this->assign("post",$data);
			$this->display();
		}
		
		function update(){
			global $bannerSize;	
			$banner = D("banner");
			$data = $banner->find($_POST['id']);
			if(!empty($_FILES["pic"])){
				$up = $this->upimg('banner',$bannerSize['bwidth'],$bannerSize['bheight']);	
				if($up[0]){
					$_POST["pic"] = $up[1];
					$this->delpic($data['pic'],'banner');
				}else{
					$mess = '提示：焦点图上传失败，请重新上传';
					$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
				}
			}
			if($banner->update($_POST,1,1)){
				$this->redirect("index");
			}else{
				$mess=$banner->getMsg();
				if($mess=="")
					$mess="提示：您没有对焦点图做出任何修改！";
				$this->mess($mess, false);
				$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
			}
		}
		
		function del(){
			$banner = D("banner");
			$data = $banner->field('pic')->find($_GET["id"]);
			if($banner->delete($_GET["id"])){
				$this->delpic($data['pic'],'banner');
				$this->redirect("index");
			}else{
				$this->error("焦点图删除失败！", 3, "index");
			}
		}
		function order(){
			$banner = D("banner");
			for($i=0;$i<count($_POST['ids']);$i++){
				$banner->update(array("id"=>$_POST['ids'][$i],"ord"=>$_POST['ord'][$i]));
			}
			$this->redirect("index");
		}		

	}