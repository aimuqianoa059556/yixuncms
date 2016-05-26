<?php /* Smarty version Smarty-3.1.8, created on 2016-03-18 17:48:44
         compiled from "./home/views/default\index\notice.html" */ ?>
<?php /*%%SmartyHeaderCode:290156ebcefc00efb7-13025637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647e741fcca3b56239d2fece8d4b4e477c1e86a2' => 
    array (
      0 => './home/views/default\\index\\notice.html',
      1 => 1450183239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290156ebcefc00efb7-13025637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ebcefc108fe0_69835164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebcefc108fe0_69835164')) {function content_56ebcefc108fe0_69835164($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="content" style="width:1180px;margin:10px auto;">
		<div class="title blocktitle">首页 / 站内公告</div>
		<div class="bottombor con3">
		<div  class="newbigtitle" style="color:#<?php echo $_smarty_tpl->tpl_vars['notice']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['notice']->value['title'];?>
</div>
			<div class="column">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['notice']->value['starttime'],"%Y-%m-%d");?>
</div>
			<div class="procontent">
				<?php echo $_smarty_tpl->tpl_vars['notice']->value['content'];?>
	
			</div>
		</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>