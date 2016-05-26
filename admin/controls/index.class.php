<?php
	class Index {
		function index(){
			debug(0);
			$this->display();
		}
		function top(){
			debug(0);
			$this->display();
		}
		
		function menu(){
			debug(0);
			$this->display();
		}
		
		function main(){
			$this->mess('请操作左侧菜单，对本网站的内容进行管理. ');
			$this->assign("sn","");
			$this->display();
		}
		
		function bottom(){
			debug(0);
			$this->display();
		}
		function system(){
			debug(0);
			$this->mess('请操作左侧菜单，对本网站的内容进行管理. ');
			$this->display();			
		}
	}