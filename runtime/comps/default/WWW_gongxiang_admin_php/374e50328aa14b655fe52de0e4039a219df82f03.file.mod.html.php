<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:27:40
         compiled from "./admin/views/default\about\mod.html" */ ?>
<?php /*%%SmartyHeaderCode:201565715ebfca31ff2-98422120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374e50328aa14b655fe52de0e4039a219df82f03' => 
    array (
      0 => './admin/views/default\\about\\mod.html',
      1 => 1448719605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201565715ebfca31ff2-98422120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'acolumn' => 0,
    'row' => 0,
    'select' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715ebfcaa72f9_95652340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ebfcaa72f9_95652340')) {function content_5715ebfcaa72f9_95652340($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 单页管理 > 修改单页</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span style="margin:0px 20px 0px 20px;">所属分类 <span class="red_font">*</span> </span>
						<select name="pid" class="text-box">
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['acolumn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['select']->value['id']==$_smarty_tpl->tpl_vars['row']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</option>
							<?php } ?>
						</select>
					</li>
					<li class="light-row">
						<span style="margin:0px 20px 0px 20px;">单页标题 <span class="red_font">*</span> </span>
						<input type="text" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" title="请填写单页标题" class="text-box"/>
					</li>
					<li class="light-row">
						<span style="margin:0px 20px 0px 20px;">请在下面填写单页内容</span>
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
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
						<input type="submit" class="button" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
           </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>