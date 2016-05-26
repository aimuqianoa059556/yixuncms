<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:27:22
         compiled from "./admin/views/default\acolumn\mod.html" */ ?>
<?php /*%%SmartyHeaderCode:169445715ebeaf17981-59239832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39ae5c4261c3a75f03c6d34b9a39c57be080aa8' => 
    array (
      0 => './admin/views/default\\acolumn\\mod.html',
      1 => 1448785958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169445715ebeaf17981-59239832',
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
  'unifunc' => 'content_5715ebeb134e87_27242904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ebeb134e87_27242904')) {function content_5715ebeb134e87_27242904($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 单页栏目管理 > 修改单页栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" method="post">
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
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" name="id"/>
					<input type="submit" class="button" value="修改栏目" />
					<input type="reset" class="button" value="重 置" />
				</li>				
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>