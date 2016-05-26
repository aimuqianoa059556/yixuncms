<?php
	class Board{
		function index(){
			$article = D("board");
			$page = new Page($article->total($where),ARTICLE_PAGE_SIZE,$pget);
			if(isset($_GET["mess"])){
				if($_GET["stats"]=="1")
					$this->mess(base64_decode($_GET["mess"]).'成功',true);
				else
					$this->mess(base64_decode($_GET["mess"]).'失败',false);
			}else{
				$this->mess("点击留言主题查看详细留言内容 ");
			}
			$arts = $article->order('id desc')
							->limit($page->limit)
							->select();
			$this->assign("arts",$arts);
			$this->assign("fpage",$page->fpage());
			$this->assign("page",$page->page);
			$this->display();
		}
		
		function del(){
			$article = D("board");
			$result = $article->where($_GET["id"])->delete();
			$pget = "/page/{$_GET["page"]}";
			if($result){
				$this->redirect('index','mess/'.base64_encode('留言删除').'/stats/1'.$pget);
			}else{
				$this->redirect('index','mess/'.base64_encode('留言删除').'/stats/0'.$pget);
			}
		}		
		
		function fpro(){
			$article = D("board");
			if(isset($_POST["dels_x"]) && isset($_POST["dels_y"])){
				$result = $article->delete($_POST["id"]);
				$mess = "批量删除";
			}
			$pget = "/page/{$_GET["page"]}";
			if($result){
				$this->redirect('index','mess/'.base64_encode($mess).'/stats/1'.$pget);
			}else{
				$this->redirect('index','mess/'.base64_encode($mess).'/stats/0'.$pget);
			}
		}
		
		function open(){
			$this->caching=0;
			debug(0);
			$draft = D('board');
			$this->assign("bcontent",$draft->field('id,title,address,email,msn,content')->find($_GET['id']));
			$this->display();
		}
	}