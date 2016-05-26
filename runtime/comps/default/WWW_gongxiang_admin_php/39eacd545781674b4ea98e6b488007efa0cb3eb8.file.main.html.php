<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 17:34:45
         compiled from "./admin/views/default\index\main.html" */ ?>
<?php /*%%SmartyHeaderCode:2171656b17c9c461c93-74899909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39eacd545781674b4ea98e6b488007efa0cb3eb8' => 
    array (
      0 => './admin/views/default\\index\\main.html',
      1 => 1454492050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171656b17c9c461c93-74899909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c9c4afea5_04983159',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c9c4afea5_04983159')) {function content_56b17c9c4afea5_04983159($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理系统首页</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<div class="mar" style="line-height:22px;">
				尊敬的【<?php echo $_SESSION['username'];?>
】您好！今天是：<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
，您是【<?php echo $_SESSION['groupname'];?>
】<br>
				您的权限：<?php echo $_SESSION['description'];?>
<br>
				版本类型：共享版<br>
				</div>
			</div>
			<div class="msg-box">
				<div class="mar" style="line-height:22px;">
				软件承诺：<br>
				■&nbsp;
				</div>
			</div>
			<div class="msg-box">
<iframe src="http://www./" scrolling="no" width="100%" height="300" frameborder="0"></iframe>
			</div>			
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>