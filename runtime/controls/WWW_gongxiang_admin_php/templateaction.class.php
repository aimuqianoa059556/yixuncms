<?php
	class TemplateAction extends Common {
		//模板列表
		function index(){
			$this->mess("此版本仅支持对默认模板进行编辑.<br/>请确认您具备一定的代码编辑能力再进行模板编辑.");
			$this->templatelist();
			$this->display();
		}
		
		function template(){
			$this->mess("如果您不具备代码编辑能力，请谨慎操作以免造成页面混乱.");
			$filename=$_POST['path'];
			$file = htmlspecialchars(file_get_contents($filename));
			$this->assign('file',$file);
			$this->assign('path',$filename);
			$this->display();
		}
		
		function update(){
			$this->mess("模板修改成功.",true);
			$content = str_replace(array("\"","'"),array("&quot;","&#039;"),stripslashes($_POST['content']));
			file_put_contents($_POST['path'], str_replace(array("&quot;","&#039;"),array("\"","'"),stripslashes($_POST['content'])));
			$this->templatelist();
			$this->display('index');
		}
		
		private function list_dir($dir){
			$result = array();
			if (is_dir($dir)){
				$file_dir = scandir($dir);//返回目录列表中的文件及目录名称
				foreach($file_dir as $file){
					if ($file == '.' || $file == '..' || $file == 'resource'){
						continue;
					}
					elseif (is_dir($dir.$file)){
						$result = array_merge($result, $this->list_dir($dir.$file.'/'));
					}
					else{
						array_push($result, $dir.$file);
					}
				}
			}
			return $result;
		}
		
		private function templatelist(){
			$src=PROJECT_PATH.'home/views/default/';
			$cc=$this->list_dir($src);
			$html='<ul class="viewmess">';
			$html.='<li class="dark-row">';
			$html.='<span class="list_width width_font" style="width:30px;">编号</span>';
			$html.='<span class="list_width width_font" style="width:360px;">模板文件</span>';
			$html.='<span class="list_width width_font">操&nbsp;&nbsp;作</span>';
			$html.='</li>';
			for($i=0;$i<count($cc);$i++){
				$filename = array_pop(explode(".",basename($cc[$i])));
				if($filename == 'html'){
					$html.='<li>';
					$html.='<form action='.B_URL.'/template method="post">';
					$html.='<input type="hidden" name="path" value='.$cc[$i].'>';
					$html.='<span class="list_width" style="width:30px;text-align:center;">'.$i.'</span>';
					$html.='<span class="list_width width_font" style="width:360px">'.basename($cc[$i]).'</span>';
					$html.='<span class="list_width"><input class="text-box" style="background-color:#fff;" type="submit" value="编辑模板"/></span>';
					$html.='</form>';
					$html.='</li>';
				}
			}
			$html.='<li>&nbsp;&nbsp;编号说明：0-文章内容页；1-文章列表页；3-企业介绍单页；4-留言页；5-首页；6-招聘页；7-公告详情页；8-展示列表页；9-展示详情页；10-图集列表页；11-页脚；12-页头；13-消息提示页</li>';
			$html.='</ul>';
			$this->assign('templatelist',$html);
		}
	}