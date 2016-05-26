<?php
	class Image {
		function index(){
			if(!empty($_GET["pid"])){
				$where=array("pid"=>$_GET["pid"]);
				$pid=$_GET["pid"];
			}else{
				$where="";
				$pid=0;
			}
			if(isset($_GET["mess"]))
				$this->mess(base64_decode($_GET["mess"]), true);
			else
				$this->mess('提示:图集用于公司活动类相片展示，不等同于展示项。');
			$album=D("album");
			$this->assign("select", $album->formselect("pid", $pid, "请选择"));
			$image=D("image");
			$page=new Page($image->total($where),20,"pid/{$pid}");
			$page->set("head", "张图片")
			     ->set("first", "|&lt;")
			     ->set("last", "&gt;|")
			     ->set("next", "&gt;&gt;|")
			     ->set("prev", "|&lt;&lt;");
			$images=$image->field("id,name,thumb")->order("id desc")->limit($page->limit)->select($where);

			$this->assign("images", $images);
			$this->assign("fpage", $page->fpage(0,3,4,5,6));
			$this->assign("pid",$pid);

			$this->display();
			
			
		}
		
		function add(){
			$this->mess('注意: 可以上传的图片格式支持GIF,JPEG和PNG三种,大小不能超过2M.<br>描述为空时系统将自动填写，您可以再行修改。');
			$album=D("album");
			$this->assign("select", $album->formselect("pid", 0, "请选择相册")); 
			$this->display();
		}
		
		function insert(){
			global $pictureSize,$thumbSize;//包含全局变量
			$path=PROJECT_PATH.'public/uploads/prcture';
			$water=PROJECT_PATH.'public/uploads/'.WATER;
			$up = new FileUpload($path);
			$up->set("thumb",array("width"=>800,"height"=>600));
			//选择加水印
			if(isset($_POST["water"])){
				$up->set("watermark",array("water"=>$water,"position"=>POSITION));
			}
			if($up->upload("pic")){
				$image = D("image");
				$name = $up->getFileName();//获取图片名
				if(isset($_POST["thumb"])){
					$img = new Image($path);
					$img->thumb($name,335,230,'th_');
				}
				$_POST["name"]=$name;
				$_POST["title"] = !empty($_POST["title"]) ? $_POST["title"] : "公司图册";
				$id = $image->insert($_POST,1,1);
				$this->mess('图片上传成功',true);
				$this->redirect("index","pid/{$_POST["pid"]}");
			}else{
				$this->mess($up->getErrorMsg(),false);
				$this->assign("thumb",isset($_POST["thumb"]) ? "checked" : "");
				$this->assign("water",isset($_POST["water"]) ? "checked" : "");
				$album = D("album");
				$this->assign("select",$album->formselect("pid",$_POST["pid"],"请选择相册"));
				$this->display("add");
			}
		}
		
		function del(){
			$image=D("image");
			$images=$image->field("name")->select($_POST["id"]);
			if($image->delete($_POST["id"])){
				foreach($images as $v){
					$this->delpic($v['name'],'prcture');
					$this->delpic('th_'.$v['name'],'prcture');
				}
				$this->redirect("index");
			}else{
				$this->error("删除图片失败", 1, "index");
			}
		}
		
		function open(){
			debug(0);
			if(!empty($_GET["pid"])){
				$where=array("pid"=>$_GET["pid"]);
				$pid=$_GET["pid"];
			}else{
				$where="";
				$pid=0;
			}
			$album=D("album");
			$this->assign("select", $album->formselect("pid", $pid, "请选择", "onchange='imglist(\"".B_URL."/open/pid/\"+this.options[this.selectedIndex].value)'"));
			$image=D("image");
			$page=new AjaxPage($image->total($where),6,"pid/{$pid}");
			$page->set("head", "张图片")
			     ->set("first", "|&lt;")
			     ->set("last", "&gt;|")
			     ->set("next", "&gt;&gt;|")
			     ->set("prev", "|&lt;&lt;");
			$images=$image->field("id,name")->order("id desc")->limit($page->limit)->select($where);

			$this->assign("images", $images);
			$this->assign("fpage", $page->fpage(0,1,3,4,5,6,7));
			$this->assign("pid",$pid);
			$this->display();
		}		
	}
