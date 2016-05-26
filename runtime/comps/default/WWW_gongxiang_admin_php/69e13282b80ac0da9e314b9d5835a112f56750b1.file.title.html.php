<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:05:48
         compiled from "./admin/views/default\public\title.html" */ ?>
<?php /*%%SmartyHeaderCode:3267156b17c9c4afea3-95292351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e13282b80ac0da9e314b9d5835a112f56750b1' => 
    array (
      0 => './admin/views/default\\public\\title.html',
      1 => 1415795946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267156b17c9c4afea3-95292351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mess' => 0,
    'tmess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c9c4d6fa3_60517236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c9c4d6fa3_60517236')) {function content_56b17c9c4d6fa3_60517236($_smarty_tpl) {?><div class="tip-msg <?php if ($_smarty_tpl->tpl_vars['mess']->value=="error"){?>error-msg<?php }?> <?php if ($_smarty_tpl->tpl_vars['mess']->value=="ok"){?>sucess-msg<?php }?>">
	<span style="font-family:黑体"><?php echo $_smarty_tpl->tpl_vars['tmess']->value;?>
</span>
</div><?php }} ?>