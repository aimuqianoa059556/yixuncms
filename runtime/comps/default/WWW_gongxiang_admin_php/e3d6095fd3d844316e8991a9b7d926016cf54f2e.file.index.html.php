<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:49:40
         compiled from "./admin/views/default\album\index.html" */ ?>
<?php /*%%SmartyHeaderCode:815156b1a304d57734-13337332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d6095fd3d844316e8991a9b7d926016cf54f2e' => 
    array (
      0 => './admin/views/default\\album\\index.html',
      1 => 1433303827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815156b1a304d57734-13337332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a304da5935_81919858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a304da5935_81919858')) {function content_56b1a304da5935_81919858($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">展示管理 > 图集管理 > 编辑图集</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="main.php?action=album">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">相册名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>