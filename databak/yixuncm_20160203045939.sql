DROP TABLE IF EXISTS `yx_about`;
CREATE TABLE `yx_about` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `about_pid` (`pid`),
  KEY `about_audit` (`audit`),
  KEY `about_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `yx_about` (`id`,`pid`,`title`,`content`,`audit`,`ord`) VALUES
('1','1','公司介绍','<p>易迅软件是一家从事BS架构软件应用及开发的工作团队，专注服务于国内中小型企业单位、各级院校网站平台及WEB应用系统的设计与研发，旨在通过更加简易的搭建过程、更简单的维护特性、更省心的系统升级为用户寻找一种更为高效、经济的建站方式。<br/>目前易迅软件已广泛应用于国内数千家网站，数百家网络公司使用YIXUNCMS系统进行网站搭建，简洁的界面、简易的操作得到了广大企业的认可，被企业称为国内首选的企业网站建设系统。<br/>易迅软件拥有经验丰富的设计和研发团队，规范的软件开发流程。团队秉承“简易操作、高效运行”的理念注重产品的外观设计、易操作、高效率，易迅软件通过成熟的底层框架技术保证了软件代码的健壮，使得易迅软件无论在稳定性、运行效率、负载能力、安全性等方面都表现出了良好的性能。<br/>我们坚持“高效、经济建站”的原则，真诚希望与您建立良好的合作伙伴关系，努力提升我们的软件与服务水平，为您节约每一分成本、创造价值。易迅将不断进取，努力打造功能强大、简洁实用的软件，为用户提供满意的软件产品</p>','1','0'),
('2','1','业务范围','<p>请在后台单页中修改</p>','1','1'),
('3','1','联系我们','<p>易迅软件技术工作室</p><p>	全国服务热线：15284330477<br />	企鹅：1652368686<br />电子信箱：1652368686@qq.com<br />	官方网址：http://www.ys-bs.com</p>','1','2'),
('4','2','企业模板定制服务','<p>请在后台自行修改</p>','1','0'),
('5','2','ICP备案服务','<p>请在后台自行修改</p>','1','1');
DROP TABLE IF EXISTS `yx_acolumn`;
CREATE TABLE `yx_acolumn` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `acolumn_audit` (`audit`),
  KEY `acolumn_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `yx_acolumn` (`id`,`title`,`description`,`audit`,`ord`) VALUES
