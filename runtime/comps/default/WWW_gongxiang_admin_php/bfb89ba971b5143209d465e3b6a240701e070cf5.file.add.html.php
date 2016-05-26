<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:30:21
         compiled from "./admin/views/default\banner\add.html" */ ?>
<?php /*%%SmartyHeaderCode:208815715ec9da16a02-14834028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfb89ba971b5143209d465e3b6a240701e070cf5' => 
    array (
      0 => './admin/views/default\\banner\\add.html',
      1 => 1426232731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208815715ec9da16a02-14834028',
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
  'unifunc' => 'content_5715ec9daa72a2_95123028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ec9daa72a2_95123028')) {function content_5715ec9daa72a2_95123028($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 焦点图管理 > 添加焦点图</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">焦点图标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width">焦点图片<span class="red_font">*</span></span>
						<input type="file" name="pic" class="button" />
					</li>
					<li class="dark-row">
						<span class="col_width">链接地址<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="links" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['links'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="1"||$_smarty_tpl->tpl_vars['post']->value['display']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="0"){?> checked <?php }?> value="0"> 不显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添加焦点图">&nbsp;&nbsp;
						<input type="reset" class="button" value="重置焦点图">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>