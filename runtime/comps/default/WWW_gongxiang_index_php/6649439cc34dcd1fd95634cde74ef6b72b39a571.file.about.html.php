<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 11:46:11
         compiled from "./home/views/default\index\about.html" */ ?>
<?php /*%%SmartyHeaderCode:252635715aa032d6fc2-43584463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6649439cc34dcd1fd95634cde74ef6b72b39a571' => 
    array (
      0 => './home/views/default\\index\\about.html',
      1 => 1449031811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252635715aa032d6fc2-43584463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upage' => 0,
    'row' => 0,
    'app' => 0,
    'ac' => 0,
    'ad' => 0,
    'adv' => 0,
    'public' => 0,
    'contact' => 0,
    'colwz' => 0,
    'aboutshow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715aa03547fd1_95476648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715aa03547fd1_95476648')) {function content_5715aa03547fd1_95476648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
		<div class="left">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<div class="title blocktitle"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</div>
			<div class="bottombor" style="margin-bottom:10px;">
				<ul class="aboutcolumn">
				<?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['acol']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/about/id/<?php echo $_smarty_tpl->tpl_vars['ac']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['ac']->value['title'];?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['ac']->value['title'];?>
</a></li>
				<?php } ?>
				<div class="clear"></div>	
				</ul>
			</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['adv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adv']->key => $_smarty_tpl->tpl_vars['adv']->value){
$_smarty_tpl->tpl_vars['adv']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['adv']->value['links'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/advert/<?php echo $_smarty_tpl->tpl_vars['adv']->value['pic'];?>
" style="margin-bottom:10px;width:100%;"/></a>
		<?php } ?>
			<div class="title blocktitle">联系方式</div>
			<div class="bottombor con2">
				<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

			</div>			
		</div>
		<div class="right">
			<div class="title blocktitle">首页 / <?php echo $_smarty_tpl->tpl_vars['colwz']->value['title'];?>
 / <?php echo $_smarty_tpl->tpl_vars['aboutshow']->value['title'];?>
</div>
			<div class="bottombor con2">
				<?php echo $_smarty_tpl->tpl_vars['aboutshow']->value['content'];?>

			</div>
		</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>