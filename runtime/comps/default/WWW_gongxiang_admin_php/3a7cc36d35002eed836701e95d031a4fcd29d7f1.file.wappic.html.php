<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:35:14
         compiled from "./admin/views/default\wap\wappic.html" */ ?>
<?php /*%%SmartyHeaderCode:3007856b19fa2776856-97336844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7cc36d35002eed836701e95d031a4fcd29d7f1' => 
    array (
      0 => './admin/views/default\\wap\\wappic.html',
      1 => 1442476420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007856b19fa2776856-97336844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'plays' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19fa2812c50_98635069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19fa2812c50_98635069')) {function content_56b19fa2812c50_98635069($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 手机网站管理 > 管理图片</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:280px;">标题</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plays']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:2px; padding-bottom:2px">
					
							<span class="list_width" style="width:250px;"><input type="text" name="ord[]" style="width:20px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['ord'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
</span>
						
							<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">								
							<span class="list_width" style="width:120px;">
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							【<a onclick="return confirm('确定要删除焦点图片【<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
】吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							暂无图片
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="调整顺序">
						</span> 
					
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>