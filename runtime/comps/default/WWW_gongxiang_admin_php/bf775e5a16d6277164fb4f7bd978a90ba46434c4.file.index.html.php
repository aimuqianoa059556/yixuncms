<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:11:45
         compiled from "./admin/views/default\databak\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2311956b19a218b1b77-34998955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf775e5a16d6277164fb4f7bd978a90ba46434c4' => 
    array (
      0 => './admin/views/default\\databak\\index.html',
      1 => 1449756657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2311956b19a218b1b77-34998955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19a21926e76_57352210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19a21926e76_57352210')) {function content_56b19a21926e76_57352210($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 数据库备份 > 管理数据库文件</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

				<div id="ccc" style="float:left;padding:20px;color:red;display:none;"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/loading.gif">&nbsp;&nbsp;正在恢复，这可能需要几秒钟的时间，请稍侯……</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#cdf").click(function(){
					$("#ccc").show();
				})
			})
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>