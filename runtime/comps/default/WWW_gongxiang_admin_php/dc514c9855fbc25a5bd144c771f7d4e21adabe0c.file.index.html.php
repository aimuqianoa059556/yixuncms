<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:06:51
         compiled from "./admin/views/default\upgrade\index.html" */ ?>
<?php /*%%SmartyHeaderCode:107925715aedb67c451-87212697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc514c9855fbc25a5bd144c771f7d4e21adabe0c' => 
    array (
      0 => './admin/views/default\\upgrade\\index.html',
      1 => 1450197870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107925715aedb67c451-87212697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'sql' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715aedb829f65_46187860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715aedb829f65_46187860')) {function content_5715aedb829f65_46187860($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 维护更新 > 执行SQL语句</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
			<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/setupsql" method="post">
				<ul class="viewmess">
					<li>
						<div style="padding:10px;">
							<textarea name="sql" class="text-box" style="padding:10px 0;width:100%;height:300px;line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['sql']->value;?>
</textarea>
						</div>
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="执行SQL语句">
					</li>					
				</ul>
			</form>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>