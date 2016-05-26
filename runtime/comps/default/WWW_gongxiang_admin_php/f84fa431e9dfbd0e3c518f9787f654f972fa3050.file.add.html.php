<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:08:11
         compiled from "./admin/views/default\style\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2138756b17d2bb196a7-45739940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84fa431e9dfbd0e3c518f9787f654f972fa3050' => 
    array (
      0 => './admin/views/default\\style\\add.html',
      1 => 1448952201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138756b17d2bb196a7-45739940',
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
  'unifunc' => 'content_56b17d2bb678a3_41132486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17d2bb678a3_41132486')) {function content_56b17d2bb678a3_41132486($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理-常规设置-安装模板</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width" style="width:100px;">模板标识&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="styleen" size="15" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['styleen'];?>
">
						&nbsp;&nbsp;即模板文件夹的名字，为避免错误此处仅允许填写英文字符.
					</li>
					<li class="light-row">
						<span class="col_width" style="width:100px;">模板名称&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="stylename" size="15" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['stylename'];?>
">
						&nbsp;&nbsp;用户自定义，方便在切换时识别.
					</li>
					<li class="dark-row">
						<span class="col_width" style="width:100px;">&nbsp;</span>
						<input type="submit" class="button" name="mod" value="安 装">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>