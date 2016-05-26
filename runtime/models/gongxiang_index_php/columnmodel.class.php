<?php
	class ColumnModel extends Dpdo {
		function callid(){
			$artcol = $this->field('id,pid')->where(array("callid"=>1))->select();
 			for($i=0;$i<count($artcol);$i++){
				$where[] = $artcol[$i]['pid'];
			}
			return $where;
		}	
	}