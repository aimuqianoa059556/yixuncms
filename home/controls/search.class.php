<?php
	class Search{
		function index(){
			$this->caching=0;
			$article=D("article");
			$column=D("column");
				$this->assign("appname", APP_NAME.'-'.$current["title"]);
				$this->assign("keywords",$current["title"]);
				$this->assign("description", $current["description"]);
				$this->assign("icp",ICP);
				$this->assign("copy",COPY);
				$time=strtotime(date("Y-m-d"))+60*60*24;//当前时间
			
				//公告
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("ncount", count($notice));
				$this->assign("notice", $notice);				
				
				//焦点图
				$banner = D('banner');
				$ban = $banner->where(array('display'=>1,'ord'=>array(0,1,2,3,4,5)))->order('ord asc')->select();
				$this->assign('ban',$ban);
				
				//栏目分类
				$this->assign('menu',$column->field('id,title')->where(array('display'=>1))->order('ord asc')->select());
			
				//联系方式
				$fun = D("fun")->where(array("id"=>1,"audit"=>1))->find();
				if($fun){
					$fun["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $fun["content"]);
					$this->assign("tel",$fun["content"]);
				}else{
					$this->assign("tel","管理员已取消显示");
				}
			$sers=!empty($_POST["search"]) ? $_POST : $_GET;
			$args="search/{$sers["search"]}";
				$where=array("title"=>"%{$sers["search"]}%", "audit"=>"1");
				$total=$article->where($where)->total();
				$page=new Page($total, ARTICLE_PAGE_SIZE, $args);
				$this->assign("searchs", $article->field('id,title,posttime')->where($where)->limit($page->limit)->select());
				$this->assign("total", $total);
				$this->assign("search", $sers["search"]);
				$this->assign("fpage", $page->fpage(4,5,6,0));
			$this->display();
		}
	}