<?php
	class Wapbaseset{
		static function getwapSet(){
			$content=file_get_contents(PROJECT_PATH."wap.php");
			//$style="/define\(\"TPLSTYLE\"\s*,\s*\"(.+?)\"\);/i";
			//preg_match($style,$content, $arr);
			$style="/define\(\"CSTART\"\s*,\s*\"(.+?)\"\);/i";
			preg_match($style,$content, $brr);
			//global $wapstyleList;
			$varList = array(
					 "noticlePageSize"	=> NOTICLE_PAGE_SIZE,
					 "newsPageSize"	=> NEWS_PAGE_SIZE,	
					 "waphotosize"	=> WAPOTO_SIZE,	
					 "wapcopy"          => WAPCOPY
				 );
			return $varList;
		}

		//==========================================
		// 函数: writeConfig($fileName,$post)
		// 功能: 用于将用户输入的设置信息改写配置文件
		// 参数: fileName是配置文件的名称，和需要设置的内容数组
		// 返回: true或false
		//==========================================
		static function writeConfig($post){
			$confile=PROJECT_PATH."config.inc.php";
			$configText = file_get_contents($confile);
			$reg=array(					
					"/define\(\"NOTICLE_PAGE_SIZE\".+?;/i",		
					"/define\(\"NEWS_PAGE_SIZE\".+?;/i",		
					"/define\(\"WAPOTO_SIZE\".+?;/i",	
					"/define\(\"WAPCOPY\".+?;/i",
				);
			$rep=array(	
					"define(\"NOTICLE_PAGE_SIZE\", \"{$post['noticle']}\");",
					"define(\"NEWS_PAGE_SIZE\", \"{$post['news']}\");",
					"define(\"WAPOTO_SIZE\", \"{$post['waphotosize']}\");",
					"define(\"WAPCOPY\", \"{$post['wapcopy']}\");"
				);
			return file_put_contents($confile, preg_replace($reg, $rep, $configText));
		}		
	}
?>