<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:30:26
         compiled from "./admin/views/default\banner\mod.html" */ ?>
<?php /*%%SmartyHeaderCode:162165715eca299ea47-17909440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0b1627adb5cf03524d78507a74606e334ae5f1' => 
    array (
      0 => './admin/views/default\\banner\\mod.html',
      1 => 1426235890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162165715eca299ea47-17909440',
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
  'unifunc' => 'content_5715eca2afa512_22562726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715eca2afa512_22562726')) {function content_5715eca2afa512_22562726($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 焦点图管理 > 添加焦点图</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">焦点图标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width">焦点图片<span class="red_font">*</span></span>
						<span id="logo">
						<img  style="cursor:pointer;" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
" alt="图片预览" width=100 height="100" title="点击查看大图" onclick="change();">
						<input type="button" class="button" onclick="change();" value="更换焦点图">
						</span>
						<script>
							function change(){
								var logo=document.getElementById("logo");
								logo.innerHTML='<input type="file" name="pic" class="button">&nbsp;上传后原图片将被自动删除.图片须小于2M';
							}
						</script>
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
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">&nbsp;&nbsp;
						<input type="submit" class="button" value="修改焦点图">&nbsp;&nbsp;
						<input type="reset" class="button" value="重置焦点图">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>