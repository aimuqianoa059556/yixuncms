<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:29:19
         compiled from "./admin/views/default\acolumn\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1732156b19e3f557079-96004267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd87eeb4bc9190a746d5a53b4a10daf51718696' => 
    array (
      0 => './admin/views/default\\acolumn\\index.html',
      1 => 1448806494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732156b19e3f557079-96004267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19e3f5bc988_17704071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19e3f5bc988_17704071')) {function content_56b19e3f5bc988_17704071($_smarty_tpl) {?><script>
	var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 单页栏目管理 > 管理单页栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="dark-row">
					<span class="list_width width_font">栏目名称</span>
					<span class="list_width width_font">操作</span>
				</li>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<li>
					<span class="list_width">
					<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
					<input class="text-box" type="text" name="ord[]" style="width:20px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ord'];?>
">&nbsp;
					<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
<font color="red">（ID:<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
）</font></span>
					<span class="list_width">
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">编辑</a>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['id']!=1){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" onclick="return confirm('确定要删除该栏目吗？')">删除</a>
					<?php }?>
					</span>
				</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?><li class="light-row">
				暂无栏目请先行添加</li>
				<?php } ?>
				<li class="dark-row">
					<span class="col_width" style="margin-left:20px;width:540px"> 
						<input class="button" name="order" type="submit" value="排 序">
					 </span> 
				</li>
				
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>