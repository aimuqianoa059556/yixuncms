<?php
	class Photo{
		function index(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
			$phcolumn = D("phcolumn");
			$photo= D("photo");	
			$pid=$_GET["pid"];
			$current = $phcolumn->where(array("id"=>$pid,"display"=>1))->find();
			if(!$current){
				$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
			}
			$this->assign("appname", APP_NAME);
			$this->assign("keywords",KEYWORD);
			$this->assign("description",DESCRIPTION);
			$this->assign("icp",ICP);
			$this->assign("copy",COPY);
			
			//公告
			$time=strtotime(date("Y-m-d"))+60*60*24;
			$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
			$this->assign("notice", $notice);

			//导航
			$menu = D('menu');
			$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
			$this->assign('globallink',$globallink);
			$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));			
			
			//焦点图
			$banner = D('banner');
			$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
			$this->assign('ban',$ban);
			
			//广告图
			$advert = D('advert');
			$ad = $advert->where(array('display'=>1,'wz'=>5))->order('ord asc')->select();
			$this->assign('ad',$ad);
			
			//分类
 			$phcol = $phcolumn->field('id,title,description')->order("ord asc")->where(array("pid"=>0,"display"=>1))->r_select(array('phcolumn','id,title','pid',array('scolumn','ord asc','',"display=1")));			
			$this->assign('phc',$phcol); 
			
			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}

			//当前位置
			$locs=$phcolumn->field('id,title,description')->where(str_replace('-',',', $current["path"]).','.$_GET["pid"])->order('path asc')->select();
			$this->assign("locs", $locs);
			
			if($current["audit"]==1){
				$wherelist=array("pid"=>$pid, "audit"=>1);
				$twhere=array("pid"=>$pid, "audit"=>1,'top'=>1);
			}else{
				$wherelist=array("pid"=>$pid);
				$twhere=array("pid"=>$pid, "audit"=>1,'top'=>1);
			}		
			$this->assign("tphoto", $photo->field('id,title,pic')->where($twhere)->order("id desc")->limit(6)->select());
			$page=new Page($photo->where($wherelist)->total(), PHTURE_PAGE_SIZE, "pid/{$_GET["pid"]}");
			$page->set("head","个展示");
			$this->assign("photos", $photo->field('id,title,summary,pic,top')->where($wherelist)->order("id desc")->limit($page->limit)->select());
			$this->assign("fpage", $page->fpage(4,5,6,0,3));

			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
		
		function photoshow(){
			$photo= D("photo");	
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				$phcolumn = D("phcolumn");
				$this->assign("appname", APP_NAME);
				$this->assign("keywords",KEYWORD);
				$this->assign("description",DESCRIPTION);
				$this->assign("icp",ICP);
				$this->assign("copy",COPY);	
				
				//公告
				$time=strtotime(date("Y-m-d"))+60*60*24;
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("notice", $notice);
				
				//导航
				$menu = D('menu');
				$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
				$this->assign('globallink',$globallink);
				$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));

				//焦点图
				$banner = D('banner');
				$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
				$this->assign('ban',$ban);
				
				//广告图
				$advert = D('advert');
				$ad = $advert->where(array('display'=>1,'wz'=>6))->order('ord asc')->select();
				$this->assign('ad',$ad);
			
				//分类
				$phcol = $phcolumn->field('id,title,description')->order("ord asc")->where(array("pid"=>0,"display"=>1))->r_select(array('phcolumn','id,title','pid',array('scolumn','id asc','',"display=1")));		
				$this->assign('phc',$phcol); 
				
				//联系方式
				$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
				if($fun){
					$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
					$this->assign("contact",$fun["content"]);
				}else{
					$this->assign("contact","管理员已取消显示");
				}

				//获取产品
				$pdata=$photo->where(array("id"=>$_GET["id"]))->find();
				if(!$pdata){
					$this->error("你现在访问的产品不存在或没有审核!", 3, "index/index");
				}
				
				$columns=$phcolumn->find($pdata["pid"]);
				
				//当前位置
				$locs=$phcolumn->field('id,title,description')->where(str_replace('-',',', $columns["path"]).','.$columns["id"])->order('path asc')->select();
				$this->assign("locs", $locs);
				
				//将产品分配到模板中
				$pdata["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $pdata["content"]);
				$this->assign("photo", $pdata);

				//分配插件
				$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
				$this->assign('activex',$activex);
				
				//友情链接
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			}
			$this->assign('views',$photo->field('id,views')->find($_GET['id']));
			$photo->where(array("id"=>$_GET["id"]))->update("views=views+1");
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
		
		function prcture(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				$this->assign("appname", APP_NAME);
				$this->assign("keywords",KEYWORD);
				$this->assign("description",DESCRIPTION);
				$this->assign("icp",ICP);
				$this->assign("copy",COPY);
				$time=strtotime(date("Y-m-d"))+60*60*24;
				
				$album = D('album');
				$pid=$_GET["pid"];
				$current = $album->where(array("id"=>$pid,"display"=>1))->find();
				if(!$current){
					$this->error("图集不存在或已经被关闭!", 3, "index/index");
				}
				
				//公告
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("notice", $notice);
				
				//当前位置
				$locs=$album->field('id,title')->find($_GET['pid']);
				$this->assign("locs", $locs);
				//分类
				$this->assign('album',$album->field('id,title,description')->where(array('display'=>1))->select());
				
				//导航
				$menu = D('menu');
				$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
				$this->assign('globallink',$globallink);
				$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));

				//焦点图
				$banner = D('banner');
				$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
				$this->assign('ban',$ban);
				
				//联系方式
				$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
				if($fun){
					$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
					$this->assign("contact",$fun["content"]);
				}else{
					$this->assign("contact","管理员已取消显示");
				}
				
				//公告
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("notice", $notice);
								
				$image= D("image");	
				$page=new Page($image->where(array('pid'=>$_GET['pid']))->total(), 6, "pid/{$_GET["pid"]}");
				$page->set("head","张图片");				
				$photo = $image->field('id,name,title,thumb')->order('id desc')->limit($page->limit)->where(array('pid'=>$_GET['pid']))->select();
				$this->assign("photos", $photo);
				$this->assign("fpage", $page->fpage(4,5,6,0,3));
				
				//分配插件
				$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
				$this->assign('activex',$activex);
				
				//友情链接
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
	}