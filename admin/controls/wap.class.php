<?php
	class Wap{
		function baseset(){
			$stats=isset($_GET["stats"]) ? $_GET["stats"] : null;
			$mess=isset($_GET["mess"]) ? base64_decode($_GET["mess"]) : "您可以修改如下选项来配置移动站参数.";		
			$this->mess($mess, $stats); 
			$this->assign("varList",Wapbaseset::getwapSet());
			$this->display();
		}
		function wapset(){
			if(Wapbaseset::writeConfig($_POST)){
				$this->redirect('baseset','stats/1/mess/'.base64_encode('设置成功'));
			}else{
				$this->redirect('baseset','stats/0/mess/'.base64_encode('设置失败，请检查'));
			}
		}
 		function menu(){
			if(isset($_GET["mess"])){
				if($_GET["stats"]==1)
					$this->mess(base64_decode($_GET["mess"]),true);
				else
					$this->mess(base64_decode($_GET["mess"]),false);
			}else{
				$this->mess("根据网站要求，对现有手机导航栏目进行调整.");			
			}
			$menu = D('wapmenu');
			$menu = $menu->order("ord asc")->select();
			$this->assign('menu',$menu);
			$this->display();
		}
		
		function update(){
			$menu = D('wapmenu');
			if($menu->update($_POST)){
				$this->redirect('menu','mess/'.base64_encode('导航修改成功').'/stats/1');
			}else{
				if($mess=="")
					$mess="提示：您没有做出任何修改！";
				$this->redirect('menu','mess/'.base64_encode($mess).'/stats/0');
			}
			$this->display("menu");
		}
		
		function wappic(){
			$wappic=D("wappic");
			$this->mess('共有 <b class="red_font">'.$wappic->total().'</b> 张焦点图片，尺寸为720PX*175PX');
			$this->assign("plays", $wappic->field("id,title,pic,ord")->order("ord asc")->select());			
			$this->display();
		}
		function add(){
			$this->mess('带 <span class="red_font"> * </span> 号为必填项，图片规格：640*320像素.');
			$this->display();
		}
		function mod(){
			$wappic = D("wappic");
			if(isset($_GET["stats"]))
				$this->mess(base64_decode($_GET["stats"]), false);
			else
				$this->mess('带 <span class="red_font"> * </span> 号为必填项，图片规格：720*175像素.');
			$data = $wappic->find($_GET["id"]);
			$this->assign("post",$data);
			$this->display();
		}
		function mupdate(){
			$wappic = D("wappic");
			$data = $wappic->find($_POST['id']);
			if(!empty($_FILES["pic"])){
					if($_POST['type']==1){
						$up = $this->upimg('wappic',721,176);
					}else{
						$up = $this->upimg('wappic',721,176);
					}
				if($up[0]){
					$_POST["pic"] = $up[1];
					$this->delpic($data['pic'],'wappic');
				}else{
					$mess = '提示：图片上传失败，请重新上传';
					$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
				}
			}
			if($wappic->update($_POST,1,1)){
				$this->redirect("wappic");
			}else{
				$mess=$wappic->getMsg();
				if($mess=="")
					$mess="提示：您没有做出任何修改！";
				$this->mess($mess, false);
				$this->redirect("mod", "stats/".base64_encode($mess)."/id/{$_POST["id"]}");
			}
		}
		function insert(){
			$wappic = D("wappic");
			if($_POST['type']==1){
				$up = $this->upimg('wappic',721,176);
			}else{
				$up = $this->upimg('wappic',721,176);
			}
			if($up[0]){
				$_POST["pic"] = $up[1];
				if($wappic->insert($_POST,1,1)){
					$this->redirect("wappic");
				}else{
					if($up[0])
						$this->delpic($up[1],"wappic");
					$this->mess($wappic->getMsg(),false);
					$this->assign("post",$_POST);
					$this->display("add");
				}
			}else{
				$this->mess($up[1],false);
				$this->assign("post",$_POST);
				$this->display("add");
			}		
		}
		function del(){
			$wappic = D("wappic");
			$data = $wappic->field('pic')->find($_GET["id"]);
			if($wappic->delete($_GET["id"])){
				$this->delpic($data['pic'],'wappic');
				$this->redirect("wappic");
			}else{
				$this->error("图片删除失败！", 3, "wappic");
			}
		}
		function order(){
			$wappic = D("wappic");
			for($i=0;$i<count($_POST['ids']);$i++){
				$wappic->update(array("id"=>$_POST['ids'][$i],"ord"=>$_POST['ord'][$i]));
			}
			$this->redirect("wappic");
		}		
		function status(){
			debug();
			$menu = D("wapmenu");
			//接收由AJAX传递的参数及值
			$update = array("id"=>$_GET["id"],$_GET["s"]=>$_GET["val"]);
			if($menu->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		} 
	}
?>