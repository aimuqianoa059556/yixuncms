<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 15:02:39
         compiled from "./admin/views/default\base\sysinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:636656b1a60fb4f802-29372928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e53aa58a2f0c6e0267fba27ffe1e22db77bfbfa2' => 
    array (
      0 => './admin/views/default\\base\\sysinfo.html',
      1 => 1416832808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636656b1a60fb4f802-29372928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sysinfo' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a60fbc4b01_58153804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a60fbc4b01_58153804')) {function content_56b1a60fbc4b01_58153804($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理-常规设置-系统信息</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
			<ul class="viewmess">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sysinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']++;
?>
					<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['info']['iteration'])){?>
						<li class="dark-row">
					<?php }else{ ?>
						<li class="light-row">
					<?php }?> 
						<span class="col_width"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

					</li>
				<?php } ?>
			</ul>	
			</div>		
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>