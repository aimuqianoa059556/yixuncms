<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 15:42:55
         compiled from "./admin/views/default\base\menuadd.html" */ ?>
<?php /*%%SmartyHeaderCode:150035715e17f6223a4-47887753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f585b0279d1790af2a9d5c9d50f6f31ddac861ce' => 
    array (
      0 => './admin/views/default\\base\\menuadd.html',
      1 => 1429431844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150035715e17f6223a4-47887753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'menucat' => 0,
    'row' => 0,
    'selected' => 0,
    'jz' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715e17f7b4980_62367363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715e17f7b4980_62367363')) {function content_5715e17f7b4980_62367363($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 导航管理 > 添加导航栏目</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">所属导航 <span class="red_font">*</span> </span>
						<select name="pid" class="text-box">
						<option value="0">顶级导航</option>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menucat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_smarty_tpl->tpl_vars['selected']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</option>
						<?php } ?>
						</select><input type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1" />记住选项
					</li>
					<li class="light-row">
						<span class="col_width">导航名称 <span class="red_font">*</span> </span>
						<input type="text" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" title="请填写导航标题" class="text-box"/>
					</li>
					<li class="dark-row">
						<span class="col_width">目标 <span class="red_font">*</span> </span>
							<select name="target" class="text-box">
								<option value="_self" <?php if ($_smarty_tpl->tpl_vars['post']->value['target']=='_self'){?>selected<?php }?>>_self</option>
								<option value="_blank" <?php if ($_smarty_tpl->tpl_vars['post']->value['target']=='_blank'){?>selected<?php }?>>_blank</option>
								<option value="_top" <?php if ($_smarty_tpl->tpl_vars['post']->value['target']=='_top'){?>selected<?php }?>>_top</option>
								<option value="_parent" <?php if ($_smarty_tpl->tpl_vars['post']->value['target']=='_parent'){?>selected<?php }?>>_parent</option>
							</select>
					</li>
					<li class="light-row">
						<span class="col_width">URL<span class="red_font">*</span> </span>
						<input type="text" name="url" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="请填写导航URL地址" class="text-box"/>
					</li>									
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						<input type="radio" name="audit"  <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="1"||$_smarty_tpl->tpl_vars['post']->value['display']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="0"){?> checked <?php }?> value="0"> 不显示
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