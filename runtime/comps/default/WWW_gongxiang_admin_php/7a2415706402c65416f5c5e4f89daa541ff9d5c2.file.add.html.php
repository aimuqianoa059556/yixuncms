<?php /* Smarty version Smarty-3.1.8, created on 2016-03-18 17:47:54
         compiled from "./admin/views/default\notice\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2543756ebcecab9b920-03086316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a2415706402c65416f5c5e4f89daa541ff9d5c2' => 
    array (
      0 => './admin/views/default\\notice\\add.html',
      1 => 1416132429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543756ebcecab9b920-03086316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'color' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ebcecad7c116_03356314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebcecad7c116_03356314')) {function content_56ebcecad7c116_03356314($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 公告管理 > 添加公告</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="light-row">
					<span class="col_width">公告标题 <span class="red_font">*</span></span>
					<input type="text" name="title" maxlength="80" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="text-box"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
单击为标题选择颜色
				</li>
				<li class="dark-row">
					<span class="col_width">起始日期 <span class="red_font">*</span></span>
					<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
公告开始时间
				</li>
				<li class="light-row">
					<span class="col_width">截止日期</span>
					<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
公告结束时间（留空则长期有效）
					<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">
				</li>
				<li class="dark-row">
					<span class="col_width" style="float:left;padding-top:30px;height:190px">公告内容 <span class="red_font">*</span></span>
					<span style="float:left;height:150px;width:530px;">
					<textarea name="content" cols="150" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
					<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</span>
				</li>
				<li class="light-row">
					<span class="col_width">是否显示</span>
					<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']==1){?>checked<?php }?> value="1" />是
					<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']==0){?>checked<?php }?> value="0" />否
				</li>
				<li class="dark-row">
					<span class="col_width">&nbsp;</span>
					<input type="submit" value="添加公告" class="button" />
					<input type="reset" value="重置公告" class="button" />
					</span>
				</li>				
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>