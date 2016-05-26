<?php /* Smarty version Smarty-3.1.8, created on 2016-03-21 16:32:58
         compiled from "./admin/views/default\wap\add.html" */ ?>
<?php /*%%SmartyHeaderCode:529156efb1baceb396-63984088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9effea25020d365c919a28a5b66816d423bac8' => 
    array (
      0 => './admin/views/default\\wap\\add.html',
      1 => 1442475393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529156efb1baceb396-63984088',
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
  'unifunc' => 'content_56efb1baebffa8_13117825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56efb1baebffa8_13117825')) {function content_56efb1baebffa8_13117825($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 手机网站管理 > 添加图片</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">图片名称<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width">上传图片<span class="red_font">*</span></span>
						<input type="file" name="pic" class="text-box"/>
					</li>
					<li class="dark-row">
						<span class="col_width">链接地址<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="links" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['links'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添加图片">&nbsp;&nbsp;
						<input type="reset" class="button" value="重置图图">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>