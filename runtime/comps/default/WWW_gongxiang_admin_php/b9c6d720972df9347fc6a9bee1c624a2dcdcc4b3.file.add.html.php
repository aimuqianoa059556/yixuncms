<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:08:02
         compiled from "./admin/views/default\about\add.html" */ ?>
<?php /*%%SmartyHeaderCode:57775715af221173d4-01103941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9c6d720972df9347fc6a9bee1c624a2dcdcc4b3' => 
    array (
      0 => './admin/views/default\\about\\add.html',
      1 => 1448703821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57775715af221173d4-01103941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'acolumn' => 0,
    'row' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715af221af974_56853392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715af221af974_56853392')) {function content_5715af221af974_56853392($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						<label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
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
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
           </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>