<?php /* Smarty version Smarty-3.1.8, created on 2016-04-30 17:45:46
         compiled from "./admin/views/default\photo\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1768757247ecade2190-22304232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88583ad9b58612742bbcbc2b6b65e4e57ee0168b' => 
    array (
      0 => './admin/views/default\\photo\\add.html',
      1 => 1444893136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768757247ecade2190-22304232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57247ecae72a36_10585019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57247ecae72a36_10585019')) {function content_57247ecae72a36_10585019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 展示管理 > 添加展示</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">展示类别 <span class="red_font">*</span> </span>
						  <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 <label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
					</li>
					<li class="light-row">
						<span class="col_width">展示名称 <span class="red_font">*</span> </span>
						<input type="text" class="text-box" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40">
					</li>
					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">展示摘要</span>
						<textarea class="text-box" name="summary" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
					<li class="dark-row">
						<span class="col_width">缩略图 <span class="red_font"></span> </span>
						<input type="file" name="pic" class="text-box"/>
						&nbsp;&nbsp;图片必须≤2M.
					</li>
					<li class="dark-row">
						<span class="col_width">首页推荐</span>
						<input type="radio"  name="recommend" <?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==1){?>checked<?php }?>  value="1"> 推荐
						<input type="radio"  name="recommend" <?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==0){?>checked<?php }?> value="0"> 不推荐
					</li>
					<li class="light-row">
						<span class="col_width">展示点亮</span>
						<input type="radio"  name="top" <?php if ($_smarty_tpl->tpl_vars['post']->value['top']==1){?>checked<?php }?>  value="1"> 点亮
						<input type="radio"  name="top" <?php if ($_smarty_tpl->tpl_vars['post']->value['top']==0){?>checked<?php }?> value="0"> 不点亮
					</li>
					<li class="light-row" style="margin:0px; padding:0px">
						<textarea cols="80" rows="10" name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>