<?php
	class CatModel extends Dpdo {
		function formselect($name="pid",$value="0",$root="根分类",$change=""){
			$data = $this->field('id,pid,title,concat(path,"-",id) as abspath')->order("abspath,id asc")->select();
			$html = '<select '.$change.' id="sel" name="'.$name.'" style="color:#197AB6;">';
				$html .= '<option value="0">'.$root.'</option>';
				foreach($data as $row){
				$class = ($i++%2==0) ? '#F3F3F3' : '#FFF';
					if($value == $row["id"]){
						$html .= '<option selected value="'.$row["id"].'">';
					}else{
						$html .= '<option value="'.$row["id"].'" style="background-color:'.$class.';">';
					}
					$num = count(explode("-",$row["abspath"]))-2;
					$space = str_repeat("|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$num);
					$html .= $space."|-".$row["title"];
					$html .= '</option>';
				}
			$html .= '</select>';
			return $html;
		}
		function getPathById($id){
			if($id==0){
				return "0";
			}else{
				$row = $this->field("path")->find($id);
				return $row["path"];
			}
		}
		function catMod($post){
			$ppath = $this->getPathById($post["pid"]);//新节点
			$xpath = $this->getPathById($post["id"]);//原节点
			if($post["pid"]==0)
				$post["path"] = 0;
			else
				$post["path"]= $ppath.'-'.$post["pid"];//新父节点
			if(in_array($_POST["id"],explode("-",$post["path"]))){
				$this->setMsg("不能将【{$post['title']}】移动至自己或自己的子类中");
				return false;
			}
			$srcpath = $xpath.'-'.$post["id"];//查找路径
			$cpath = $post["path"].'-'.$post["id"];//替换路径
			$this->where(array("path"=>"%{$srcpath}%"))->update("path=replace(path,'{$srcpath}','{$cpath}')");
			if($this->update($post,1,1)){
				return true;
			}else{
				$this->setMsg("修改{$post['title']}失败");
				return false;
			}
		}
	}