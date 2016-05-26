<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 17:34:45
         compiled from "./admin/views/default\index\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:2193656b17c9b154884-07414304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb9d0bb54ccc275dac6cab89516321e5b944fcd' => 
    array (
      0 => './admin/views/default\\index\\menu.html',
      1 => 1454492009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2193656b17c9b154884-07414304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c9b302381_63535595',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c9b302381_63535595')) {function content_56b17c9b302381_63535595($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="menu" style="border-top:1px solid #FFFFFF;">
	<div class="option">
		<div id="optionmenu" class="menutitle" style="color:#FFFFFF;">
		<?php if ($_GET['pd']=="two"){?>
		【基本管理】
		<?php }elseif($_GET['pd']=="three"){?>
		【文章管理】
		<?php }elseif($_GET['pd']=="four"){?>
		【展示管理】
		<?php }elseif($_GET['pd']=="five"){?>
		【招聘管理】
		<?php }elseif($_GET['pd']=="six"){?>
		【维护与更新】
		<?php }elseif($_GET['pd']=="seven"){?>
		【扩展管理】
		<?php }elseif($_GET['pd']=="eighth"){?>
		【用户管理】
		<?php }elseif($_GET['pd']=="night"){?>
		【移动网站管理】
		<?php }elseif($_GET['pd']=="ten"){?>
		【模板与数据】
		<?php }else{ ?>
		【系统首页】
		<?php }?>
		</div>
	</div>
	<div id="menulist" class="content">
		<?php if ($_GET['pd']=="two"){?>
		<div>
		<h4 onclick="domenu(this, 'list1')" class="tit">--常规管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list1">
			
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/sysinfo" target="main">系统信息</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/baseset" target="main">基本设置</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/menu" target="main">页面导航</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/upcache" target="main">更新缓存</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list40')" class="tit">--留言管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list40">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/board" target="main">查看留言</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>	
		<h4 onclick="domenu(this, 'list4')" class="tit">--公告管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list4">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice/add" target="main">添加公告</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice/" target="main">管理公告</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list22')" class="tit">--单页分类--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list22">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/acolumn/add" target="main">添加分类</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/acolumn" target="main">管理分类</a></li>	
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>	
		<h4 onclick="domenu(this, 'list18')" class="tit">--单页管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list18">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/about/add" target="main">添加单页</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/about" target="main">管理单页</a></li>	
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		<h4 onclick="domenu(this, 'list5')" class="tit">--焦点图管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list5">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/banner/add" target="main">添加焦点图</a></li>	
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/banner" target="main">管理焦点图</a></li>	
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		<h4 onclick="domenu(this, 'list2')" class="tit">--友情链接管理--</h4>
		<?php if ($_SESSION['webadmin']){?>	
		<ul id="list2">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink/add" target="main">添加友情链接</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink" target="main">管理友情链接</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>					
		</div>
		<?php }elseif($_GET['pd']=="three"){?>
		<div>
		<h4 onclick="domenu(this, 'list6')" class="tit">--栏目管理--</h4>
		<?php if ($_SESSION['articleadmin']){?>	
		<ul id="list6">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/column/add" target="main">添加栏目</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/column" target="main">管理栏目</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		<h4 onclick="domenu(this, 'list7')" class="tit">--文章管理--</h4>
		<?php if ($_SESSION['articleadmin']){?>	
		<ul id="list7">
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/add" target="main">添加文章</a></li>
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article" target="main">管理文章</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list8')" class="tit">--幻灯片管理--</h4>
		<?php if ($_SESSION['articleadmin']){?>	
		<ul id="list8">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/play" target="main">管理幻灯</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		</div>
		<?php }elseif($_GET['pd']=="four"){?>
		<div>
		<h4 onclick="domenu(this, 'list9')" class="tit">--展示栏目--</h4>
		<?php if ($_SESSION['photoadmin']){?>	
		<ul id="list9">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/phcolumn/add" target="main">添加展示栏目</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/phcolumn" target="main">管理展示栏目</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		<h4 onclick="domenu(this, 'list10')" class="tit">--展示管理--</h4>
		<?php if ($_SESSION['photoadmin']){?>
		<ul id="list10">
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/add" target="main">添加展示</a></li>
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo" target="main">管理展示</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list9')" class="tit">--相册图集--</h4>
		<?php if ($_SESSION['photoadmin']){?>	
		<ul id="list9">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/add" target="main">添加图集</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album" target="main">管理图集</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		<h4 onclick="domenu(this, 'list10')" class="tit">--相片管理--</h4>
		<?php if ($_SESSION['photoadmin']){?>
		<ul id="list10">
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/add" target="main">添加相片</a></li>
			<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image" target="main">管理相片</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>		
		</div>
		<?php }elseif($_GET['pd']=="five"){?>
		<div>
		<h4 onclick="domenu(this, 'list11')" class="tit">--招聘管理--</h4>
		<?php if ($_SESSION['jobadmin']){?>	
		<ul id="list11">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/job/add" target="main">添加招聘</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/job" target="main">管理招聘</a></li>
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>		
		</div>
		<?php }elseif($_GET['pd']=="six"){?>
		<div>
		<h4 onclick="domenu(this, 'list191')" class="tit">--维护更新--</h4>
		<?php if ($_SESSION['boardadmin']){?>	
		<ul id="list191">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/upgrade/tabname" target="main">查看所有数据表</a></li>	
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/upgrade/" target="main">执行SQL语句</a></li>	
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>			
		</div>
		<?php }elseif($_GET['pd']=="seven"){?>
		<div>
		<h4 onclick="domenu(this, 'list3')" class="tit">--扩展管理--</h4>
		<?php if ($_SESSION['funadmin']){?>	
		<ul id="list3">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/fun/add" target="main">添加扩展</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/fun" target="main">管理扩展</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list30')" class="tit">--广告位管理--</h4>
		<?php if ($_SESSION['funadmin']){?>	
		<ul id="list30">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/advert/add" target="main">添加广告位</a></li>			
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/advert" target="main">管理广告位</a></li>		
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>		
		</div>		
		<?php }elseif($_GET['pd']=="eighth"){?>
		<div>
			<h4 onclick="domenu(this, 'list14')" class="tit">--用户组管理--</h4>
			<?php if ($_SESSION['useradmin']){?>
			<ul id="list14">
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group/add" target="main">添加用户组</a></li>
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group" target="main">编辑用户组</a></li>
			</ul>
			<?php }else{ ?>
				<h4>权限不足</h4>
			<?php }?>			
			<h4 onclick="domenu(this, 'list15')" class="tit">--用户管理--</h4>
			<?php if ($_SESSION['useradmin']){?>
			<ul id="list15">
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/add" target="main">添加用户</a></li>
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user" target="main">编辑用户</a></li>
			</ul>
			<?php }else{ ?>
				<h4>权限不足</h4>
			<?php }?>
		</div>
		<?php }elseif($_GET['pd']=="night"){?>
		<div>
			<h4 onclick="domenu(this, 'list20')" class="tit">--常规管理--</h4>
			<?php if ($_SESSION['sendcomment']){?>
			<ul id="list20">
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/wap/baseset" target="main">基本设置</a></li>
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/wap/menu" target="main">导航设置</a></li>
			</ul>
			<?php }else{ ?>
				<h4>权限不足</h4>
			<?php }?>
			<h4 onclick="domenu(this, 'list21')" class="tit">--焦点图管理--</h4>
			<?php if ($_SESSION['sendcomment']){?>
			<ul id="list21">
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/wap/add" target="main">图片焦点图</a></li>
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/wap/wappic" target="main">焦点图设置</a></li>
			</ul>
			<?php }else{ ?>
				<h4>权限不足</h4>
			<?php }?>			
		</div>
		<?php }elseif($_GET['pd']=="ten"){?>
		<div>
		<h4 onclick="domenu(this, 'list31')" class="tit">--数据备份--</h4>
		<?php if ($_SESSION['funadmin']){?>	
		<ul id="list31">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/databak/add" target="main">备份数据库</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/databak/" target="main">管理备份文件</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/webbak/add" target="main">网站打包</a></li>			
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/webbak/index" target="main">管理压缩包</a></li>	
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>
		<h4 onclick="domenu(this, 'list31')" class="tit">--数据备份--</h4>
		<?php if ($_SESSION['funadmin']){?>	
		<ul id="list31">
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/style/" target="main">模板安装</a></li>
			<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/template/" target="main">模板编辑</a></li>			
		</ul>
		<?php }else{ ?>
		<h4>权限不足</h4>
		<?php }?>		
		</div>
		<?php }else{ ?>
		<div>
			<h4 onclick="domenu(this, 'list16')" class="tit">--系统首页--</h4>
			<ul id="list16">
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/main" target="main">系统首页</a></li>
				<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/system" target="main">软件说明</a></li>
			</ul>
			<h4 onclick="domenu(this, 'list17')" class="tit">--联系方式--</h4>
			<ul id="list17">
				<li><a class="list" href="http://www.baidu.com" target="_blank">官方网址</a></li>
			</ul>
		</div>
		<?php }?>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>