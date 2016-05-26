<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:47:04
         compiled from "./home/views/default\photo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1210656b1a268392985-30774963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc842cf3a24886e63eee80347692c41bcd0e0166' => 
    array (
      0 => './home/views/default\\photo\\index.html',
      1 => 1449031838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210656b1a268392985-30774963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'phc' => 0,
    'row' => 0,
    'url' => 0,
    'son' => 0,
    'ad' => 0,
    'adv' => 0,
    'public' => 0,
    'contact' => 0,
    'locs' => 0,
    'photos' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a268455e87_61288526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a268455e87_61288526')) {function content_56b1a268455e87_61288526($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	var res="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
";
</script>
	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
		<div class="left">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
			<div class="title blocktitle leftcolumn"<?php if ($_smarty_tpl->tpl_vars['row']->iteration!=1){?> style="margin-top:10px;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
<span>-</span></div>
			<div class="bottombor">
				<ul class="aboutcolumn">
				<?php  $_smarty_tpl->tpl_vars['son'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['son']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['scolumn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['son']->key => $_smarty_tpl->tpl_vars['son']->value){
$_smarty_tpl->tpl_vars['son']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/<?php echo $_smarty_tpl->tpl_vars['son']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['son']->value['title'];?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['son']->value['title'];?>
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
" style="margin-top:8px;width:100%;"/></a>
		<?php } ?>
			<div class="title blocktitle" style="margin-top:10px;">联系方式</div>
			<div class="bottombor con2">
				<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

			</div>			
		</div>
		<div class="right">
			<div class="title blocktitle">首页 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>/ <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
 <?php } ?></div>
			<div class="bottombor con2">
				<ul class="pro">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
					<li class="jl"<?php if ($_smarty_tpl->tpl_vars['row']->iteration%3==0){?> style="margin-right:0px;"<?php }?>>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/photoshow/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
					<img data-original="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/phoimg/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" width="270" height="200" class="borr lazy"/><br><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['top']==1){?><div class="allow"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/jl.png"></div><?php }?>
					</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
					该分类下暂无展示，欢迎浏览其它内容...
				<?php } ?>
				<div class="clear"></div>
				</ul>
				<div class="fpage"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div>
			</div>
		</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>