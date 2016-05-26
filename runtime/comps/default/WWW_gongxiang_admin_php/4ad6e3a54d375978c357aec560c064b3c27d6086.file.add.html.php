<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:26:53
         compiled from "./admin/views/default\column\add.html" */ ?>
<?php /*%%SmartyHeaderCode:44845715ebcdee45f5-96344552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad6e3a54d375978c357aec560c064b3c27d6086' => 
    array (
      0 => './admin/views/default\\column\\add.html',
      1 => 1446040257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44845715ebcdee45f5-96344552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
    'app' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715ebce08c7f0_32106123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ebce08c7f0_32106123')) {function content_5715ebce08c7f0_32106123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 栏目管理 > 添加栏目</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="light-row">
					<span class="col_width">上级栏目</span>
					<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
<input type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1" />记住分类
				</li>
				<li class="dark-row">
					<span class="col_width">栏目标题<span class="red_font">*</span></span>
					<input type="text" name="title" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="text-box" />
				</li>
				<li class="light-row">
					<span class="col_width" style="margin-top:30px;">栏目描述<span class="red_font">*</span></span>
					<textarea name="description" cols="30" rows="5" class="text-box"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
				</li>
				<li class="dark-row">
					<span class="col_width" style="margin-top:45px">栏目图片<span class="red_font">*</span></span>
					<input type="hidden" id="picId" name="picid" value="">
					<img  style="cursor:pointer;"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')"  src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/no_image.gif" alt="图片预览" width="100" height="100" id="pic">		
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')" value="浏览...">	
				</li>
				<li class="light-row">
					<span class="col_width">是否审核</span>
					<input type="radio" name="audit" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"||$_smarty_tpl->tpl_vars['post']->value['audit']==''){?>checked<?php }?>/>是
					<input type="radio" name="audit" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"){?>checked<?php }?>/>否
				</li>
				<li class="dark-row">
					<span class="col_width">前台分配</span>
					<input type="radio" name="allid" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['allid']=="1"||$_smarty_tpl->tpl_vars['post']->value['allid']==''){?>checked<?php }?>/>是
					<input type="radio" name="allid" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['allid']=="0"){?>checked<?php }?>/>否
				</li>	
				<li class="light-row">
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