-- --------------------------------------------------
-- 文件名: yixun.sql 
-- YiXunCMS数据库安装文件
-- 作者： 易迅软件
-- --------------------------------------------------

# --------------------------------------------------------
# 表的结构 yx_acolumn,该表用于单页分类
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_acolumn;
CREATE TABLE yx_acolumn (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `acolumn_audit` (`audit`),
  KEY `acolumn_ord` (`ord`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_about,该表用于单页
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_about;
CREATE TABLE yx_about (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_article,该表用于文章
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_article;
CREATE TABLE yx_article (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_banner,该表用于焦点图
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_banner;
CREATE TABLE yx_banner (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_board,该表用于留言板
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_board;
CREATE TABLE yx_board (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_column,该表用于文章栏目
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_column;
CREATE TABLE yx_column (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_flink,该表用于友情链接
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_flink;
CREATE TABLE yx_flink (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_fun,该表用于扩展
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_fun;
CREATE TABLE yx_fun (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text,
  `audit` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_advert,该表用于广告
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_advert;
CREATE TABLE yx_advert (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_group,该表用于用户组
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_group;
CREATE TABLE yx_group (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_job,该表用于招聘
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_job;
CREATE TABLE yx_job (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `treatment` decimal(8,2) NOT NULL DEFAULT '0.00',
  `number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_menu,该表用于导航菜单
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_menu;
CREATE TABLE yx_menu (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_notice,该表用于公告
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_notice;
CREATE TABLE yx_notice (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_phcolumn,该表用于产品栏目
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_phcolumn;
CREATE TABLE yx_phcolumn (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_photo,该表用于产品
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_photo;
CREATE TABLE yx_photo (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_play,该表用于幻灯片
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_play;
CREATE TABLE yx_play (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_user,该表用于用户
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_user;
CREATE TABLE yx_user (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_wapmenu,该表用于手机站导航
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_wapmenu;
CREATE TABLE yx_wapmenu (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `display` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ord` (`ord`),
  KEY `display` (`display`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_wappic,该表用于手机站图片
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_wappic;
CREATE TABLE yx_wappic (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `pic` char(24) NOT NULL,
  `links` varchar(100) NOT NULL,
  `type` smallint(1) NOT NULL DEFAULT '1',
  `ord` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_album,该表用于图册
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_album;
CREATE TABLE yx_album (
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
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_image,该表用于图片
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_image;
CREATE TABLE yx_image (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(4) unsigned NOT NULL DEFAULT '0',
  `name` char(24) NOT NULL DEFAULT '',
  `title` varchar(80) NOT NULL,
  `thumb` tinyint(1) NOT NULL DEFAULT '0',
  `water` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `image_pid` (`pid`),
  KEY `image_title` (`title`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 yx_activex,该表用于插件代码
# --------------------------------------------------------
DROP TABLE IF EXISTS yx_activex;
CREATE TABLE yx_activex (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `content` text,
  `audit` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `activex_title` (`title`),
  KEY `activex_audit` (`audit`)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 转存表中的数据 `yx_acolumn`
# --------------------------------------------------------
INSERT INTO `yx_acolumn` (`id`, `title`, `description`, `audit`, `ord`) VALUES
(1, '企业介绍', '企业介绍', 1, 0),
(2, '业务范围', '业务范围', 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_about`
# --------------------------------------------------------
INSERT INTO yx_about (`id`, `pid`, `title`, `content`, `audit`, `ord`) VALUES
(1, 1,'公司介绍','<p>易迅软件是一家从事BS架构软件应用及开发的工作团队，专注服务于国内中小型企业单位、各级院校网站平台及WEB应用系统的设计与研发，旨在通过更加简易的搭建过程、更简单的维护特性、更省心的系统升级为用户寻找一种更为高效、经济的建站方式。<br/>目前易迅软件已广泛应用于国内数千家网站，数百家网络公司使用YIXUNCMS系统进行网站搭建，简洁的界面、简易的操作得到了广大企业的认可，被企业称为国内首选的企业网站建设系统。<br/>易迅软件拥有经验丰富的设计和研发团队，规范的软件开发流程。团队秉承“简易操作、高效运行”的理念注重产品的外观设计、易操作、高效率，易迅软件通过成熟的底层框架技术保证了软件代码的健壮，使得易迅软件无论在稳定性、运行效率、负载能力、安全性等方面都表现出了良好的性能。<br/>我们坚持“高效、经济建站”的原则，真诚希望与您建立良好的合作伙伴关系，努力提升我们的软件与服务水平，为您节约每一分成本、创造价值。易迅将不断进取，努力打造功能强大、简洁实用的软件，为用户提供满意的软件产品</p>', 1, 0),
(2, 1,'业务范围', '<p>请在后台单页中修改</p>', 1, 1),
(3, 1,'联系我们', '<p>易迅软件技术工作室</p><p>	全国服务热线：15284330477<br />	企鹅：1652368686<br />电子信箱：1652368686@qq.com<br />	官方网址：http://www.ys-bs.com</p>', 1, 2),
(4, 2,'企业模板定制服务', '<p>请在后台自行修改</p>', 1, 0),
(5, 2,'ICP备案服务', '<p>请在后台自行修改</p>', 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_article`
# --------------------------------------------------------
INSERT INTO yx_article (`id`, `title`, `summary`, `posttime`, `uid`, `comefrom`, `content`, `keyword`, `pid`, `audit`, `recommend`, `allow`, `views`) VALUES
(1, '根据需求定位网站的排名和策略', '网站排名中最重要的部分是哪里?我们多认为是标题、meta标签、内容和外链。这样的理解不能说是错误的，关键在于我们的之后的SEO优化操作上。我们以“网络公司”网站来进行实战分析。 ', UNIX_TIMESTAMP(), 1, 'ASP300', '<p>	 网站排名中最重要的部分是哪里?我们多认为是标题、meta标签、内容和外链。这样的理解不能说是错误的，关键在于我们的之后的SEO优化操作上。我们以网络公司网站来进行实战分析。</p><p>	　　第一，标题的设置。做网站标题我们要做的是明白用户需要什么，用户点击网站是为了什么，而不是一再的罗列我们的产品服务关键词。一般来说搜索网络公 司的用户，他们要想要获得怎样的信息呢，通过检索我们可以看出多为潜在客户，也就是说直接搜索此类关键词的多是抱有明确目的的。那么我们要设置的标题就 是企业的服务和产品，要加以区域，这样能够让用户更精确的定位。</p><p>	　　第二，META标签设置。meta标签多是展示给搜索引擎的，此部分的设置主要起到的补充说明的作用。同样的我们清楚百度在展示搜素结果的时候下面的 文字说明部分多取决于description。那该部分要设置的就是产品服务的说明，尽量展示企业的优势，这样在用户检索的时候才能够增加被点击的机会。</p><p>	　　第三，内容的设置。内容的设置是网站最为关键的部分，此关键并非说是内容的重要性，而是要展示给用户他们需要的东西。这就涉及到了用户需求定位。通过 检索关键词我们可以发现出现在前三位的依然是百度产品：百科、知道、地图。这说明用户主要定义在了概念和区域检索上，其中会涉及到的经营范围公司优 势等，这也让我们猜测出了用户对关键词搜索的目的性上。至此我们对网站内容上就有了主题方向。</p><p>	　　1、首页内容简介部分要展现网站的产品服务范围和经营方向以及企业优势</p><p>	　　2、内容页面部分要展现出供求的具体位置和相关的交通设施，便于有意向的用户登门</p><p>	　　3、产品服务要将多展示案例，将成功案例配以图文说明形式展示给用户，以便用户更具体了解公司实力</p><p>	　　4、将用户潜在需求也就是价格部分做成下载或订阅形式传递给用户，便于用户进行同行业对比。</p><p>	　　第四，外链的设置。对于外链的设置笔者小丹其实并不看好，通过对网站的数据统计部分发现现在的外链部分对于网站的投票价值并不高，抱着精化细节部分我们可通过高权重网站投稿的方式进行外链传播，而不是利用软件机械化的扩散无用链接。</p><p>	　　总体来说，网站排名优化部分要站长用户需求角度来进行。网站的标题、布局、内容都要参考用户的浏览便易度来进行设置，淘汰掉以网站排名为主导的SEO优化方式。只有这样网站的综合得分和用户需求满意度才能达到饱和，促使我们的网站长期稳定。</p>', '定位,网站', 3, 1, 0, 0, 62),
(2, '提高关键词检索量的方法有哪些','我们在从事网站优化的时候都希望能够全面提高网站关键词的搜索量，那么我们到底应该怎么做呢?下面我们就来分析提高关键词搜索量的方法有哪些，从而让我们更好地做好关键词优化工作。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	我们在从事网站优化的时候都希望能够全面提高网站关键词的搜索量，那么我们到底应该怎么做呢?下面我们就来分析提高关键词搜索量的方法有哪些，从而让我们更好地做好关键词优化工作。<br />	<br />	搜索引擎优化的效果之一就是能够提高关键字的排名，让您的网站出现在搜索引擎搜索结果的靠前位置(如百度或yandex第一页)，从而达到网络推广的目 的。yandex推广技术不仅能够为你节省广告费用的支出，而且能帮您带来真实，有效，与网站相关度极高的流量和潜在客户。关键词检索量是评估关键词质量 的重要指标，选择检索量大，竞争度低的关键词进行优化，能使网站的流量得到明显的提升。<br />	<br />	另外，在进行搜索引擎优化之前，检索该公司网站的用户使用检索的关键字通常为该公司网站名称，这说明，该网站的访问者大多是已经知道此网站的老客户，而新 客户的比例则很少。在yandex推广桥之队实施搜索引擎优化项目之后，该网站检索量最大的前50个关键词不再仅仅以网站名称为核心，而是出现了一批非网 站名称的资讯类的关键词(如下图)。<br />	<br />	说明：下图是该网站检索量最大的前50个关键词在搜索引擎优化项目实施前后的对比，红色方框内的词为非网站名称的资讯类的关键词，从两幅图可以明显对比看 出：资讯类的关键词搜索量上升，再一次证明，利用搜索引擎优化技术，提高关键字检索量，可以成功地把网站推广给潜在新客户。<br />	<br />	所以，我们在进行网站优化的时候需要运用多种方法来提高网站关键词的检索量，这样才能更好地提高网站用户体验度，使得我们更好地做好网站优化工作，促进网站发展。</p>', '易迅,网站源码,免费源码,PHP', 3, 1, 1, 1, 1),
(3, '如何建立自己的网站','时代在不断的变化，我们也随着它而不断的变化。互联网的时代也越来越强大，所以成千上万的企业都在为自己的企业、品牌创造属于自己的网站，个人也给自己建立网站了。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	时代在不断的变化，我们也随着它而不断的变化。互联网的时代也越来越强大，所以成千上万的企业都在为自己的企业、品牌创造属于自己的网站，个人也给自己建立网站了。<br />	<br />	那么网站建设是件简单的事情吗？说简单也简单，说不简单也不简单。那我要建立自己的网站需要怎么做呢？不少的人会想到寻找专门做网站的建站公司吧，但是价 格方面要做好心理准备，还有要找对了，不然做得再好的网站，他一关你又得折腾了。那不找建站公司，还能怎样？自己建吗？又不会编程，学吧都不知何年马月的 事情；恩，自己做学编程是难，但是我们可以巧妙的去用自助建站系统，自助建站系统就是为了让不会建站的人更快速的建网站，也是为了节省建站成本，还为了可 以少在建站上花费更多的时间！<br />	<br />	耐思尼克建站宝盒是最早研发的一款傻瓜式智能建站系统，成就不少的创业梦想，更是成就了企业的节省成本；它可以快速让你建出电脑站，手机站，微站，app四合一的网站，建站宝盒还有上千套的网站模板，不同行业，不同款式，不同风格。<br />	<br />	大家也知道做网站需要域名，主机，选择好自助建站系统了，那选域名，主机该怎么选呢？<br />	不必烦恼，耐思尼克的建站宝盒套餐是你最好的选择，建站宝盒套餐中包含了一个顶级域名，2G型网站空间，全能版建站宝盒等等，一个建站宝盒套餐就可以造就一个属于自己的网站，赶快建立属于自己的网站吧。</p>', '易迅,网站源码,免费源码,PHP', 3, 1, 1, 1, 3),
(4, '关键词转移单元对质量度是否有影响','　　百度竞价推广关键词转移单元对质量度有影响吗?很大一部分做竞价推广账户的人认为关键词转移一定会降低关键词质量度。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　　百度竞价推广关键词转移单元对质量度有影响吗?很大一部分做竞价推广账户的人认为关键词转移一定会降低关键词质量度。从单个关键字来讲可能有一些道 理，因为也许会影响到账户的历史表现，但是不全是如此，因为在形成最终展现后的质量度是由各个维度组成的。小脑袋官网推荐：竞价账户烧钱的七大病因和处理办法<br />	<br />	　　CPC(每点击成本)的质量度=账户质量度+单元质量度+关键词质量度+创意质量度<br />	<br />	　　转移关键词之后只有一个维度是发生变动的，即单元质量度发生变化。如果关键词转移到的单元质量度较高，计算CPC价钱的质量度则上升。相反，转移到比原来质量度低的单元计算CPC价钱的质量度就下降。</p>', '易迅,网站源码,免费源码,PHP', 3, 1, 1, 1, 0),
(5, '如何用竞价软件刷排名获得最好的效果','做百度竞价推广使用刷价软件的好处是什么?就是关键词出价的优化。关键词人工出价往往会出现出价虚高的情况，这是人工调价所不能避免 的，而且效率很差。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　　做百度竞价推广使用刷价软件的好处就是节省关键词排名的费用，如果做到这点的同时还能保持竞价效果不变，那么这样的就是做竞价推广者想要的效果了。现在小脑袋官网帮助大家如何来做。<br />	<br />	　　其实要减少关键词排名的费用，同时保持竞价效果不变，其实我们就只需要减小关键词的出价以及保持排名不变动就可以了。这样，获得高额的回报其实是每个竞价人员的一个目标。为此小脑袋总结了一下几条粗略的结论，大家有欲望可以观赏一二。<br />	<br />	　　第一、对现在投放的广告进行调查，看看你的哪些地域有你的关键词，然后针对受众好的关键词重点投放，效果不好的关键词就关闭在那个地方的投放，这样可 以节省一大笔预算。其实做医疗竞价推广的一般主要推广的是一个固定的地域，很少推广几个城市或者省份，推广的也有，但不是主要推广区域。比如在北京做百度 竞价推广，完全可以推广天津和河北，这个需要在重新做出相应的计划，相应的创意去筛选。<br />	<br />	　　百度竞价推广使用刷价软件的好处<br />	<br />	　　第二、竞价账户需要设定每天最高的消费金额，这样的好处就是如果你有某些操作的失误，也不会有太大的损失，一旦到达预设金额，那么广告就会自动下线了。<br />	<br />	　　第三、对在做竞价推广的每个关键词进行分析，淘汰掉一部分效果差的关键词，没有必要把时间和精力浪费在这些关键词上面，我们需要握紧拳头，主攻一点，才能充分发挥我们的优势。小脑袋推荐：百度竞价推广怎么控制成本与管理细化<br />	<br />	　　第四、在撰写的创意中，广告的标题和描述都需要有足够的吸引力，而且要随着受众的不同而变化。创意要与竞争对手有一定的差异性，对比的话能够看出推广的亮点。了解用户需要什么，分析他们想了解什么，我们就给他们什么，有着良好的用户体验，是有高转化率的前提。<br />	<br />	　　第五、盲目追求第一名的效果往往没有第二第三名的效果好，这是统计出来的结果，也许仅适用于中国用户，但是你不也就是在中国推广嘛。如果你做的竞价推 广的转化非常的好，而且竞争也不大，网站的营销能力非常的好，根据推广关键词的投资回报，完全可以排在第一。这个的谨慎，需要精准的计算。<br />	<br />	　　最后总结：做百度竞价推广使用刷价软件的好处是什么?就是关键词出价的优化。关键词人工出价往往会出现出价虚高的情况，这是人工调价所不能避免 的，而且效率很差。这个时候就需要用刷价软件来调价了，优势就是不会出现出价虚高的情况，同时也解放了人力。人力资源是很宝贵的资源，现在市面上的刷机软 件有很多，有各种各样的，但是使用的时候需要谨慎，最好与卖软件的客服进行电话沟通，谈好价格，现在价格都不低。小脑袋竞价软件整体来说还是不错的，客服 的服务也不错，很到位。</p>', '易迅,网站源码,免费源码,PHP', 3, 1, 1, 1, 4),
(6, '移动网站的营销首先要做好站','移动搜索其实大部分都是碎片化时间搜索，不像PC端的搜索那样。移动端有很多特质，它不可能像PC端那样首页放很多东西。因为屏幕小，所以我们一定要 找出产品的核心需求点，写那么两点最多三点就行了。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　我看过一些竞价的医疗行业的移动网站，确实不管在美工方面还是营销性方面还是需求把握方面，都走在了传统行业的前头。是值得广大传统行业借鉴和学习的，如果没有专门去建移动网站的话，一般是由搜索引擎进行转码，一般来说情况是很不好的，给用户一种极不好的体验。<br />	<br />	　　移动搜索其实大部分都是碎片化时间搜索，不像PC端的搜索那样。移动端有很多特质，它不可能像PC端那样首页放很多东西。因为屏幕小，所以我们一定要 找出产品的核心需求点，写那么两点最多三点就行了。移动端一定要突出重点，因为用户一旦没有找到内容马上就跑，其实研究移动端的转化已经刻不容缓了。<br />	<br />	　　移动端比PC端要难，因为移动端的数据分析，数据追踪就没PC端那么容易。在PC端如果你是做竞价的，基本上你要什么数据就能得到什么数据，有了数据 自然就容易找出问题。而目前移动端还不能做到像PC端那样。虽然移动端困难重重，但我认为最重要的还是做好第一步，独立建好移动网站。<br />	<br />	　　因为我研究转化时间已久，着陆页对询盘的影响实在太大了，有时候一个好的着陆页能把一些不怎么好的关键词也转化过来。如果你的诱惑点做的好，页面美 工，营销性做好的，哪怕你的关键词把握的差点，问题都不大。如果你着陆页面做的不好，在竞价而言，就算你把帐户调整的非常好，关键词把握的很不错，转化率 也依然不能提升。有些做竞价的人就纠结了，找不到增长点了，找不到突破点了，那是因为你把眼光放错地方了。<br />	<br />	　　有时候你把眼光稍微挪挪会发现不一样天空，我所在的行业我看过那些做移动竞价的，基本上都没做移动网站，只有一家做了，还做的不怎么样。我经常感慨那 些玩竞价，那样的垃圾着陆页值得烧钱吗?那样的垃圾着陆页面你真的是在烧钱啊，不会有转化的，不会有产出的。不过在一些竞争不是很激烈的行业也许也可以去 碰运气，反正大家都做的不好。</p>', '易迅,网站源码,免费源码,PHP', 3, 1, 1, 1, 0),
(7, '竞价推广中着陆页的选择和设计技巧','作为医院的百度竞价推广专员，小脑袋听到的最多的抱怨是：怎么百度又变规则了，我的质量度全掉了，还有就是怎么最近越来越贵，还有就是说怎么怎么钱花 这么多怎么没有对话啊，有对话了怎么也没有预约等等话题。大家可能最关心的是百度的账户维护，被百度竞价的客服牵着鼻子走了，有几个人会记得分析网站的跳 出率，改变下竞价的着陆页面呢?或许降低跳出率，提高患者在网站的停留时间。咨询邀请上来的机会也多一点。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　　作为医院的百度竞价推广专员，小脑袋听到的最多的抱怨是：怎么百度又变规则了，我的质量度全掉了，还有就是怎么最近越来越贵，还有就是说怎么怎么钱花 这么多怎么没有对话啊，有对话了怎么也没有预约等等话题。大家可能最关心的是百度的账户维护，被百度竞价的客服牵着鼻子走了，有几个人会记得分析网站的跳 出率，改变下竞价的着陆页面呢?或许降低跳出率，提高患者在网站的停留时间。咨询邀请上来的机会也多一点。<br />	<br />	　　如何选择百度竞价推广的着陆页，小脑袋竞价软件<br />	<br />	　　那么，我们应该如何选择百度竞价推广的着陆页面呢?<br />	<br />	　　1、着陆页就像路灯，要为患者指明路线（搜的关键词打开之后的页面直接决定停留）<br />	<br />	　　如果你的关键词是针对某种疾病的，比如某种疾病的病因、症状、治疗、费用等，不要将这类关键词的着陆页设为首页或者列表页，一个网站的首页，就如同一 张横七竖八的线路图，所有患者都可以在这里按自己的起点找到自己的路，但每个来访的患者都只想知道自己的起点自己的路。所以如果患者点击了医院的站点，却 没有在这个着陆页上看到相关的内容，患者就会对这个网站产生反感，从而直接关闭。因为首页并非一个好的着陆页，它的内容过于宽泛(路线太多)，目录页也是 同样的道理，首页和目录页只能为患者提供一个站点目录，只会浪费患者的时间去寻找所需内容，但是并非每一个患者都没有时间概念。<br />	<br />	　　并不是说首页不能作为着陆页，而是应该根据患者搜索词的诉求来合理选择着陆页。医院类的词就可以选择首页作为着陆页，因为大多数医院的网站首页都能够 充分展示医院的品牌、专家、技术、设备、环境等相关信息。（小脑袋在这里提醒：只有做医院名和其它竞品关键词是可以做首页，那也的看关键词决定。）<br />	<br />	　　2、着陆页对重要信息要一目了然（搜索的是什么结果看到的是什么）<br />	<br />	　　对于患者来说，有一些信息是他们最想知道的，也是把握住一个潜在患者的重要信息，比如疾病的症状、治疗方法、治疗费用等，这些需求可以通过患者搜索的 关键词直接得出或者稍加揣测分析得出。例如失眠的治疗方法这类关键词的着陆页必定要针对这个内容进行阐述，标题和主要内容也要尽量和搜索词一致，对于 治疗方法以及能够促成患者产生咨询的引导性语句都要重点标明，以免因为文字内容过多，造成患者无法第一时间获取所需。<br />	<br />	　　3、着陆页不要给患者造成困扰（一定要明确加清晰）<br />	<br />	　　之所以说网站的首页不要用做着陆页，其原因是站点的首页给患者提供了太多的选择。试想，如果着陆页面上到处是各种链接和图片按钮，那么患者要么不知所 措，要么会不由自主的点击他们，这样患者就离他所需的信息越来越远。因此，着陆页最好不要包含太多的链接，尤其是各种方式的咨询图片或文字。最好的做法就 是只给患者一种选择：通过分析患者诉求，将患者直接带到所需信息的页面，或链接到能够最有利的说服患者咨询的页面。小脑袋推荐：做百度竞价推广如何选择好 关键词<br />	<br />	　　着陆页面做的好，还可以提高患者对医院品牌的认知度，提高患者心目中网站的形象，提高医院的权威，提升医院品牌的影响力一个好的医院活动营销不仅能够 吸引患者及潜在患者的注意力，还能够传递出医院品牌的核心价值，进而提升品牌的影响力。那么，如何让医院品牌的核心价值为患者所认同呢?关键就是要将医院 品牌核心价值(医疗技术、人文环境等)融入到活动营销的主题里面，让患者接触医院活动营销时，自然而然地受到医院品牌核心价值的感染，并引起患者的情感共 鸣，进而提升医院品牌的影响力。<br />	<br />	　　做好百度竞价推广的关键是数据分析，纯技术的东西，到处都可以复制，让病人感觉你做的不是广告，而且，能找到他疾病的方向。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 0, 1),
(8, '为实现推广预期目标效果该做什么准备','搜索推广营销的过程，形象地说，就是不断寻找符合企业自身实际情况的最优“漏斗”的过程。让“漏斗”能够更大更直，做为“漏斗”开口的前两层(展现与点击)，更是至关重要，小脑袋竞价软件觉得这也是百度推广阶段的工作目标：增加展现量和点击量。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　　搜索推广营销的过程，形象地说，就是不断寻找符合企业自身实际情况的最优漏斗的过程。让漏斗能够更大更直，做为漏斗开口的前两层(展现与点击)，更是至关重要，小脑袋竞价软件觉得这也是百度推广阶段的工作目标：增加展现量和点击量。<br />	<br />	　　做为确定目标的开始，要想清楚四件事：推广什么产品、在什么地方推广、产品的卖点都有哪些、目标预算是多少等，这也是企业为获取订单必须确定的，根据这些信息，才能开始推广，百度公司专业又热心的客服人员会帮助企业完成后继操作，但这四件事是只有企业清楚的。<br />	<br />	　　这里举一个电动车车行的例子：<br />	<br />	　　a、推广什么产品。比如有针对男性的实用型和针对女性的时尚型，有针对高端人群的豪华型和针对普通人群的大众型，有针对年轻人的瞬间提速型和针对年纪偏大人群的安全型&hellip&hellip，它们都有很鲜明的特征，以供消费者根据自身特点进行选择<br />	<br />	　　b、在什么地方推。因为我的实体店都在北京，而且这个品牌的平面广告也主要集中在北京及其周边，所以我的推广地域要以北京为主，辐射周围的天津、河北等地，其他地区则暂时不考虑<br />	<br />	　　c、产品的卖点。针对女性的车型非常小巧时尚、针对年轻人的瞬间提速功能、而近期一些优惠信息：如持学生证享受九五折、买电动车送色拉油，也都要强调出来，让潜在客户对这些直接带动销售的信息一目了然<br />	<br />	　　d、准备花多少钱。根据公司的销售目标、全面推广计划和结合最近正是电动车销售旺季的特征，我可能决定先期投入一万元。<br />	<br />	　　最后，根据企业的基本要求，就可以初步确定关键词、匹配方式、地域、预算、时长、账户结构和创意等要素，上线推广。经过推广，我们的展现量、点击量一 直到订单量是多少就慢慢清楚了，调整与优化就有了基础，客服人员会和企业一起商议调整的方向，比如通过加关键词以获取更多展现量，从而带来更多订单。五 步曲的后继步骤就是做这些事情。<br />	<br />	　　做为新做推广的企业尤其不要着急，目标好明确，但目标量值的确定需要时间，需要过程。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 1, 1),
(9, '网络推广重中之重作为自媒体人员你要了解','好友经常来阅读你的空间日志，也算是粉丝级别的了，那么给这样的粉丝一点回馈也很正常。搞个抢红包活动，派送点红包比较实在，虽然红包里没有多少钱， 但却是一个答谢、沟通的过程。有人说没有干货的自媒体肯定会失败，可干货内容毕竟少之又少，而且也不是每个人都愿意分享的。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	方法一：与你的读者成为朋友<br />	<br />	　　绞尽脑汁写的文章却没人阅读?是不是应该思考下其中的原因，是文章不够吸引人，还是自己推广的不到位。不少自媒体人选择QQ空间作为发布平台，但你想 过自己的好友是潜在读者吗?写IT类的文章当然只有这个圈子里的人会有兴趣，即便你的好友中多数都是混IT行业的。可别人为什么要去点击你的空间，不经常 与好友互动，可能好友都已经忘记了你的存在。所以别嫌麻烦，没事的时候多去踩踩空间，评论一下好友的说说，或者使用软件给好友点个赞。<br />	<br />	　　方法二：定期给读者一点好处<br />	<br />	　　好友经常来阅读你的空间日志，也算是粉丝级别的了，那么给这样的粉丝一点回馈也很正常。搞个抢红包活动，派送点红包比较实在，虽然红包里没有多少钱， 但却是一个答谢、沟通的过程。有人说没有干货的自媒体肯定会失败，可干货内容毕竟少之又少，而且也不是每个人都愿意分享的。自媒体还是以文笔取胜，同样的 IT评论，同样的观念。文笔风格不同，效果就千差万别，幽默有趣人人爱读，官方刻板阅读无味。<br />	<br />	　　方法三：与人抱团取暖资源共享<br />	<br />	　　如今的草根自媒体人不在少数，以写互联网评论的人居多，是不是可以来一次抱团取暖。十几个写相同主题的自媒体人聚集起来，互相推送对方的文章，完全可 以达到粉丝资源共享的目的。这是一个流量变现的好方法，但前提是自媒体人互相能否足够信任，还有就是粉丝和流量是否相当。相同级别的草根自媒体平台不妨选 择合作，几个人积累用户和粉丝，总比一个人效率要高的多。<br />	<br />	　　方法四：学会如何彰显个人魅力<br />	<br />	　　与其说自媒体人以文字吸引人，倒不如说是以个人魅力吸引读者，其实两者同样重要。所以自媒体人还得学会包装自己，尤其是对于草根自媒体人来说，有时候 评论内容辛辣一点也好，或者经常在QQ空间里晒点生活照。介绍自己的朋友和家人，平常多帮助自己的好友，甚至可以搞一些线下的聚会。让别人感觉到你是个热 情、幽默、爱交朋友的人，时间长了自己的个人形象就树立起来了。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 1, 1),
(10, '站群建站及优化策略需要注意哪些事项','站群这个名词在10年到12年间曾风靡一时，如同当年的web网页点击器一样，可以迅速的抬高排名，批量关键词注入，收获各种关键词推荐来的订单，流量方面也有很大的保障', UNIX_TIMESTAMP(), 1, '易迅', '<p>	 站群这个名词在10年到12年间曾风靡一时，如同当年的web网页点击器一样，可以迅速的抬高排名，批量关键词注入，收获各种关键词推荐来的订单，流量方面也有很大的保障，而投入方面也不用过多的资源人力，从而获得当时各个公司的青睐，然后，随着12年的寒流飘过，13年的时候，站群建设及优化已经很少有公司或个人去做了，一方面百度的打击力度导致翻倍的成本投入，其次百度自身产品排名的提升使得站群的制作越来越显得吃力不讨好的地步，所以到如今，站群的地位就是结结实实的鸡肋了，吃之无味弃之可惜，而本文从自身站群操作的角度再来谈谈站群优化需要注意的一些事项及一些启发。<br />	<br />	　　建站方面<br />	<br />	　　服务器：对于虚拟机服务器的IP段，一定不要选择同一段的IP，对于后期的网站维护网站搬家，及百度对于站群的判断都有着莫大的影响，所以在购买虚拟空间的时候，可以从不同的服务商处购买更符合我们的站群需求。<br />	<br />	　　源码：对于做过站群的人来说，大家都知道，几乎所有的站群用的都是开源代码，对于成本的节约有着莫大的作用，一般能用就直接上了，比如国内目前比较实 用的一些开源程序，PHPCMS，ASPCMS，DEDECMS以及wordpress，甚至是ZBLOG等等，都可以作为我们的开源程序使用，而本人当 时建设的站群使用的源码为PHPWIND，当然，这套开源代码即便是现在也有很多的用户群体在使用，这套开源代码的几点主要好处有，修改方面，不管是模块 还是栏目，完全是傻瓜式的建站方式，只要会玩qq空间的人，操作器PHPwind必然没有多大的问题，而phpwind的模块对于日后的优化来说也有着莫 大的帮助，这个优化部分再提。大家可以针对一些开源的程序，有选择性的利用。<br />	<br />	　　排名优化方面<br />	<br />	　　TDK：即标题，关键词和描述，这个大家可以着陆不同类型的关键词，关键词拓展方面大家可以自行百度各种关键词拓展的方式，大部分以产品词为主。关键词密度同理，主要在于将模板关键词进行调整，如果可以让开发开发相关软件进行批量布局再好不过。<br />	<br />	　　内容：原则上能原创尽量做到原创处理，不能原创伪原创处理，由于站群涉及到的站点比较多，大部分原创的方式也很难实现，这个时候，网站模板可以给我们 带来很大的便捷性，由于我们在页面的左边或者右边加入相应的豆腐块，当百度爬取我们的网站的时候，索引到我们的豆腐块及内容页相结合，采用指纹对比技术后 便会将非原创的内容中和掉很多，对于伪原创的方式，简单说下，火车头采集，自行写软件或者下载伪原创软件，大部分为同义词转化，导入即可。<br />	<br />	　　链轮：这个是需要大家在做站群的时候，最最需要注意的地方，链轮的作用可以直接让百度追踪到我们所有网站的相关性，对于做站群来说是大忌。<br />	<br />	　　所以，我们要做的就是将每一个站群网站用单个做站的方式来说，所以耗费的资源和人力也是比较大的，但是，效果也是喜人的。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 1, 0),
(11, '微信公众号推广的那些操作手法','下面我就说说那位算命小伙伴的运营模式。据我了解这位算命伙伴他有三年的网络算命经验，所以积累了一定量的粉丝，以及拥有了一部分的用户群体，那么我就说说这一个月内他是怎么运营的', UNIX_TIMESTAMP(), 1, '易迅', '<p>	一个是做算命的，这个很让我好奇，他每天都能有几个人找他算一次，每次收费三百大洋。 他经过一个月的时间就把微信的粉丝量做到了13000。另一个是小姑娘刚毕业的，他用了20天的时间吧粉丝量做到900多，可能很多的运营者会觉得20天 涨900多的粉丝很简单啊。但是我们试想一下自己当初涨粉的时候有多难，对于她来说是毫无经验的，而且每天花在微信上面的时间仅仅两个小时。<br />	<br />	　　第一.她没有任何的资源<br />	<br />	　　第二.没有找号带<br />	<br />	　　第三.基本没有外部推广<br />	<br />	　　就是因为这让我很是好奇，刚开始20天的运营，粉丝量很少，没有去外部推广，基本是不可能依靠内容转化粉丝的。她告诉我的方式就是靠自己的同学，关注转发收藏。但是现在遇到了瓶颈，就是好友基本用完了，无法再依靠这种方式了。<br />	<br />	　　那下面我就说说那位算命小伙伴的运营模式。据我了解这位算命伙伴他有三年的网络算命经验，所以积累了一定量的粉丝，以及拥有了一部分的用户群体，那么我就说说这一个月内他是怎么运营的。<br />	<br />	　　1.头条推送<br />	<br />	　　我们知道，今日头条是一个用户群体比较高的网站，每天我们在这里面能够找到很多优质的内容以及全国各类新闻，这里面的内容具有及时性。所以内容传播的就比较快。<br />	<br />	　　2.贴吧推广<br />	<br />	　　之前我也讲过关于贴吧的推广，这位伙伴也是依靠自己的内容和贴吧大力的推广来起来。我们知道每个贴吧的流量还是不错的，所以说只要我们的内容好，那么推广起来是十分轻松的。<br />	<br />	　　3.各大论坛<br />	<br />	　　之前我一直没有讲过论坛的推广，因为论坛有的文章需要审核，如果我们的推广内容太多的话那是很难通过审核的。论坛也是一个不错的推广方式，毕竟大的论坛每天浏览的人数还是很多的。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 1, 0),
(12, '企业网站推广没有那么简单','网站企业不是一个独立的存在，他需要其他网站的关键词来辅佐，这样才能吸引蜘蛛对你企业品牌关键词的信任，就是在其他网站做网站关键词就行了，这个任 务每天都要做100个品牌关键词，比如在百度贴吧发文章，文章标题有企业品牌关键词就可以了', UNIX_TIMESTAMP(), 1, '易迅', '<p>	企业网站与商业网站的区别<br />	<br />	　　大多数都知道做外链就是不更新文章，只知道利用网站设置的关键词排名来获取流量，如果说是以前的话这种方法无疑是最好的方法，可现在这种老套的方法已 经淘汰了，这种方法也有作弊的行为。在说了现在很多网站对于网站设置关键词都是不屑。这也是因为现在百度是按照用户搜索带来的流量来确定动态关键词排名 的，所以设不设置关键词都无所谓，对于做互联网媒体网站不设置关键词是最适合的因为更新快，而对于企业没有开通会员功能就需要自己更新，那么自己更新肯定 是很慢，为此还是要设置几个关键词，企业网站不能因为更新慢就不更新网站，这是一种非常严重的问题<br />	<br />	　　网站更新<br />	<br />	　　企业网站每天都要更新，就算你外链再多，如果你不更新那么你像依靠那几个关键词来得到流量是不现实的，更何况你不更新收录就没有了，排名像上去更加难 了，你网站蜘蛛不喜欢你了，怎么可能给你好的排名呢，所以每天都更新，不管你更新三章还是五章，或者说你更新一章也行，只要蜘蛛每天都来抓取一章也能给蜘 蛛好感，还有就是更新要有规律，每天在更新文章的时候一定要统一，给自己定一个时间，比如早上10点或者是下午3点，如果你实在在不能统一时间那么你可以 分为早上、下午、网上、三个阶段拉力更新文章，随然说几个小时的更新差距有点影响，不过蜘蛛就会知道你大概的更新时间，以后蜘蛛就会在你更新最迟的时间来 一次就够了。更新比不可少，每次更新蜘蛛都会给我们企业网站排名。<br />	<br />	　　外链建立<br />	<br />	　　做外链不要盲目的去做，不要以为做的越多越好，其实不是这样的，做外链讲究的是外链质量。数量是次要的。为何这样说呢，因为外链质量不行收录外链就不 稳定，而且带来的评价分数不高自然给我们的排名就不高了。企业做外链要根据网站更新文章的数量来对比，比如你网站更新一篇文章，那么你一天外链就不能超过 50个，如果你超过第一次不会有影响，多了就会被视为作弊，惩罚就是排名下降，收录过慢、所以做外链按照比例来做外链才符合白猫SEO。<br />	<br />	　　做关键词热度<br />	<br />	　　网站企业不是一个独立的存在，他需要其他网站的关键词来辅佐，这样才能吸引蜘蛛对你企业品牌关键词的信任，就是在其他网站做网站关键词就行了，这个任 务每天都要做100个品牌关键词，比如在百度贴吧发文章，文章标题有企业品牌关键词就可以了，很多地方都可以做品牌关键词的，比如博客，论坛。微博、还有 提问，每天去提问搜狗问问、百度知道。360问答、天涯问答，每个地方提问五个以上。就可以了。<br />	<br />	　　问答回答问题<br />	<br />	　　利用互动的方式来推广品牌也是很有效果的，每天在这些问答平台去回答一些问题，也可以适当的插入外链，不过建议你在百度知道、360问答不要插入外链，因为经过我的研究这些地方只有你的等级高了才能适当插入外链，比如百度知道要4级，360好像要27级才可以。<br />	<br />	　　B2B平台发布<br />	<br />	　　B2B平台是企业最喜欢的地方了，因为B2B平台发布信息非常好，还可以带来几个客户。是每个企业都喜欢的地方了，不过你也可以利用分类信息网站做外链，这样也可以提高网站关键词排名。</p>', '易迅,网站源码,免费源码,PHP', 4, 1, 1, 1, 0),
(13, '易迅BS软件助力中国企业步入健康发展快车道','易迅BS软件助力中国企业健康发展快车道', UNIX_TIMESTAMP(), 1, '易迅', '<p>	　　YIXUNCMS是一款专门为我国中小型企业设计开发的建站系统，完全开源免费；易迅BS软件工作室一直从事企业网站的设计与开发，在7年的时间里我们发现企业建站的方式各式各样，程序员的水平良莠不齐，一个普通的企业站基本的要求就是前端简洁大方、后台管理方便，因为一般的企业网站均没有专业的网站管理人员，他们对各式各样的网站后台使用感到困惑。</p><p>	　　众多的企业站采用DEDECMS、PHPCMS等开源软件做二次开发，我们并不否认这些开源软件先进性与全面性，但对于大部分没有专业知识的企业人员来说使用功能强大的后台无疑感到棘手、力不从心，而如此功能强大的系统也增加了企业站的体积，用另一方面来讲，企业站的基出功能大同小异，有见于此，我们为何不用一个简洁的系统去完成企业站的功能呢？</p><p>	　　YIXUNCMS在开发之初，就将目标定位在了简洁上，使得无论具备专业知识都可以轻松搭建并管理自己的企业站，就像微信的一句广告语：再小的个体也有自己的品牌。我们真诚的希望YIXUNCMS在使用上能给管理者以轻松、一目了然的感觉，使其不拘泥于复杂的管理而纠结。</p><p>	　　易迅BS软件助力中国企业站更加快速、高效、实用。</p>', '易迅,网站源码,免费源码,PHP', 2, 1, 1, 1, 1),
(14, '究竟哪些建站产品是您信得过的？','究竟哪些建站产品是您信得过的？', UNIX_TIMESTAMP(), 1, '易迅', '<p>究竟哪些建站产品是您信得过的？</p>', '易迅,网站源码,免费源码,PHP', 2, 1, 1, 1, 0),
(15, 'YIXUNCMS共享版与授权版的区别','易迅BS软件工作室致力于为中国企业提供最实用、高效、简洁的网站软件产品。继YIXUCNMS1.0版本后，易迅工作室陆续推出了2.0简约版及时尚版，累计下载量达万次以上，易迅软件工作室感谢广大站长及源码爱好者的支持。', UNIX_TIMESTAMP(), 1, '易迅', '<p>YIXUNCMS共享版与授权版的区别</p>', '易迅,网站源码,免费源码,PHP', 2, 1, 1, 1, 0),
(16, '各类建站软件的优势对比','2.0.4是一套优化整合版，涵盖了目前YIXUNCMS系列版本的所有功能并在现在功能基础上进行相应扩展，优化了界面设计及用户体验，希望我们的努力能为您的工作带来方便', UNIX_TIMESTAMP(), 1, '易迅', '<p>各类建站软件的优势对比</p>', '易迅,网站源码,免费源码,PHP', 1, 1, 1, 0, 1),
(17, '企业究竟该如何选择建站软件？','易迅BS软件工作室致力于为中国企业提供最实用、高效、简洁的网站软件产品。继YIXUCNMS1.0版本后，易迅工作室陆续推出了2.0简约版及时尚版，累计下载量达万次以上，易迅软件工作室感谢广大站长及源码爱好者的支持。', UNIX_TIMESTAMP(), 1, '易迅', '<p>	中国的中小型企业究竟该如何选择建站软件？</p>', '易迅,网站源码,免费源码,PHP', 2, 1, 1, 1, 0),
(18, '感谢您选择并使用YIXUNCMS建站软件加强版','2.0.4是一套优化整合版，涵盖了目前YIXUNCMS系列版本的所有功能并在现在功能基础上进行相应扩展，优化了界面设计及用户体验，希望我们的努力能为您的工作带来方便', UNIX_TIMESTAMP(), 1, '易迅', '<p>易迅BS软件工作室致力于为中国企业提供最实用、高效、简洁的网站软件产品。继YIXUCNMS1.0版本后，易迅工作室陆续推出了2.0简约版及时尚版，累计下载量达万次以上，易迅软件工作室感谢广大站长及源码爱好者的支持。<br>2.0.4是一套优化整合版，涵盖了目前YIXUNCMS系列版本的所有功能并在现在功能基础上进行相应扩展，优化了界面设计及用户体验，希望我们的努力能为您的工作带来方便，请记住我们的网址：http://www.ys-bs.com。
</p>', '易迅,网站源码,免费源码,PHP', 2, 1, 1, 1, 0);

# --------------------------------------------------------
# 转存表中的数据 `yx_banner`
# --------------------------------------------------------
INSERT INTO yx_banner (`id`, `title`, `pic`, `links`, `display`, `ord`) VALUES
(1, '第一张焦点图', '1.jpg', '#', 1, 0),
(2, '第二张焦点图', '2.jpg', '#', 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_advert`
# --------------------------------------------------------
INSERT INTO yx_advert (`id`, `wz`, `pic`, `links`, `display`, `ord`) VALUES
(1, 1, '20151202132405_826.png', '#', 1, 0);

# --------------------------------------------------------
# 转存表中的数据 `yx_column`
# --------------------------------------------------------
INSERT INTO yx_column (`id`, `pid`, `picid`, `path`, `title`, `description`, `audit`, `ord`, `display`, `callid`) VALUES
(1, 0, 13, '0', '资讯动态', '资讯动态', 0, 0, 1, 0),
(2, 1, 14, '0-1', '公司动态', 'Company news', 0, 0, 1, 1),
(3, 5, 15, '0-5', '建站经验', 'Site experience', 0, 0, 1, 1),
(4, 1, 12, '0-1', '行业动态', 'Industry news', 0, 0, 1, 1),
(5, 0, 10, '0', '技术文摘', '技术文摘', 0, 0, 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_flink`
# --------------------------------------------------------
INSERT INTO yx_flink (`id`,`webname`,`url`,`logo`,`rname`,`email`,`dtime`,`msg`,`list`,`audit`,`ord`) VALUES
(NULL,'易迅BS软件','http://www.ys-bs.com','yixun.gif','易迅','1652368686@qq.com',UNIX_TIMESTAMP(),'易迅BS软件','0','1','0');

# --------------------------------------------------------
# 转存表中的数据 `yx_fun`
# --------------------------------------------------------
INSERT INTO yx_fun (`id`, `title`, `content`, `audit`, `ord`) VALUES
(1, '联系方式', '<p>	易迅软件技术工作室</p><p>	网址：http://www.ys-bs.com<br />	企鹅：1652368686<br />	信箱：1652368686@qq.com<br />	电话：15284330477</p>', 1, 0),
(2, '首页公司概况', "<p><img src=http://www.ys-bs.com/yixun.png align=left style=margin-right:10px>	易迅软件是一家从事BS架构软件应用及开发的工作团队，专注服务于国内中小型企业单位、各级院校网站平台及WEB应用系统的设计与研发，旨在通过更加简易的搭建过程、更简单的维护特性、更省心的系统升级为用户寻找一种更为高效、经济的建站方式。目前易迅软件已广泛应用于国内数千家网站，数百家网络公司使用YIXUNCMS系统进行网站搭建，简洁的界面、简易的操作得到了广大企业的认可</p>", 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_group`
# --------------------------------------------------------
INSERT INTO yx_group (`id`, `groupname`, `description`, `useradmin`, `webadmin`, `articleadmin`, `sendcomment`, `photoadmin`, `jobadmin`, `boardadmin`, `funadmin`) VALUES
(1, '超级管理员', '超级管理员用户组，该组的用户具有全部的权限', 1, 1, 1, 1, 1, 1, 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_job`
# --------------------------------------------------------
INSERT INTO yx_job (`id`, `title`, `address`, `treatment`, `number`, `starttime`, `endtime`, `content`) VALUES
(1, 'PHP程序员', '北京市海淀区幸福路62号', '5000.00', 10, 1429369625, 0, '<p>	要求：<br />	1、大专以上学历<br />	2、计算机软件专业<br />	3、思维敏捷、学习能力强，有责任心和团队精神<br />	4、良好的沟通、理解及逻辑分析能力</p>'),
(2, '网站美工', '北京丰台区人民街富豪大厦A座9-501', '3500.00', 3, 1429514008, 0, '<p>	要求：<br />	1、大专以上学历<br />	2、计算机软件专业<br />	3、思维敏捷、学习能力强，有责任心和团队精神<br />	4、良好的沟通、理解及逻辑分析能力</p>');

# --------------------------------------------------------
# 转存表中的数据 `yx_menu`
# --------------------------------------------------------
INSERT INTO yx_menu (`id`, `title`, `pid`, `path`, `target`, `url`, `display`, `ord`) VALUES
(1, '首页', 0, '0', '_self', '/', 1, 0),
(2, '公司简介', 0, '0', '_self', '/index/about/id/1', 1, 1),
(3, '产品展示', 0, '0', '_self', '/photo/index/pid/2', 1, 2),
(4, '成功案例', 0, '0', '_self', '/photo/index/pid/4', 1, 3),
(5, '公司图集', 0, '0', '_self', '/photo/prcture/pid/1', 1, 4),
(6, '动态资讯', 0, '0', '_self', '/article/index/pid/1', 1, 5),
(7, '在线留言', 0, '0', '_self', '/index/board', 1, 6),
(8, '企业招聘', 0, '0', '_self', '/index/job', 1, 7),
(9, '联系我们', 0, '0', '_self', '/index/about/id/3', 1, 8),
(10, '企业概况', 2, '0-2', '_self', '/index/about/id/1', 1, 0),
(11, '业务范围', 2, '0-2', '_self', '/index/about/id/2', 1, 0),
(12, '蓝色经典系列', 3, '0-3', '_self', '/photo/index/pid/2', 1, 0),
(13, '绿色清新系列', 3, '0-3', '_self', '/photo/index/pid/7', 1, 0),
(14, '红色大气系列', 3, '0-3', '_self', '/photo/index/pid/8', 1, 0),
(15, '公司活动', 5, '0-5', '_self', '/photo/prcture/pid/2', 1, 0),
(16, '装修图库', 5, '0-5', '_self', '/photo/prcture/pid/1', 1, 0),
(17, '联系我们', 2, '0-2', '_self', '/index/about/id/3', 1, 0),
(18, '公司新闻', 6, '0-6', '_self', '/article/index/pid/2', 1, 0),
(19, '行业动态', 6, '0-6', '_self', '/article/index/pid/4', 1, 0),
(20, '建站经验', 6, '0-6', '_self', '/article/index/pid/3', 1, 0);

# --------------------------------------------------------
# 转存表中的数据 `yx_notice`
# --------------------------------------------------------
INSERT INTO yx_notice (`id`, `title`, `color`, `starttime`, `endtime`, `content`, `display`, `ord`) VALUES
(1, '网站用图声明', 'DB0000', 1439991868, 0, '<p>	本网站中所使用的部分图片均来源于互联网，仅为网站系统测试使用，图片版权规源网站、单位及个人所有，任何单位或个人不得使用其用于商业宣传或其它用途。</p>', 1, 0);

# --------------------------------------------------------
# 转存表中的数据 `yx_phcolumn`
# --------------------------------------------------------
INSERT INTO yx_phcolumn (`id`, `pid`, `path`, `title`, `description`, `audit`, `ord`, `display`,`callid`) VALUES
(1, 0, '0', '产品展示', '产品展示', 0, 0, 1, 1),
(2, 1, '0-1', '蓝色经典系列', '产品类别一', 0, 0, 1, 1),
(3, 0, '0', '成功案例', '成功案例', 0, 0, 1, 2),
(4, 3, '0-3', 'YIXUNCMS模板', '案例展示一', 0, 0, 1, 2),
(5, 3, '0-3', '企业定制', '案例展示二', 0, 0, 1, 2),
(6, 3, '0-3', '系统开发', '案例展示三', 0, 0, 1, 2),
(7, 1, '0-1', '绿色清新', '产品类别二', 0, 0, 1, 1),
(8, 1, '0-1', '红色大气系列', '产品展示三', 0, 0, 1, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_photo`
# --------------------------------------------------------
INSERT INTO yx_photo (`id`, `pid`, `uid`, `title`, `summary`, `pic`, `recommend`, `top`, `audit`, `content`, `views`, `posttime`) VALUES
(1, 5, 1, '德瑞玻璃制品有限公司', '无描述','20150422142428_107.jpg', 1, 0, 1, '<p>	德瑞玻璃制品有限公司是以阿拉伯水烟生产为主，玻璃仪器加工，石英（过渡）玻璃仪器加工，玻璃加工用专用工具、设备，玻璃灯工用火头生产销售。企业团队拥有20年的玻璃加工经验，以质量为立足之根，以信誉为发展之本。面向未来，我公司将继续秉承诚信、合作、共赢的经营理念，为全球范围内厂商提供优质的产品和周到的服务。</p><p>	德瑞玻璃制品有限公司采用YIXUNCMS1.0网站管理平台进行搭建。</p>', 17, UNIX_TIMESTAMP()),
(2, 5, 1, '天才声儿童培训机构', '无描述', '20150422142955_623.jpg', 1, 0, 1, '<p>	天才声是金言教育继成功打造全国知名主持人培训品牌金话筒之后推出的少儿主持培训品牌。心中有爱，是天才声赋予教育团队永恒的心灵支撑。正因为有爱，所以愿意学习，学习最好的理念，创新最优的方法，助力我们的学员，茁壮成长。</p>', 3, UNIX_TIMESTAMP()),
(3, 5, 1, '北京中凯维斯商贸中心', '无描述', '20150422151745_566.jpg', 1, 1, 1, '<p>	皇朝汗蒸材料隶属于北京中凯维斯商贸中心，是专业从事汗蒸房的承建业务的工程公司，业务范围覆盖全国各个省市。伴随着国内汗蒸房行业的发展，皇朝汗蒸材料 也在不断进步。在服务客户的同时，不断提升公司形象能更好的向行业提供更优质、更标准的韩式汗蒸房。经过6年的时间发展，本公司对于汗蒸房建设所用的锗石 靠背、托玛琳地砖、汗蒸房竹帘等材料均是独立生产，并可根据客户的需求为客户打造最合适的型号和尺寸实现了为每个客户量身打造需求的目标。</p><p>	本网站采用YIXUNCMS1.0.3管理平台搭建</p><p style=&quottext-align: center&quot>	网站首页预览</p>', 5, UNIX_TIMESTAMP()),
(4, 5, 1, '金石集团', '无描述', '20150422145232_295.jpg', 1, 1, 1, '<p>	金石集团是一家专业从事航空培训，房地产开发，母婴保健，汽车租凭，商务包机，航空快递的综合性商务公司金石集团是一家专业从事航空培训，房地产开发，母 婴保健，汽车租凭，商务包机，航空快递的综合性商务公司金石集团是一家专业从事航空培训，房地产开发，母婴保健</p>', 0, UNIX_TIMESTAMP()),
(5, 4, 1, '北京斯凯德门窗有限公司', '无描述', '20150422141831_496.jpg', 1, 0, 1, '<p>	北京斯凯德门窗有限公司成立于2005年， 是中德合资、一家专业的节能环保门窗生产加工厂，专业生产、加工、销售断桥铝型材、铝包木、木包铝、实木型材、欧式阳光房、高档幕墙等多种产品，是我国品 种系列最全，技术最专业的门窗大型生厂商之一。注册资金一百万，是中国一家集门窗建材类产品的生产、设计、制作和安装的一体化的综合性企业。</p><p>	北京斯凯德门窗有限公司网站采用YIXUNCMS1.0.3管理平台进行搭建。</p>', 6, UNIX_TIMESTAMP()),
(6, 4, 1, '奥信投资基金管理有限公司', '无描述', '20150422145730_153.jpg', 1, 0, 1, '<p>	　　奥信汇富投资基金管理（北京）有限公司（简称公司）是在中国证券投资基金业协会备案登记的国内领先的股权投资和基金管理专业机构，是中国投资协会股权和创业投资专业委员会常务理事单位，北京湖北企业商会副会长单位。公司主营基金管理、股权投资、夹层融资等投融资业务，是一家以股权投资为核心，同时开展财富管理、投资银行等综合金融服务的基金管理平台，致力于为投资者提供专业资产管理服务。</p>', 1, UNIX_TIMESTAMP()),
(7, 4, 1, '九鼎益康肉业有限公司', '无描述', '20150422150711_152.jpg', 1, 0, 1, '<p>	九鼎益康肉业本着为广大消费者提供绿色餐桌的理念！自1970年发展至今，从单一的羊肉屠宰销售，发展到猪、牛、羊、鸡、的屠宰及分割销售为一体的综合性食品销售公司。并涉及食品的深加工、火锅、烧烤食品的制作销售等多个领域，同时附带各种家用调料，火锅及烧烤调料的制作与销售！</p>', 3, UNIX_TIMESTAMP()),
(8, 4, 1, '东方雅德装饰工程有限公司', '无描述', '20150422144619_203.jpg', 1, 0, 1, '<p>	北京东方雅德装饰工程有限公司是国内一家专业致力于柔性软膜天花销售、安装、维护一体化的装饰新技术公司。完美的品牌形象、顶尖的技术、产品花色多样化、产品质量符合国家标准、专业强大的施工队伍、高精密的生产设备、完善的售后服务系统、低廉的价格保障了各基层客户的贴身利益。</p>', 1, UNIX_TIMESTAMP()),
(9, 4, 1, '天将纵横供热有限公司', '无描述', '20150422143552_360.jpg', 1, 0, 1, '<p>	北京天将纵横供热有限公司是一家从事供热系统节能改造、EMC模式合同能源管理、供热锅炉房整体托管、柴油、燃料油、储备、运输、配送、与一体的专业化公司。目前公司拥有能源管理锅炉房40余座，共涉及供暖面积200万平米。司炉人员150名、管理层人员20名、高级暖通技术工程师8名、机电维修师6名、工程施工人员30名。</p>', 0, UNIX_TIMESTAMP()),
(10, 4, 1, '诺航汇教育科技有限公司', '无描述', '20150422144030_129.jpg', 1, 0, 1, '<p>	北京诺航汇教育科技有限公司是一家经国家工商行政管理部门依法批准的专业化教育科技公司。公司始终以注重信誉、关注细节、服务社会、输出人才的公司理念，致力于服务全球经济一体化背景下的人才培养的教育模式，培养具有高技能、高水平和具有市场竞争力的高级职业人才。倡导理论学习和实例教学、培训与咨询相结合的高效教育方法。服务内容注重前沿新知、知识技能和理念价值三层面的有机结合。</p>', 2, UNIX_TIMESTAMP()),
(11, 2, 1, 'YIXUNCMS2.0简约版', '无描述', '20150422152154_324.jpg', 1, 0, 1, '<p>请在后台自行修改或删除...</p>', 0, UNIX_TIMESTAMP()),
(12, 2, 1, 'YIXUNCMS2.0.4加强版', '无描述', '20150422152233_826.jpg', 1, 0, 1, '<p>请在后台自行修改或删除...</p>', 3, UNIX_TIMESTAMP()),
(13, 8, 1, 'YIXUNCMS2.0.3时尚版', '无描述', '20150422154130_799.jpg', 1, 0, 1, '<p>请在后台自行修改或删除...</p>', 0, UNIX_TIMESTAMP()),
(14, 8, 1, 'YIXUNCMS2.0简约移动版', '无描述', '20150422154304_688.jpg', 1, 0, 1, '<p>请在后台自行修改或删除...</p>', 2, UNIX_TIMESTAMP()),
(15, 7, 1, 'YIXUNCMS1.0标准版', '无描述', '20150422154645_970.jpg', 1, 1, 1, '<p>请在后台自行修改或删除...</p>\r\n', 1, UNIX_TIMESTAMP()),
(16, 2, 1, 'YIXUNCMS2.0简约版', '无描述', '20150422154928_963.jpg', 1, 0, 1, '<p>请在后台自行修改或删除...</p>', 4, UNIX_TIMESTAMP());

# --------------------------------------------------------
# 转存表中的数据 `yx_wapmenu`
# --------------------------------------------------------
INSERT INTO yx_wapmenu (`id`, `title`, `url`, `display`, `ord`) VALUES
(1, '网站首页', '/', 1, 0),
(2, '公司简介', '/index/about', 1, 1),
(3, '产品展示', '/index/product', 1, 2),
(4, '新闻中心', '/index/article', 1, 4),
(5, '在线留言', '/index/board', 1, 5),
(6, '企业招聘', '/index/job', 1, 6);

# --------------------------------------------------------
# 转存表中的数据 `yx_wappic`
# --------------------------------------------------------
INSERT INTO yx_wappic (`id`, `title`, `pic`, `links`, `type`, `ord`) VALUES
(1, '第一张', 'banner.jpg', '/', 1, 0),
(2, '第二张', 'banner2.jpg', '/', 0, 1);

# --------------------------------------------------------
# 转存表中的数据 `yx_album`
# --------------------------------------------------------
INSERT INTO yx_album (`id`, `pid`, `path`, `title`, `description`,`display`) VALUES
(1, 0, '0', '装修图库', '感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步',1),
(2, 0, '0', '公司活动', '感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步',1),
(3, 0, '0', '网站用图', '感谢您选择使用YIXUNCMS企业网站建设软件，易迅BS软件与您共同进步',0);

# --------------------------------------------------------
# 转存表中的数据 `yx_image`
# --------------------------------------------------------
INSERT INTO yx_image (`id`, `pid`, `name`, `title`, `thumb`, `water`) VALUES
(1, 2, '20150707214748_412.jpg', '公司图集', 1, 1),
(2, 2, '20150707214735_876.jpg', '公司图集', 1, 1),
(3, 2, '20150707214718_706.jpg', '公司图册', 1, 1),
(4, 2, '20150707214710_674.jpg', '公司图册', 1, 1),
(5, 2, '20150707214703_398.jpg', '公司图册', 1, 1),
(6, 2, '20150707214655_119.jpg', '公司图册', 1, 1),
(8, 1, '20150707215330_840.jpg', '公司图册', 1, 1),
(9, 1, '20150707215316_258.jpg', '公司图册', 1, 1),
(10, 1, '20150707215420_971.jpg', '公司图册', 1, 1),
(11, 1, '20150707215301_706.jpg', '公司图册', 1, 1),
(12, 1, '20150707215245_933.jpg', '公司图册', 1, 1),
(13, 1, '20150707215224_781.jpg', '公司图册', 1, 1),
(14, 3, '20151028210951_588.jpg', '公司图册', 0, 1),
(15, 3, '20151028210951_167.jpg', '公司图册', 0, 1);