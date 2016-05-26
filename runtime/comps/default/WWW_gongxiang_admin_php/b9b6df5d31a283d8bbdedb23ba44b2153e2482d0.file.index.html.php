<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 16:59:43
         compiled from "./admin/views/default\webbak\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2166756b1c17f7fbd71-90771840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b6df5d31a283d8bbdedb23ba44b2153e2482d0' => 
    array (
      0 => './admin/views/default\\webbak\\index.html',
      1 => 1450077909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2166756b1c17f7fbd71-90771840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1c17f822e79_06829681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1c17f822e79_06829681')) {function content_56b1c17f822e79_06829681($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 压缩包管理 > 管理压缩包</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>