<?php /* Smarty version Smarty-3.1.8, created on 2016-04-30 17:40:34
         compiled from "./admin/views/default\phcolumn\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1632757247d92704ca9-91852257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b541066d4dff2a80c5f950e83df6f9fd0def333b' => 
    array (
      0 => './admin/views/default\\phcolumn\\add.html',
      1 => 1444892690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632757247d92704ca9-91852257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57247d928d5a95_47232820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57247d928d5a95_47232820')) {function content_57247d928d5a95_47232820($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 产品栏目管理 > 添加产品栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="light-row">
					<span class="col_width">上级栏目 <span class="red_font">*</span> </span>
					<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
<input type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1" />记住分类
				</li>
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
					<span class="col_width">是否审核</span>
					<input type="radio" name="audit" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"||$_smarty_tpl->tpl_vars['post']->value['audit']==''){?>checked<?php }?>/>是
					<input type="radio" name="audit" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"){?>checked<?php }?>/>否
				</li>
				<li class="light-row">
					<span class="col_width">前台调用</span>
					<input type="radio" name="callid" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['callid']=="1"){?>checked<?php }?>/>产品
					<input type="radio" name="callid" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['callid']=="2"){?>checked<?php }?>/>案例
					<input type="radio" name="callid" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['callid']=="3"||$_smarty_tpl->tpl_vars['post']->value['callid']==''){?>checked<?php }?>/>取消
				</li>				
				<li class="dark-row">
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