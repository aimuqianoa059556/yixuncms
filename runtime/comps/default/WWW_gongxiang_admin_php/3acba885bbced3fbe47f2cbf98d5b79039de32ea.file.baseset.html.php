<?php /* Smarty version Smarty-3.1.8, created on 2016-03-21 16:32:53
         compiled from "./admin/views/default\wap\baseset.html" */ ?>
<?php /*%%SmartyHeaderCode:2598756efb1b50dd411-27719607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3acba885bbced3fbe47f2cbf98d5b79039de32ea' => 
    array (
      0 => './admin/views/default\\wap\\baseset.html',
      1 => 1442475064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2598756efb1b50dd411-27719607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'varList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56efb1b51a0916_29868008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56efb1b51a0916_29868008')) {function content_56efb1b51a0916_29868008($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">移动网站管理->常规管理->基本设置</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/wapset" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">公告显示数目</span>
						<input type="text" class="text-box" name="noticle" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['noticlePageSize'];?>
">
						&nbsp;&nbsp;条
					</li>
					<li class="dark-row">
						<span class="col_width">文章显示数目</span>
						<input type="text" class="text-box" name="news" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['newsPageSize'];?>
">	
						&nbsp;&nbsp;篇 / 屏
					</li>
					<li class="light-row">
						<span class="col_width">产品显示数目</span>
						<input type="text" class="text-box" name="waphotosize" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['waphotosize'];?>
">	
						&nbsp;&nbsp;篇 / 屏
					</li>					
					<li class="dark-row">
						<span class="col_width">页脚版权信息</span>
						<input type="text" class="text-box" name="wapcopy" size="30" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['wapcopy'];?>
">
						移动设备分辨率低于PC机，版权信息不宜过长
					</li>					
					<li class="light-row">
						<span class="col_width">&nbsp;</span>
						<input type="submit" class="button" name="mod" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>