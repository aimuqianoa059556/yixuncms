<?php
	class FlinkAction extends Common {
		//友情列表
		function index(){
			$flink = D('flink');
			$this->mess("共有 <b class='red_font'>{$flink->total()}</b> 条友情链接，可通过输入整数改变友情链接在首页中的显示顺序，从小到大升序排列<br>黄色记录为不显示");
			if($_GET['display']=="off")
				$where = array("audit"=>0);
			else if($_GET['display']=="on")
				$where = array("audit"=>1);
			else
				$where = "";
			$links = $flink->field('id,ord,webname,url,logo,dtime,rname,audit')->order('ord,id asc')->select($where);
			$this->assign("links",$links);
			$this->display();
		}
		//添加界面
		function add(){
			$this->mess('带 <span class="red_font">*</span> 号项为必填项，请注意格式正确！');
			$this->display();
		}
		//存入操作
		function insert(){
			$flink = D('flink');
			$_POST['dtime'] = time();
			$logo = $flink->downlogo($_POST['logo']);//下载LOGO并返回LOGO名称
			if($logo){
				$_POST['logo'] = $logo;
				if($flink->insert($_POST,1,1)){
					$this->mess('友情链接添加成功',true);
				}else{
					$this->mess($flink->getMsg(),false);
					$this->assign('post',$_POST);
				}
			}else{
				$this->mess('LOGO下载失败，请检查URL地址是否正确',false);
				$this->assign('post',$_POST);
			}
			$this->display('add');
		}
		//修改界面
		function mod(){
			$flink = D('flink');
			$this->mess("提示：带 <span class='red_font'>*</span> 项为必填信息.如需更改LOGO标志，LOGO选项为链接网站的LOGO图片地址");
			$this->assign("post",$flink->find($_GET['id']));
			$this->display();
		}
		//修改操作
		function update(){
 			$flink = D('flink');
			if(isset($_POST['logoc'])){
				$logo = $flink->downlogo($_POST['logoc']);
				$srclogo = PROJECT_PATH."public/uploads/logos/".$_POST["logo"];
				if(file_exists($srclogo))
					unlink($srclogo);
			}else{
				$logo = $_POST["logo"];
			}
			if($logo){
				$_POST["logo"] = $logo;
				if($flink->update($_POST,1,1)){
					$this->redirect("index");
				}else{
					$mess = $flink->getMsg();
					if($mess == "")
						$mess = "您未做任何修改";
					$this->mess($mess,false);
					$this->assign("post",$_POST);
				}
			}else{
				$this->mess("LOGO下载失败，请检查URL地址是否正确",false);
				$this->assign("post",$_POST);
			}
			$this->display("mod"); 
		}
		//删除链接
		function del(){
			$flink = D('flink');
			$row = $flink->field('logo')->find($_GET['id']);
			if($flink->delete($_GET['id'])){
				$logo = PROJECT_PATH."/public/uploads/logos/".$row['logo'];
				if(file_exists($logo))
					unlink($logo);
				$this->redirect("index");
			}else{
				$this->error("友情链接删除失败",3,"index");
			}
		}
		//排序链接
		function ord(){
			$flink = D('flink');
			for($i=0;$i<count($_POST['ids']);$i++){
				$flink->update(array("id"=>$_POST['ids'][$i],"ord"=>$_POST['ord'][$i]));
				//$flink->where(array("id"=>$_POST['ids'][$i]))->update("ord=".$_POST["ord"][$i]);
			}
			$this->redirect("index");
		}
	}