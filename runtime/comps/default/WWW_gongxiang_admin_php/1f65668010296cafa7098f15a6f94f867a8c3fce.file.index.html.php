<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:30:21
         compiled from "./admin/views/default\phcolumn\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1209256b19e7da43350-00141128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f65668010296cafa7098f15a6f94f867a8c3fce' => 
    array (
      0 => './admin/views/default\\phcolumn\\index.html',
      1 => 1416463151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209256b19e7da43350-00141128',
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
  'unifunc' => 'content_56b19e7da91556_84120364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19e7da91556_84120364')) {function content_56b19e7da91556_84120364($_smarty_tpl) {?><script>
	var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 产品栏目管理 > 管理产品栏目</div>
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