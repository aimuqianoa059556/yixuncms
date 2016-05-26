<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:27:13
         compiled from "./admin/views/default\acolumn\add.html" */ ?>
<?php /*%%SmartyHeaderCode:135505715ebe1dc3a14-41541446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02ef36647c7371e48e3c46562f0cdbfb3222c852' => 
    array (
      0 => './admin/views/default\\acolumn\\add.html',
      1 => 1448785964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135505715ebe1dc3a14-41541446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715ebe1e11c13_79659933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ebe1e11c13_79659933')) {function content_5715ebe1e11c13_79659933($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 单页栏目管理 > 添加单页栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="dark-row">
					<span class="col_width">栏目标题 <span class="red_font">*</span> </span>
					<input type="text" name="title" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="text-box" />
				</li>
				<li class="light-row">
					<span class="col_width" style="margin-top:30px;">栏目描述 <span class="red_font">*</span> </span>
					<textarea name="description" cols="30" rows="5" class="text-box"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
				</li>
				<li class="dark-row">
					<span class="col_width">是否开启</span>
					<input type="radio" name="audit" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"||$_smarty_tpl->tpl_vars['post']->value['audit']==''){?>checked<?php }?>/>是
					<input type="radio" name="audit" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"){?>checked<?php }?>/>否
				</li>
				<li class="light-row">
					<span class="col_width"></span>
					<input type="submit" class="button" value="添加栏目" />
					<input type="reset" class="button" value="重 置" />
				</li>				
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>