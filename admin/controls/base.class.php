<?php
	class Base{
		//基本信息
		function sysinfo(){
			$this->mess('可以根据网站的需要，对服务器现有的配置进行调整. ');
			$this->assign('sysinfo',Sysinfo::getSysInfos());
			$this->display();
		}
		function baseset(){
			$stats=isset($_GET["stats"]) ? $_GET["stats"] : null;
			$mess=isset($_GET["mess"]) ? base64_decode($_GET["mess"]) : "水印一般为网站LOGO图片.";		
			$this->mess($mess, $stats); 
			$this->assign("varList",BaseSet::getSet());
			$this->display();
		}
		function set(){
			if(BaseSet::writeConfig($_POST)){
				$this->redirect('baseset','stats/1/mess/'.base64_encode('设置成功'));
			}else{
				$this->redirect('baseset','stats/0/mess/'.base64_encode('设置失败，请检查'));
			}
		}
		function upcache(){
			$cachedir=PROJECT_PATH."runtime/cache/";
			deldir($cachedir);
			$tmpdir=PROJECT_PATH."public/uploads/tmp/";
			deldir($tmpdir);
			if(!file_exists($cachedir)) {
				$this->mess("更新所有缓存成功！", 1); 
			}else{
				$this->mess("更新缓存失败！", 0);
			}
			$this->display();
		}
 		function menu(){
			if(isset($_GET["mess"])){
				if($_GET["stats"]==1)
					$this->mess(base64_decode($_GET["mess"]),true);
				else
					$this->mess(base64_decode($_GET["mess"]),false);
			}else{
				$this->mess("根据网站要求，对现有导航栏目进行调整.");			
			}
			$menu = D('menu');
			$menu = $menu->field('id,title,pid,concat(path,"-",id) as abspath,target,url,display,ord')->order("abspath,id asc")->select();
			$this->assign('menu',$menu);
			$this->display();
		}
		function menuadd(){
			$this->mess("根据网站要求，对现有导航栏目进行调整.");
			$menu = D('menu');
			$menucat = $menu->field('id,title')->order('ord asc')->where(array('pid'=>0))->select();
			$this->assign('menucat',$menucat);
			$this->display();
		}
		function insert(){
			$menu = D('menu');
			if($_POST["pid"] == "0"){
				$_POST['path'] = "0";
			}else{
				$data = $menu->field("path")->find($_POST["pid"]);
				$_POST['path'] = $data["path"]."-".$_POST["pid"];
			}
			if($menu->insert($_POST,1,1)){
				$this->mess("导航【<b>{$_POST["title"]}</b>】添加成功，可以继续添加",true);
			}else{
				$this->assign("post",$_POST);
				$this->mess($menu->getMsg(),false);
			}
			if(isset($_POST["jz"])){
				$this->assign("selected",$_POST["pid"]);
				$this->assign("jz","checked");
				$menucat = $menu->field('id,title')->order('ord asc')->where(array('pid'=>0))->select();
				$this->assign('menucat',$menucat);				
			}else{
				$menucat = $menu->field('id,title')->order('ord asc')->where(array('pid'=>0))->select();
				$this->assign('menucat',$menucat);				
			}
			$this->display(menuadd);
		}		
		function menuupdate(){
			$menu = D('menu');
			if($menu->update($_POST)){
				$this->redirect('menu','mess/'.base64_encode('导航修改成功').'/stats/1');
			}else{
				if($mess=="")
					$mess="提示：您没有做出任何修改！";
				$this->redirect('menu','mess/'.base64_encode($mess).'/stats/0');
			}
			$this->display("menu");
		}
		function menudel(){
			$menu = D('menu');
			if($menu->total(array("pid"=>$_GET["id"])) > 0){
				$this->redirect('menu','mess/'.base64_encode('请先删除当前导航下的子菜单').'/stats/0');
			}else{
				if($menu->delete($_GET['id'])){
					$this->redirect('menu','mess/'.base64_encode('导航删除成功').'/stats/1');
				}else{
					$this->redirect('menu','mess/'.base64_encode('导航删除失败').'/stats/0');
				}
			}
		}
		function status(){
			debug();
			$menu = D("menu");
			//接收由AJAX传递的参数及值
			$update = array("id"=>$_GET["id"],$_GET["s"]=>$_GET["val"]);
			if($menu->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		} 		
	}