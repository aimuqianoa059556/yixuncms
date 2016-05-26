<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:03:47
         compiled from "./admin/views/default\style\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2438256b17d26266d20-13323720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5c8632ef9590f30966ce4b6136fb17680931fc' => 
    array (
      0 => './admin/views/default\\style\\index.html',
      1 => 1454492480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2438256b17d26266d20-13323720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17d262dc020_77056599',
  'variables' => 
  array (
    'style' => 0,
    'root' => 0,
    'key' => 0,
    'item' => 0,
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17d262dc020_77056599')) {function content_56b17d262dc020_77056599($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
ul{padding:10px;}
ul li{width:150px;text-align:center;float:left;}
ul li .s{margin-bottom:10px;padding:10px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;border-top:1px solid #eaeaea;border-left:1px solid #eaeaea;}
</style>
	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理-常规设置-模板管理</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['style']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li>
					<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/home/views/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.jpg" width="120" class="s"/>
					<br/><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

						<br/>
						<img onclick="return confirm('此版本不支持缷载，请手动缷载！')" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/del-02.gif" style="margin-top:10px;cursor:pointer;"/>
					</li>
				<?php } ?>
					<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/add" title="增加模板">
					<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/addstyle.jpg" width="120" class="s"/>
					</a>
					</li>			
				<div style="clear:both;"></div>
			</ul>	
			</div>		
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>