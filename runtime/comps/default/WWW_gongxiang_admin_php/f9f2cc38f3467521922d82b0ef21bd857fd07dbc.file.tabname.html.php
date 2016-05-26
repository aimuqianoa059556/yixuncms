<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:35:53
         compiled from "./admin/views/default\upgrade\tabname.html" */ ?>
<?php /*%%SmartyHeaderCode:382856b19fc93a62b3-32793889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f2cc38f3467521922d82b0ef21bd857fd07dbc' => 
    array (
      0 => './admin/views/default\\upgrade\\tabname.html',
      1 => 1450236839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382856b19fc93a62b3-32793889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'table' => 0,
    'dbname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19fc93f44b6_02631272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19fc93f44b6_02631272')) {function content_56b19fc93f44b6_02631272($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 维护更新 > 查看数据表</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" method="post">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:150px;">数据表名称</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['table']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total']);
?>
					<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
						<span class="list_width" style="width:145px">
							<?php echo $_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']][$_smarty_tpl->tpl_vars['dbname']->value];?>

						</span>
						<span class="list_width">
							【<a title="数据表结构" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/describe/tabname/<?php echo $_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']][$_smarty_tpl->tpl_vars['dbname']->value];?>
">结构</a>】						
							【<a title="删除数据表" onclick="return confirm('删除数据表【<?php echo $_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']][$_smarty_tpl->tpl_vars['dbname']->value];?>
】会造成数据无法正常调用，这是一个不可逆转的操作，确认要删除吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/deltable/tabname/">删除</a>】
						</span>
					</li>
					<?php endfor; else: ?>
						<li class="light-row" style="padding-left:10px;">
							本页没有数据表.
						</li>					
					<?php endif; ?>
					<li class="dark-row">
					</li>					
				</ul>	
			</div>
			</form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>