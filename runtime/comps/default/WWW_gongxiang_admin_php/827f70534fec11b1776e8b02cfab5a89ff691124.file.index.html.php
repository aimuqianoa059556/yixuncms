<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:32:09
         compiled from "./admin/views/default\column\index.html" */ ?>
<?php /*%%SmartyHeaderCode:305656b19ee911c0b8-57699215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827f70534fec11b1776e8b02cfab5a89ff691124' => 
    array (
      0 => './admin/views/default\\column\\index.html',
      1 => 1415973518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305656b19ee911c0b8-57699215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19ee916a2c3_41029676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19ee916a2c3_41029676')) {function content_56b19ee916a2c3_41029676($_smarty_tpl) {?><script>
	var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 栏目管理 > 管理栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/ord" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="dark-row">
					<span class="col_width2 width_font">栏目名称</span>
					<span class="width_font">操作</span>
				</li>
				<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

				<li class="light-row">
					<span class="col_width">
						<input type="submit" name="order" value="重新排序" class="button" />
					</span>
				</li>
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>