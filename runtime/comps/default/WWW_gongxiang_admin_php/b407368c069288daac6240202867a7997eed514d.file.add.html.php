<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:09:48
         compiled from "./admin/views/default\fun\add.html" */ ?>
<?php /*%%SmartyHeaderCode:180105715af8c963dd5-18896016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b407368c069288daac6240202867a7997eed514d' => 
    array (
      0 => './admin/views/default\\fun\\add.html',
      1 => 1417421173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180105715af8c963dd5-18896016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715af8cb5fad3_80780093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715af8cb5fad3_80780093')) {function content_5715af8cb5fad3_80780093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 单页管理 > 添加单页</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span style="margin:0px 20px 0px 20px;">扩展标题 <span class="red_font">*</span> </span>
						<input type="text" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" title="请填写单页标题" class="text-box"/>
					</li>
					<li class="light-row">
						<span style="margin:0px 20px 0px 20px;">请在下面填写扩展内容</span>
					</li>					
					<li class="light-row">
					<textarea cols="80" rows="10" name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</li>					
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						<input type="radio" name="audit"  <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"||$_smarty_tpl->tpl_vars['post']->value['audit']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"){?> checked <?php }?> value="0"> 不显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
           </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>