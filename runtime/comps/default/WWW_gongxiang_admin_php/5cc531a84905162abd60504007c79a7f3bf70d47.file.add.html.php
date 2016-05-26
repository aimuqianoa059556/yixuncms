<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:11:44
         compiled from "./admin/views/default\webbak\add.html" */ ?>
<?php /*%%SmartyHeaderCode:373756b19a2004d458-31912365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc531a84905162abd60504007c79a7f3bf70d47' => 
    array (
      0 => './admin/views/default\\webbak\\add.html',
      1 => 1450081397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '373756b19a2004d458-31912365',
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
  'unifunc' => 'content_56b19a2009b657_14187626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19a2009b657_14187626')) {function content_56b19a2009b657_14187626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 网站备份管理 > 压缩文件</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/zip" method="post">
					<ul class="viewmess">
						<li class="dark-row">
							<span class="col_width" style="width:100px;">将您网站的</span>
							<select name="dir" class="text-box">
								<option value="./">整站压缩</option>
								<option value="./wap/">手机站程序</option>
								<option value="./admin/">后台程序</option>
								<option value="./home/">前台程序</option>
								<option value="./public/uploads/">已上传的图片</option>
							</select>
						</li>
						<li>
							<span class="col_width" style="width:100px;">&nbsp;  </span>
							<input id="cdf" type="submit" class="button" value="开始压缩">&nbsp;&nbsp;					
						</li>
					</ul>
				</form>
<div id="ccc" style="float:left;padding:20px;color:red;display:none;"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/loading.gif">&nbsp;&nbsp;正在备份文件，这可能需要几秒钟的时间期间请不要刷新页面，请稍侯……</div>
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