('1','企业介绍','企业介绍','1','0'),
('2','业务范围','业务范围','1','1');
DROP TABLE IF EXISTS `yx_activex`;
CREATE TABLE `yx_activex` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `content` text,
  `audit` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `activex_title` (`title`),
  KEY `activex_audit` (`audit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_advert`;
CREATE TABLE `yx_advert` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `wz` smallint(1) unsigned NOT NULL DEFAULT '0',
  `pic` char(24) NOT NULL,
  `links` varchar(100) NOT NULL,
  `display` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `advert_pic` (`pic`),
  KEY `advert_links` (`links`),
  KEY `advert_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `yx_advert` (`id`,`wz`,`pic`,`links`,`display`,`ord`) VALUES
('1','1','20151202132405_826.png','#','1','0');
DROP TABLE IF EXISTS `yx_album`;
CREATE TABLE `yx_album` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `display` smallint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `album_pid` (`pid`),
  KEY `album_path` (`path`),
  KEY `album_display` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `yx_album` (`id`,`pid`,`path`,`title`,`description`,`display`) VALUES
('1','0','0','装修图库','感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步','1'),
('2','0','0','公司活动','感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步','1'),
('3','0','0','网站用图','感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步','0');
DROP TABLE IF EXISTS `yx_article`;
CREATE TABLE `yx_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `summary` varchar(300) NOT NULL DEFAULT '',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `comefrom` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `keyword` varchar(20) NOT NULL DEFAULT '',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` smallint(1) unsigned NOT NULL DEFAULT '0',
  `allow` smallint(1) unsigned NOT NULL DEFAULT '1',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `article_title` (`title`),
  KEY `article_uid` (`uid`),
  KEY `article_pid` (`pid`),
  KEY `article_audit` (`audit`),
  KEY `article_recommend` (`recommend`),
  KEY `article_allow` (`allow`),
  KEY `article_keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_banner`;
CREATE TABLE `yx_banner` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `pic` char(24) NOT NULL,
  `links` varchar(100) NOT NULL,
  `display` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `banner_pic` (`pic`),
  KEY `banner_links` (`links`),
  KEY `banner_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `yx_banner` (`id`,`title`,`pic`,`links`,`display`,`ord`) VALUES
('1','第一张焦点图','1.jpg','#','1','0'),
('2','第二张焦点图','2.jpg','#','1','1');
DROP TABLE IF EXISTS `yx_board`;
CREATE TABLE `yx_board` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `telephone` varchar(11) NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(20) DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `board_nickname` (`nickname`),
  KEY `board_telephone` (`telephone`),
  KEY `board_title` (`title`),
  KEY `board_posttime` (`posttime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_column`;
CREATE TABLE `yx_column` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `picid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  `display` smallint(3) unsigned NOT NULL DEFAULT '1',
  `callid` smallint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `column_pid` (`pid`),
  KEY `column_picid` (`picid`),
  KEY `column_path` (`path`),
  KEY `column_audit` (`audit`),
  KEY `column_ord` (`ord`),
  KEY `column_display` (`display`),
  KEY `column_callid` (`callid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `yx_column` (`id`,`pid`,`picid`,`path`,`title`,`description`,`audit`,`ord`,`display`,`callid`) VALUES
('1','0','13','0','资讯动态','资讯动态','0','0','1','0'),
('2','1','14','0-1','公司动态','Company news','0','0','1','1'),
('3','5','15','0-5','建站经验','Site experience','0','0','1','1'),
('4','1','12','0-1','行业动态','Industry news','0','0','1','1'),
('5','0','10','0','技术文摘','技术文摘','0','0','1','1');
DROP TABLE IF EXISTS `yx_flink`;
CREATE TABLE `yx_flink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `webname` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(60) NOT NULL DEFAULT '',
  `logo` varchar(60) NOT NULL DEFAULT '',
  `rname` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `dtime` int(10) unsigned NOT NULL DEFAULT '0',
  `msg` varchar(200) NOT NULL DEFAULT '',
  `list` smallint(1) unsigned NOT NULL DEFAULT '0',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '0',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `flink_list` (`list`),
  KEY `flink_audit` (`audit`),
  KEY `flink_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `yx_flink` (`id`,`webname`,`url`,`logo`,`rname`,`email`,`dtime`,`msg`,`list`,`audit`,`ord`) VALUES
('1','建筑人才网','http://www.38900.com','yixun.gif','小戴','1114078980@qq.com','1454472249','建筑人才网','0','1','0');
DROP TABLE IF EXISTS `yx_fun`;
CREATE TABLE `yx_fun` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `yx_fun` (`id`,`title`,`content`,`audit`,`ord`) VALUES
('1','联系方式','<p>	易迅软件技术工作室</p><p>	网址：http://www.ys-bs.com<br />	企鹅：1652368686<br />	信箱：1652368686@qq.com<br />	电话：15284330477</p>','1','0'),
('2','首页公司概况','<p><img src=http://www.ys-bs.com/yixun.png align=left style=margin-right:10px>	易迅软件是一家从事BS架构软件应用及开发的工作团队，专注服务于国内中小型企业单位、各级院校网站平台及WEB应用系统的设计与研发，旨在通过更加简易的搭建过程、更简单的维护特性、更省心的系统升级为用户寻找一种更为高效、经济的建站方式。目前易迅软件已广泛应用于国内数千家网站，数百家网络公司使用YIXUNCMS系统进行网站搭建，简洁的界面、简易的操作得到了广大企业的认可</p>','1','1');
DROP TABLE IF EXISTS `yx_group`;
CREATE TABLE `yx_group` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `groupname` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `useradmin` tinyint(1) NOT NULL DEFAULT '0',
  `webadmin` tinyint(1) NOT NULL DEFAULT '0',
  `articleadmin` tinyint(1) NOT NULL DEFAULT '0',
  `sendcomment` tinyint(1) NOT NULL DEFAULT '0',
  `photoadmin` tinyint(1) NOT NULL DEFAULT '0',
  `jobadmin` tinyint(1) NOT NULL DEFAULT '0',
  `boardadmin` tinyint(1) NOT NULL DEFAULT '0',
  `funadmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `yx_group` (`id`,`groupname`,`description`,`useradmin`,`webadmin`,`articleadmin`,`sendcomment`,`photoadmin`,`jobadmin`,`boardadmin`,`funadmin`) VALUES
('1','超级管理员','超级管理员用户组，该组的用户具有全部的权限','1','1','1','1','1','1','1','1');
DROP TABLE IF EXISTS `yx_image`;
CREATE TABLE `yx_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `name` char(24) NOT NULL DEFAULT '',
  `title` varchar(80) NOT NULL,
  `thumb` tinyint(1) NOT NULL DEFAULT '0',
  `water` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `image_pid` (`pid`),
  KEY `image_title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `yx_image` (`id`,`pid`,`name`,`title`,`thumb`,`water`) VALUES
('8','1','20150707215330_840.jpg','公司图册','1','1'),
('9','1','20150707215316_258.jpg','公司图册','1','1'),
('10','1','20150707215420_971.jpg','公司图册','1','1'),
('11','1','20150707215301_706.jpg','公司图册','1','1'),
('12','1','20150707215245_933.jpg','公司图册','1','1'),
('13','1','20150707215224_781.jpg','公司图册','1','1'),
('14','3','20151028210951_588.jpg','公司图册','0','1'),
('15','3','20151028210951_167.jpg','公司图册','0','1');
DROP TABLE IF EXISTS `yx_job`;
CREATE TABLE `yx_job` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `treatment` decimal(8,2) NOT NULL DEFAULT '0.00',
  `number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_menu`;
CREATE TABLE `yx_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `pid` smallint(5) NOT NULL,
  `path` varchar(100) NOT NULL,
  `target` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `display` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`,`path`),
  KEY `ord` (`ord`),
  KEY `title` (`title`,`display`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

INSERT INTO `yx_menu` (`id`,`title`,`pid`,`path`,`target`,`url`,`display`,`ord`) VALUES
('1','首页','0','0','_self','/','1','0'),
('2','公司简介','0','0','_self','/index/about/id/1','1','1'),
('3','产品展示','0','0','_self','/photo/index/pid/2','1','2'),
('4','成功案例','0','0','_self','/photo/index/pid/4','1','3'),
('5','公司图集','0','0','_self','/photo/prcture/pid/1','1','4'),
('6','动态资讯','0','0','_self','/article/index/pid/1','1','5'),
('7','在线留言','0','0','_self','/index/board','1','6'),
('8','企业招聘','0','0','_self','/index/job','1','7'),
('9','联系我们','0','0','_self','/index/about/id/3','1','8'),
('10','企业概况','2','0-2','_self','/index/about/id/1','1','0'),
('11','业务范围','2','0-2','_self','/index/about/id/2','1','0'),
('12','蓝色经典系列','3','0-3','_self','/photo/index/pid/2','1','0'),
('13','绿色清新系列','3','0-3','_self','/photo/index/pid/7','1','0'),
('14','红色大气系列','3','0-3','_self','/photo/index/pid/8','1','0'),
('15','公司活动','5','0-5','_self','/photo/prcture/pid/2','1','0'),
('16','装修图库','5','0-5','_self','/photo/prcture/pid/1','1','0'),
('17','联系我们','2','0-2','_self','/index/about/id/3','1','0'),
('18','公司新闻','6','0-6','_self','/article/index/pid/2','1','0'),
('19','行业动态','6','0-6','_self','/article/index/pid/4','1','0'),
('20','建站经验','6','0-6','_self','/article/index/pid/3','1','0');
DROP TABLE IF EXISTS `yx_notice`;
CREATE TABLE `yx_notice` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `color` char(6) NOT NULL DEFAULT '000000',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text,
  `display` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `notice_starttime` (`starttime`),
  KEY `notice_endtime` (`endtime`),
  KEY `notice_display` (`display`),
  KEY `notice_ord` (`ord`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `yx_notice` (`id`,`title`,`color`,`starttime`,`endtime`,`content`,`display`,`ord`) VALUES
('1','网站用图声明','DB0000','1439991868','0','<p>	本网站中所使用的部分图片均来源于互联网，仅为网站系统测试使用，图片版权规源网站、单位及个人所有，任何单位或个人不得使用其用于商业宣传或其它用途。</p>','1','0');
DROP TABLE IF EXISTS `yx_phcolumn`;
CREATE TABLE `yx_phcolumn` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  `display` smallint(3) unsigned NOT NULL DEFAULT '1',
  `callid` smallint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `phcolumn_pid` (`pid`),
  KEY `phcolumn_path` (`path`),
  KEY `phcolumn_audit` (`audit`),
  KEY `phcolumn_ord` (`ord`),
  KEY `phcolumn_display` (`display`),
  KEY `phcolumn_callid` (`callid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `yx_phcolumn` (`id`,`pid`,`path`,`title`,`description`,`audit`,`ord`,`display`,`callid`) VALUES
('1','0','0','产品展示','产品展示','0','0','1','1'),
('2','1','0-1','蓝色经典系列','产品类别一','0','0','1','1'),
('3','0','0','成功案例','成功案例','0','0','1','2'),
('4','3','0-3','业务介绍','案例展示一','0','0','1','2'),
('5','3','0-3','企业定制','案例展示二','0','0','1','2'),
('6','3','0-3','系统开发','案例展示三','0','0','1','2'),
('7','1','0-1','绿色清新','产品类别二','0','0','1','1'),
('8','1','0-1','红色大气系列','产品展示三','0','0','1','1');
DROP TABLE IF EXISTS `yx_photo`;
CREATE TABLE `yx_photo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `summary` varchar(300) NOT NULL DEFAULT '',
  `pic` char(24) NOT NULL DEFAULT '',
  `recommend` smallint(1) unsigned NOT NULL DEFAULT '0',
  `top` smallint(1) unsigned NOT NULL DEFAULT '0',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '0',
  `content` text,
  `views` smallint(5) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `photo_title` (`title`),
  KEY `photo_pid` (`pid`),
  KEY `photo_uid` (`uid`),
  KEY `photo_recommend` (`recommend`),
  KEY `photo_top` (`top`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_play`;
CREATE TABLE `yx_play` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(80) NOT NULL DEFAULT '',
  `pic` char(24) NOT NULL DEFAULT '',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `display` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `play_aid` (`aid`),
  KEY `play_starttime` (`starttime`),
  KEY `play_endtime` (`endtime`),
  KEY `play_ord` (`ord`),
  KEY `play_display` (`display`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `yx_user`;
CREATE TABLE `yx_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(4) unsigned NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `userpwd` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `sex` smallint(3) NOT NULL DEFAULT '0',
  `disable` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_gid` (`gid`),
  KEY `user_username` (`username`),
  KEY `user_userpwd` (`userpwd`),
  KEY `user_disable` (`disable`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `yx_user` (`id`,`gid`,`username`,`userpwd`,`email`,`regtime`,`sex`,`disable`) VALUES
('1','1','yixuncm','b921048104ad51440a5beb2b04aa83a3','1114078980@qq.com','1454472249','0','0');
DROP TABLE IF EXISTS `yx_wapmenu`;
CREATE TABLE `yx_wapmenu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `display` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ord` (`ord`),
  KEY `display` (`display`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `yx_wapmenu` (`id`,`title`,`url`,`display`,`ord`) VALUES
('1','网站首页','/','1','0'),
('2','公司简介','/index/about','1','1'),
('3','产品展示','/index/product','1','2'),
('4','新闻中心','/index/article','1','4'),
('5','在线留言','/index/board','1','5'),
('6','企业招聘','/index/job','1','6');
DROP TABLE IF EXISTS `yx_wappic`;
CREATE TABLE `yx_wappic` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `pic` char(24) NOT NULL,
  `links` varchar(100) NOT NULL,
  `type` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `yx_wappic` (`id`,`title`,`pic`,`links`,`type`,`ord`) VALUES
('1','第一张','banner.jpg','/','1','0'),
('2','第二张','banner2.jpg','/','0','1');
