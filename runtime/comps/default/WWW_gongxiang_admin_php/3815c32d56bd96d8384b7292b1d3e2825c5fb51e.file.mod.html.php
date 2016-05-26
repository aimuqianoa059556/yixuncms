<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 15:15:37
         compiled from "./admin/views/default\flink\mod.html" */ ?>
<?php /*%%SmartyHeaderCode:2626356b1a919226b30-42241649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3815c32d56bd96d8384b7292b1d3e2825c5fb51e' => 
    array (
      0 => './admin/views/default\\flink\\mod.html',
      1 => 1416932022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626356b1a919226b30-42241649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a91929be39_66102369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a91929be39_66102369')) {function content_56b1a91929be39_66102369($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 友情链接 > 修改友情链接</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="light-row">
					<span class="col_width">网站名称<span class="red_font">*</span></span>
					<input type="text" name="webname" maxlength="30" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['webname'];?>
" class="text-box"/>
				</li>
				<li class="dark-row">
					<span class="col_width">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址<span class="red_font">*</span></span>
					<input type="text" name="url" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" class="text-box"/>&nbsp; 例如：http://www.yixun-bs.com
				</li>
				<li class="light-row">
					<span class="col_width">LOGO<span class="red_font">*</span></span>
					<span id="logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
" width="88" height="31" />
						<input type="button" value="更换LOGO" onclick="change();" class="button" />
					</span>
						<input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
" />
						<script>
							function change(){
								var logo=document.getElementById("logo");
								logo.innerHTML='<input type="text" name="logoc" maxlength="100" size="40" value="" class="text-box" />&nbsp;网站LOGO图片的有效地址，将自动下载到本地';
							}
						</script>
					
				</li>
				<li class="dark-row">
					<span class="col_width">网站描述</span>
					<textarea class="text-box" name="msg" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['msg'];?>
</textarea>
				</li>
				<li class="light-row">
					<span class="col_width">联系人<span class="red_font">*</span></span>
					<input type="text" name="rname" maxlength="30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['rname'];?>
" class="text-box"/> &nbsp;
				</li>
				<li class="dark-row">
					<span class="col_width">站长邮箱<span class="red_font">*</span></span>
					<input type="text" name="email" maxlength="60" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
" class="text-box"/>
				</li>
				<li class="light-row">
					<span class="col_width">显示方式<span class="red_font">*</span></span>
					<input type="radio" name="list" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="0"||$_smarty_tpl->tpl_vars['post']->value['list']==null){?>checked<?php }?>/>网站名称
					<input type="radio" name="list" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="1"){?>checked<?php }?>/>LOGO图片
				</li>
				<li class="dark-row">
					<span class="col_width">是否显示<span class="red_font">*</span></span>
					<input type="radio" name="audit" value="0" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"||$_smarty_tpl->tpl_vars['post']->value['audit']==null){?>checked<?php }?>/>不显示
					<input type="radio" name="audit" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"){?>checked<?php }?>/>显示
				</li>
				<li class="light-row">
					<span class="col_width"></span>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
					<input type="submit" class="button" name="mod" value="确认修改" />
					<input type="reset" class="button" value="清除重置" />
				</li>				
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>