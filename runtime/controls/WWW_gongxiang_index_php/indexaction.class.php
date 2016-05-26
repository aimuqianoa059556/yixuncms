<?php
	class IndexAction extends Common {
		function index(){
 		if(!$this->isCached()) {
			$phcolumn = D('phcolumn');
			$photo = D('photo');
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
			$this->assign("icp",ICP);
			$this->assign("copy",COPY);
			$time=strtotime(date("Y-m-d"))+60*60*24;//当前时间
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
			$ad = $advert->where(array('display'=>1,'wz'=>1))->order('ord asc')->select();
			$this->assign('ad',$ad);
			
			//幻灯
			$play=D("play")->field('id,aid,pic,title')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(6)->select();
			$this->assign("play",$play);			
			
			//首页公司概况
			$fun = D("fun")->where(array("id"=>2,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("about",$fun["content"]);
			}else{
				$this->assign("about","管理员已取消显示");
			}

			//首页联系方式
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
			
			//分配产品
			$photo = D('photo'); 
			$this->assign("photo",$photo->field('id,title,summary,pic,posttime')->order('id desc')->limit(15)->select(array("audit"=>1,"recommend"=>1,'pid'=>$phcolumn->callid())));		
			$this->assign("project",$photo->field('id,title,summary,pic,posttime')->order('id desc')->limit(9)->select(array("audit"=>1,"recommend"=>1,'pid'=>$phcolumn->callid2())));
			
			//栏目及文章标题
			$column=D("column");
			$data=$column->field("id,title,description")->where(array("pid"=>$column->callid(),"callid"=>1))->order("ord asc")->limit(HOME_COLUMN_SIZE)
				->r_select(
					array("article",'id,title,summary,posttime', 'pid', array('art','id desc',HOME_COLUMNPAGE_SIZE,"audit=1 and recommend=1")),
					array("image",'name as imgname','id','picid')
					);
			$this->assign("cols",$data);
			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());	
		}	 
			$this->display();
		}
		
		function about(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
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
			$ad = $advert->where(array('display'=>1,'wz'=>2))->order('ord asc')->select();
			$this->assign('ad',$ad);

			//分配单页栏目
			$acolumn = D('acolumn');
			$upage=$acolumn->field('id,title,description')->order('ord asc')->where(array("audit"=>1))->r_select(array('about','id,title','pid',array('acol','ord asc','',"audit=1")));
			$this->assign('upage',$upage);
			
			//分配单页信息
			$about = D("about");
			$aboutshow = $about->field('id,pid,title,content')->where(array("id"=>$_GET["id"],"audit"=>1))->find();
			$this->assign("colwz",$acolumn->field("id,title")->where(array("id"=>$aboutshow['pid']))->find());
			if(!$aboutshow){
				$this->error("页面不存在或未审核",3,"index/index");
			}else{
				$aboutshow["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $aboutshow["content"]);
				$this->assign("aboutshow",$aboutshow);
			}
			
			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}
			
			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
		
		function job(){
			if(!$this->isCached()) {
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
			$this->assign("icp",ICP);
			$this->assign("copy",COPY);
			$time=strtotime(date("Y-m-d"))+60*60*24;//当前时间
			
			//公告
			$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
			$this->assign("notice", $notice);
			
			//导航
			$menu = D('menu');
			$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
			$this->assign('globallink',$globallink);
			$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));
			
			//分配单页栏目
			$acolumn = D('acolumn');
			$upage=$acolumn->field('id,title')->order('ord asc')->where(array("audit"=>1))->r_select(array('about','id,title','pid',array('acol','ord asc','',"audit=1")));
			$this->assign('upage',$upage);
			
			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}
			
			//焦点图
			$banner = D('banner');
			$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
			$this->assign('ban',$ban);
			
			//招聘
			$job=D("job")->where('"'.$time.'" > starttime and "'.$time.'" < endtime or endtime="0"')->select();
			$this->assign("jobtotal",D("job")->total('"'.$time.'" > starttime and "'.$time.'" < endtime or endtime="0"'));
			$this->assign("jobs", $job);			
			
			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display();
		}
		
		function board(){
			if(!$this->isCached()) {
			$phcolumn = D('phcolumn');
			$photo = D('photo');
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
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
			
			$this->assign("abouts",D('about')->field("id,title")->where(array("audit"=>1))->order("ord asc")->select());

			//分配单页栏目
			$acolumn = D('acolumn');
			$upage=$acolumn->field('id,title')->order('ord asc')->where(array("audit"=>1))->r_select(array('about','id,title','pid',array('acol','ord asc','',"audit=1")));
			$this->assign('upage',$upage);
			
			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}
			
			//焦点图
			$banner = D('banner');
			$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
			$this->assign('ban',$ban);		
			
			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display();
		}
		
		function boardinsert(){
			$board = D('board');
			$_POST['posttime'] = time();
			if($board->insert($_POST,1,1)){
				$this->success('提交成功，我们会尽快与您联系',1,'index');
			}else{
				$this->error($board->getMsg(),3,'index/board');
			}
		}
		
		//验证码
		function code(){
			ob_clean();
			echo new Vcode(50,18);
		}
		
		function notice(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
			$this->assign("icp",ICP);
			$this->assign("copy",COPY);
			$time=strtotime(date("Y-m-d"))+60*60*24;//当前时间
			
			//导航
			$menu = D('menu');
			$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
			$this->assign('globallink',$globallink);
			$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));
			
			//焦点图
			$banner = D('banner');
			$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
			$this->assign('ban',$ban);
			
			$n=D("notice");
			$notice=$n->where(array("id"=>$_GET["id"], "display"=>'1'))->find();
			if(!($notice and $notice["starttime"] < $time and ($notice["endtime"] > $time or $notice["endtime"]=='0'))){
				$this->error("访问公告失败", 3, "index/index");
			}
			$notice["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $notice["content"]);
			$this->assign("notice", $notice);			
			
			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}

		function search(){
			$this->caching=0;
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
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
			
			//栏目分类
			$column=D("column");
 			$artcol = $column->field('id,title')->order("ord asc")->where(array("pid"=>0,"display"=>1))->r_select(array('column','id,title','pid',array('scolumn','ord asc','',"display=1")));			
			$this->assign('artcol',$artcol); 

			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}

			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);			
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			

			$article=D("article");			
			$sers=!empty($_POST["search"]) ? $_POST : $_GET;
			$args="search/{$sers["search"]}";
			$where=array("title"=>"%{$sers["search"]}%","audit"=>"1");
			$total=$article->where($where)->total();
			$page=new Page($total, ARTICLE_PAGE_SIZE, $args);
			$this->assign("searchs", $article->field('id,title,posttime')->where($where)->limit($page->limit)->select());
			$this->assign("total", $total);
			$this->assign("search", $sers["search"]);
			$this->assign("fpage", $page->fpage(4,5,6,0));
			$this->display();		
		}
	}