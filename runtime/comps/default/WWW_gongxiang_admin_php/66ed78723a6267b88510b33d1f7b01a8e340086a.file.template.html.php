<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:07:57
         compiled from "./admin/views/default\template\template.html" */ ?>
<?php /*%%SmartyHeaderCode:1513556b17d1d4b0b51-31570628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ed78723a6267b88510b33d1f7b01a8e340086a' => 
    array (
      0 => './admin/views/default\\template\\template.html',
      1 => 1449891050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513556b17d1d4b0b51-31570628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'file' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17d1d4d7c69_76111807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17d1d4d7c69_76111807')) {function content_56b17d1d4d7c69_76111807($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 模板编辑 > 编辑模板代码</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
			<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update" method="post">
				<ul class="viewmess">
					<li>
						<div style="padding:10px;">
							<textarea name="content" class="text-box" style="padding:10px 0;width:100%;height:500px;line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</textarea>
						</div>
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="hidden" name="path" value="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">
						<input type="submit" class="button"  value="修改模板代码">
					</li>					
				</ul>
			</form>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>