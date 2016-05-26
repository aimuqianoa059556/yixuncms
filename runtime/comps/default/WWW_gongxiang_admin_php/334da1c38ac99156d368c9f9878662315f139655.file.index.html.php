<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 17:34:44
         compiled from "./admin/views/default\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:263956b17c7fdd7827-02950449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334da1c38ac99156d368c9f9878662315f139655' => 
    array (
      0 => './admin/views/default\\index\\index.html',
      1 => 1454492066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263956b17c7fdd7827-02950449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c7fdfe920_36656148',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c7fdfe920_36656148')) {function content_56b17c7fdfe920_36656148($_smarty_tpl) {?>﻿<html>
	<head>
		<title>企业网站后台管控系统</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="资质代理" />
	</head>

	<frameset rows="63,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>


<?php }} ?>