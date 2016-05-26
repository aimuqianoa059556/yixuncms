<?php 
	class Upgrade{
		function index(){
			$this->mess("此功能主要用于YIXUNCMS系统升级时对数据表的修改，如果您没有编程经验请在技术人员指导下操作.");
			$this->display();
		}
		function setupsql(){
			$con = $_POST['sql'];
			if(empty($con)){
				$this->mess('请输入SQL语句',false);
			}else{
				$this->mess("共享版用户不享受维护与升级服务，此操作无法进行.",false);		
			}
			$this->display('index');
		}
		function tabname(){
			$this->mess("以下是YIXUNCMS系统所使用的所有数据表，一旦删除可能造成系统无法正常运行，请谨慎操作.");
			$table=D()->query('show tables','select');
			$this->assign('table',$table);
			$this->assign('dbname','Tables_in_'.DBNAME);
			$this->display();
		}
		function deltable(){
			$this->mess("共享版用户不享受维护与升级服务，此操作无法进行.",false);
			$table=D()->query('show tables','select');
			$this->assign('table',$table);
			$this->assign('dbname','Tables_in_'.DBNAME);
			$this->display('tabname'); 
		}
		function describe(){
			$this->mess("<font color='red'>{$_GET['tabname']}</font>数据表的结构信息.");
			$table=D()->query('describe '.$_GET['tabname'],'select');
			$this->assign('describe',$table);
			$this->display(); 			
		}
	}
?>