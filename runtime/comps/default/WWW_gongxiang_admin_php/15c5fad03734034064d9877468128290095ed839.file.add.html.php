<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:11:49
         compiled from "./admin/views/default\databak\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2129056b19a25c5b3d7-13887881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15c5fad03734034064d9877468128290095ed839' => 
    array (
      0 => './admin/views/default\\databak\\add.html',
      1 => 1449751420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129056b19a25c5b3d7-13887881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19a25ca95d8_92021230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19a25ca95d8_92021230')) {function content_56b19a25ca95d8_92021230($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 数据库备份 > 备份数据库文件</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row" style="border-bottom:none;padding-left:20px;">
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bakdata"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/bak-btn.jpg"/></a>
					</li>				
				</ul>			
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>