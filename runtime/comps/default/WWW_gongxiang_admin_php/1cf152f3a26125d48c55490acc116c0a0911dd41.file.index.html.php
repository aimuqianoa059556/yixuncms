<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:07:38
         compiled from "./admin/views/default\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2557056b17d0a618539-19707061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf152f3a26125d48c55490acc116c0a0911dd41' => 
    array (
      0 => './admin/views/default\\template\\index.html',
      1 => 1449887292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2557056b17d0a618539-19707061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templatelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17d0a652ec2_80867717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17d0a652ec2_80867717')) {function content_56b17d0a652ec2_80867717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 模板编辑 > 模板列表</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<?php echo $_smarty_tpl->tpl_vars['templatelist']->value;?>

			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>