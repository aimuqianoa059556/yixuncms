<?php
	class AdvertAction extends Common {
		function index(){
			$advert=D("advert");
			$this->mess('若某广告位大于两条可以通过输入整数改变广告图显示顺序,从小到大的排列顺序.<br><span style="background:#FAECBA"><a href="'.B_URL.'/index/action/2">深色</a></span>的记录被设置为不显示');
			if($_GET["action"]==1)
				$where=array("display"=>1);
			else if($_GET["action"]==2)
				$where=array("display"=>0);
			else
				$where="";
			$this->assign("plays", $advert->field("id,wz,pic,ord,display")->order("ord asc")->select($where));	
			$this->display();
		}

		function add(){
			$this->mess('带 <span class="red_font"> * </span> 号为必填项<br/>尺寸要求：首页横幅（1180 * 50）左侧广告（280 * 50）');
			$this->display();
		}

		function insert(){
			$advert = D("advert");
			$up = $this->upimg('advert',1190,90);
			if($up[0]){
				$_POST["pic"] = $up[1];
				if($advert->insert($_POST,1,1)){
					$this->redirect("index");
				}else{
					if($up[0])
						$this->delpic($up[1],"advert");
					$this->mess($advert->getMsg(),false);
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
			$advert = D("advert");
			if(isset($_GET["stats"]))
				$this->mess(base64_decode($_GET["stats"]), false);
			else
				$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$data = $advert->find($_GET["id"]);
			$this->assign("post",$data);
			$this->display();
		}
		
		function update(){
			$advert = D("advert");
			$data = $advert->find($_POST['id']);
			if(!empty($_FILES["pic"])){
				$up = $this->upimg('advert',1190,90);	
				if($up[0]){
					$_POST["pic"] = $up[1];
					$this->delpic($data['pic'],'advert');
				}else{
					$mess = '提示：广告图上传失败，请重新上传';
					$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
				}
			}
			if($advert->update($_POST,1,1)){
				$this->redirect("index");
			}else{
				$mess=$advert->getMsg();
				if($mess=="")
					$mess="提示：您没有对广告图做出任何修改！";
				$this->mess($mess, false);
				$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
			}
		}
		
		function del(){
			$advert = D("advert");
			$data = $advert->field('pic')->find($_GET["id"]);
			if($advert->delete($_GET["id"])){
				$this->delpic($data['pic'],'advert');
				$this->redirect("index");
			}else{
				$this->error("广告图删除失败！", 3, "index");
			}
		}
		function order(){
			$advert = D("advert");
			for($i=0;$i<count($_POST['ids']);$i++){
				$advert->update(array("id"=>$_POST['ids'][$i],"ord"=>$_POST['ord'][$i]));
			}
			$this->redirect("index");
		}		

	}