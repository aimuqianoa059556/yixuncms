<?php
	class StyleAction extends Common {
		//模板信息
		function index(){
			$this->mess('本网站已成功安装的模板');
			global $styleList;
			$this->assign('style',$styleList);
			$this->display();
		}
		//加载模板界面
		function add(){
			$this->mess('提示：带<font class="red_font"> * </font>的项目为必填信息.<br>安装前请先确认您已经将模板上传至FTP空间.');
			$this->display();
		}
		//加载模板
		function set(){
			global $styleList;
			$styleen = $_POST['styleen'];
			$stylename = $_POST['stylename'];
			$stylefile=PROJECT_PATH."home/views/".$styleen;
			if(!preg_match('/^\w+$/i', $styleen)){
				$mess = "请正确填写模板标识";
				$v = false;				
			}else if(!preg_match('/^\S+$/i', $stylename)){
				$mess = "模板名称不能为空";
				$v = false;				
			}else if(array_key_exists($styleen,$styleList)){
				$mess = "标识为【{$_POST['styleen']}】的模板已经安装过了";
				$v = false;
			}else if(!file_exists($stylefile)){
				$mess = "请先将标识为【{$_POST['styleen']}】的模板上传再进行安装";
				$v = false;
			}else{
				$post[$styleen]=$stylename;
				$merge=array_merge($styleList,$post);
				$arr="";
				while(list($key,$value) = each($merge)){
					$arr .= "\"".$key."\"=>\"".$value."\",";
				}
				$rep = "styleList = array(".rtrim($arr,",").");";
				$confile=PROJECT_PATH."config.inc.php";
				$configText = file_get_contents($confile);
				$reg = "/styleList\s*=\s*.+?;/i";
				file_put_contents($confile, preg_replace($reg, $rep, $configText));
				$mess = "标识为{$_POST['styleen']}的模板安装成功，您可在基本设置中进行模板切换设置.";
				$v = true;
			}
			$this->mess($mess,$v);
			$this->assign('post',$_POST);
			$this->display("add");
		}
	}