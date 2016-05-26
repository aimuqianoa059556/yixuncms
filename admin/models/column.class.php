<?php
	class Column extends Cat{
		function parsetree(){
			$option = $this->field('id,pid,title,concat(path,"-",id) as abspath,ord,display,callid')->order("abspath,id asc")->select();
			$html = "";
			$i = 0;
			foreach($option as $value){
				$class = ($i++%2==0) ? 'light-row' : 'dark-row';
				$html .= '<li class="'.$class.'">';
					$input = '<input type="text" name="ord[]" value="'.$value["ord"].'" style="width:20px;height:20px;" />&nbsp;';
					$input .= '<input type="hidden" name="id[]" value="'.$value["id"].'" />';
				if($value["pid"]=="0"){
					$columntitle = "<strong>".$value["title"]."</strong>";
				}else{
					$columntitle = $value["title"];
				}
				$title = $input.str_repeat('|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',count(explode("-",$value["abspath"]))-2)."|--".$columntitle."&nbsp;&nbsp;<font color='red'>(&nbsp;ID:".$value["id"]."&nbsp;)</font>";
				$html .= '<span class="col_width2">'.$title.'</span>';
				$html .= '【<a href="'.B_URL.'/mod/id/'.$value["id"].'">修改</a>】';
				$html .= '【<a href="'.B_URL.'/del/id/'.$value["id"].'" onclick=\'return confirm("确定要删除【'.$value['title'].'】及子分类吗？")\'>删除</a>】';
				if($value["display"]=="1")
					$html .= '【<span style="cursor:pointer;" onclick="dis(this,'.$value['id'].')">显示</span>】';
				else
					$html .= '【<span style="cursor:pointer;background:#ccc;" onclick="dis(this,'.$value['id'].')">隐藏</span>】';
					
				$html .= '</li>';
			}
			return $html;
		}
	}