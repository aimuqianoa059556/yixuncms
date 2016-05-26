<?php
	class PhcolumnModel extends Dpdo {
		function callid(){
			$phcol = $this->field('id')->where(array("callid"=>1))->select();
 			for($i=0;$i<count($phcol);$i++){
				$where[] = $phcol[$i]['id'];
			}
			return $where;
		}
		function callid2(){
			$phcol = $this->field('id')->where(array("callid"=>2))->select();
 			for($i=0;$i<count($phcol);$i++){
				$where[] = $phcol[$i]['id'];
			}
			return $where;
		}		
	}