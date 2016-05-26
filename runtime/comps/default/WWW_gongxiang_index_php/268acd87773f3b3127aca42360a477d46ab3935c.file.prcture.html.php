<?php /* Smarty version Smarty-3.1.8, created on 2016-04-26 22:12:49
         compiled from "./home/views/default\photo\prcture.html" */ ?>
<?php /*%%SmartyHeaderCode:28962571f7761661cb3-81124941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268acd87773f3b3127aca42360a477d46ab3935c' => 
    array (
      0 => './home/views/default\\photo\\prcture.html',
      1 => 1448698870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28962571f7761661cb3-81124941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locs' => 0,
    'album' => 0,
    'app' => 0,
    'row' => 0,
    'photos' => 0,
    'public' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_571f77618c32b6_78256733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f77618c32b6_78256733')) {function content_571f77618c32b6_78256733($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
			<div class="title blocktitle">首页 / 公司风采 / <?php echo $_smarty_tpl->tpl_vars['locs']->value['title'];?>
</div>
			<div class="bottombor con3" style="text-align:right;">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/prcture/pid/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
				<?php } ?>
			</div>
			<div class="bottombor con3">
				<ul class="smallimg">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
					<li<?php if ($_smarty_tpl->tpl_vars['row']->iteration%3==0){?> style="margin-right:0px;"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" id="smallimg" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" class="thickbox">
							<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/<?php if ($_smarty_tpl->tpl_vars['row']->value['thumb']==1){?>th_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
<?php }?>" width="335" height="230">
						</a>
					</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
				当前图集下暂无相片
				<?php } ?>
				<div class="clear"></div>
				</ul>
				<div class="fpage"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div>
			</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>