<?php
	define("DEBUG", 0);				      							//开启调试模式 1 开启 0 关闭
	define("DRIVER", "pdo");				      					//数据库的驱动，本系统支持pdo(默认)和mysqli两种
	//define("DSN", "mysql:host=localhost;dbname=yixuncms"); 			//如果使用PDO可以使用，不使用则默认连接MySQL
	define("HOST", "localhost");			      					//数据库主机
	define("USER", "root");                               			//数据库用户名
	define("PASS", "root");                                   			//数据库密码
	define("DBNAME", "yixuncm");			      						//数据库名
	define("TABPREFIX", "yx_");                          			//数据表前缀
	define("CTIME", "604800");                         				//缓存时间
	define("TPLPREFIX", "html");                           			//模板文件的后缀名

	//$memServers = array("localhost", 11211);	     				//使用memcache服务器
	/*
	如果有多台memcache服务器可以使用二维数组
	$memServers = array(
			array("www.xxx.net", '11211'),
			array("www.xxx.com", '11211'),
			...
		);
	*/
	define("ARTICLE_PAGE_SIZE", "15");								//每页文章显示数目
	define("COMMENT_PAGE_SIZE","15");								//评论显示数
	define("PHTURE_PAGE_SIZE", "15");								//展示显示数
	define("HOME_COLUMN_SIZE", "4");								//首页文章栏目数
	define("HOME_COLUMNPAGE_SIZE", "6");							//首页文章栏目内文章数
	define("WATER","20160426211809_586.jpg");						//水印名称
	define("POSITION", "9");
	$styleList = array("default"=>"蓝色经典");			//PC系统风格
	$pictureSize = array('maxWidth' => 800, 'maxHeight' => 600);	//编辑框上传图片大小
	$thumbSize = array('width' => 270, 'height' => 200);   			//缩略图大小
	$bannerSize = array('bwidth' => 1920, 'bheight' => 320);   		//焦点图大小
	$playSize = array('pwidth' => 500, 'pheight' => 300);   		//幻灯大小
	define("APP_NAME", "");						//标题内容
	define("KEYWORD", "");//关键字
	define("DESCRIPTION", "");//网站描述
	define("ICP", "");//ICP备案
	define("COPY", "");//版权信息
	/*WAP SET*/
	define("NOTICLE_PAGE_SIZE", "5");								//公告数
	define("NEWS_PAGE_SIZE", "5");									//新闻数
	define("WAPOTO_SIZE", "5");										//图片数
	define("WAPCOPY", "Copyright © 易迅软件");						//版权信息
	