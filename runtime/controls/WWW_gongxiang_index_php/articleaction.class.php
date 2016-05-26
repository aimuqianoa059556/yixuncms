<?php
	class ArticleAction extends Common {
		function index(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
			$column=D("column");
			$article=D("article");
			$current=$column->where(array("id"=>$_GET["pid"], "display"=>1))->find();
			if(!$current){
				$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
			}
			
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
			$ad = $advert->where(array('display'=>1,'wz'=>3))->order('ord asc')->select();
			$this->assign('ad',$ad);
			
			//栏目分类
 			$artcol = $column->field('id,title,description')->order("ord asc")->where(array("pid"=>0,"display"=>1))->r_select(array('column','id,title','pid',array('scolumn','ord asc','',"display=1")));			
			$this->assign('artcol',$artcol); 			

			//联系方式
			$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
			if($fun){
				$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
				$this->assign("contact",$fun["content"]);
			}else{
				$this->assign("contact","管理员已取消显示");
			}
			
			//当前位置
			$locs=$column->field('id,title,description')->where(str_replace('-',',', $current["path"]).','.$_GET["pid"])->order('path asc')->select();
			$this->assign("locs", $locs);
			
			//新闻动态
			if($current["audit"]==1){
				$wherelist=array("pid"=>$_GET["pid"], "audit"=>1);
				$twhere=array("pid"=>$_GET["pid"], "audit"=>1,"allow"=>1);
				$rwhere=array("recommend >"=>0, "audit"=>1, "pid"=>$_GET["pid"]);
			}else{
				$wherelist=array("pid"=>$_GET["pid"]);
				$twhere=array("pid"=>$_GET["pid"], "audit"=>1,"allow"=>1);
				$rwhere=array("recommend >"=>0, "pid"=>$_GET["pid"]);	
			}
			
			$this->assign('toparticle',$article->field('id,title,posttime')->where($twhere)->order('id desc')->limit(3)->select());
			$page=new Page($article->where($wherelist)->total(),ARTICLE_PAGE_SIZE, "pid/{$_GET["pid"]}");
			$page->set("head","条");
			$this->assign("articles", $article->field('id,title,posttime,summary,allow')->where($wherelist)->order("id desc")->limit($page->limit)->select());
			$this->assign("fpage", $page->fpage(4,5,6,0,3));			

			//分配插件
			$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
			$this->assign('activex',$activex);
			
			//友情链接
			$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());			
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
		
		function article(){
			$article=D("article");
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				//导航
				$menu = D('menu');
				$globallink = $menu->field('id,title,url,target')->order('ord asc')->where(array('pid'=>0,'display'=>1))->r_select(array("menu",'id,title,url,target','pid',array('men','ord asc','',"display=1")));
				$this->assign('globallink',$globallink);
				$this->assign('globallinktotal',$menu->total(array('pid'=>0,'display'=>1)));			

				$column=D("column");
				$adata=$article->where(array("id"=>$_GET["aid"],"audit"=>"1"))->find();//获取文章	
				$this->assign("user",D('user')->where(array("id"=>$adata["uid"]))->find());//获取文章作者
				if(!$adata){
					$this->error("你现在访问的文章不存在或没有审核!", 3, "index/index");
				}
				
				//分配文章
				$adata["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $adata["content"]);
				$this->assign("article", $adata);
				
				//焦点图
				$banner = D('banner');
				$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
				$this->assign('ban',$ban);
				
				//广告图
				$advert = D('advert');
				$ad = $advert->where(array('display'=>1,'wz'=>4))->order('ord asc')->select();
				$this->assign('ad',$ad);

				//将网站名称分配到模板中，在标题栏中显示
				$this->assign("appname", $adata["title"]);
				$this->assign("keywords",$adata["keyword"]);
				$this->assign("description", $adata["summary"]);
				$this->assign("icp",ICP);
				$this->assign("copy",COPY);
				
				//公告
				$time=strtotime(date("Y-m-d"))+60*60*24;
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("notice", $notice);

				//栏目分类
				$artcol = $column->field('id,title,description')->order("ord asc")->where(array("pid"=>0,"display"=>1))->r_select(array('column','id,title','pid',array('scolumn','id asc','',"display=1")));			
				$this->assign('artcol',$artcol); 
				
				//联系方式
				$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
				if($fun){
					$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
					$this->assign("contact",$fun["content"]);
				}else{
					$this->assign("contact","管理员已取消显示");
				}				
				
				
				$columns=$column->find($adata["pid"]);
				//当前位置
				$locs=$column->field('id,title,description')->where(str_replace('-',',', $columns["path"]).','.$columns["id"])->order('path asc')->select();
				$this->assign("locs", $locs);	
				
				//上一篇和下一篇	
				if($columns["audit"]==1){
					$prevwhere=array("audit"=>1, "pid"=>$adata["pid"],"id <"=>$_GET["aid"]);
					$nextwhere=array("audit"=>1, "pid"=>$adata["pid"],"id >"=>$_GET["aid"]);
				}else{
					$prevwhere=array("pid"=>$adata["pid"],"id <"=>$_GET["aid"]);
					$nextwhere=array("pid"=>$adata["pid"],"id >"=>$_GET["aid"]);
				}
				$this->assign("prevArticle",$article->field("id, title")->where($prevwhere)->order("id DESC")->find());
				$this->assign("nextArticle", $article->field("id, title")->where($nextwhere)->order("id ASC")->find());	

				//分配插件
				$activex = D('activex')->where(array('audit'=>1))->order('id asc')->select();
				$this->assign('activex',$activex);
				
				//友情链接
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			}
			$this->assign('views',$article->field('id,views')->find($_GET['aid']));
			$article->where(array("id"=>$_GET["aid"]))->update("views=views+1");
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
	}