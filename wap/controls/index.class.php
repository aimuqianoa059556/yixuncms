<?php
	class Index {
		function index(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			//焦点图
			$banner = D('wappic');
			$ban = $banner->order('ord asc')->select();
			$this->assign('ban',$ban);
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(NOTICLE_PAGE_SIZE)->select();
			$this->assign("notice", $notice);
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());
			$this->display();
		}
		
		function notice(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());			
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$n=D("notice");
			$notice=$n->where(array("id"=>$_GET["id"], "display"=>'1'))->find();
			if(!($notice and $notice["starttime"] < $time and ($notice["endtime"] > $time or $notice["endtime"]=='0'))){
				$this->error("访问公告失败", 3, "index/index");
			}
			$notice["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $notice["content"]);
			$this->assign("notice", $notice);		
			$this->display();
		}

		//公司简介
		function about(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			//焦点图
			$banner = D('wappic');
			$ban = $banner->order('ord asc')->select();
			$this->assign('ban',$ban);
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(NOTICLE_PAGE_SIZE)->select();
			$this->assign("notice", $notice);
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());
			
			$about = D("about");			
			$abouts = $about->field('id,title,content')->where(array("audit"=>1))->select();
			$pattern="/\<img.+?style=\"(.+?)\"\s*\/\>/i";
			foreach($abouts as $row){
				$row['content'] = str_replace(array("&quot;", "&#039;"),array("\"", "'"), $row['content']);
				if(preg_match_all($pattern,$row['content'],$arr)){
					$size = "width:100%";
					$row["content"] = str_replace($arr[1],$size,$row['content']);
				}
				$c[]=$row;
			}
			$this->assign("about",$c); 
			$this->display();
		}
		
		//公司动态
		function article(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			//焦点图
			$banner = D('wappic');
			$ban = $banner->order('ord asc')->select();
			$this->assign('ban',$ban);
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(NOTICLE_PAGE_SIZE)->select();
			$this->assign("notice", $notice);
			
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());
			
			$article = D('article');
			$this->assign("total",$article->total());
			$this->assign("artsize",NEWS_PAGE_SIZE);
			$this->display();
		}
		
		function artlist(){
			$article = D('article');
			$this->assign("data",$article->field('id,title')->limit($_GET['num'])->select());
			$this->display(); 
		}
		
		function artshow(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			//焦点图
			$banner = D('wappic');
			$ban = $banner->order('ord asc')->select();
			$this->assign('ban',$ban);
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(NOTICLE_PAGE_SIZE)->select();
			$this->assign("notice", $notice);
			
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());
			
			$article = D('article');
			$art = $article->field('id,title,content')->find($_GET['id']);
 			$pattern="/\<img.+?style=\"(.+?)\"\s*\/\>/i";
			$art["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $art["content"]);
			if(preg_match_all($pattern,$art["content"],$arr)){
				$art["content"] = str_replace($arr[1],"width:100%",$art["content"]);
			} 				
			$this->assign("art",$art);
			$this->display();
		}
		
		function board(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(NOTICLE_PAGE_SIZE)->select();
			$this->assign("notice", $notice);
			
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());
			
			$this->assign('mess',base64_decode($_GET['mess']));
			$this->display();
		}
		
		function boardinsert(){
			$board = D('board');
			if($board->insert($_POST,1,1)){
				$mess="留言成功";
			}else{
				$mess="留言失败";
			}
			$this->redirect('board','mess/'.base64_encode($mess));
		}
		
		function product(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);

			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());			
			
			$photo = D('photo');
			$phcolumn = D('phcolumn');
			$phc = $phcolumn->field('id')->where(array("callid"=>1))->select();
			for($i=0;$i<count($phc);$i++){
				$where[]=$phc[$i]['id'];
			}
			$this->assign("total",$photo->where(array('recommend'=>1,'pid'=>$where))->total());
			$this->assign("psize",WAPOTO_SIZE);
			$this->display();
		}
		
		function prolist(){
			$photo = D('photo');
			$phcolumn = D('phcolumn');
			$phc = $phcolumn->field('id')->where(array("callid"=>1))->select();
			for($i=0;$i<count($phc);$i++){
				$where[]=$phc[$i]['id'];
			}
			$this->assign("pro", $photo->field('id,title,pic')->where(array('recommend'=>1,'pid'=>$where))->limit($_GET['num'])->order("id desc")->select());
			$this->display();
		}
		
		function productshow(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());			
			
			$photo = D('photo');
			$pro=$photo->field('id,pic,content')->find($_GET['id']);
			$pattern="/\<img.+?style=\"(.+?)\"\s*\/\>/i";			
			$pro["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $pro["content"]);
			if(preg_match_all($pattern,$pro["content"],$arr)){
				$pro["content"] = str_replace($arr[1],"width:100%",$pro["content"]);
			} 
			$this->assign("pro",$pro);
			$this->display();
		}
		
		function job(){
			$this->assign("appname", APP_NAME);
			$this->assign("wapcopy", WAPCOPY);
			
			//菜单
			$menu = D('wapmenu');
			$this->assign('menu',$menu->where(array('display'=>1))->order('ord asc')->select());

			//招聘
			$job=D("job")->where('"'.$time.'" > starttime and "'.$time.'" < endtime or endtime="0"')->select();
			$this->assign("jobtotal",D("job")->total('"'.$time.'" > starttime and "'.$time.'" < endtime or endtime="0"'));
			$this->assign("jobs", $job);
			$this->display();
		}
	}