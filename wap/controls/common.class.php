<?php
	class Common extends Action {
		function init(){
		if(!file_exists("./runtime/install.lock")){
			header("Location:".B_ROOT."/install/index.php");
		}
		}		
	}