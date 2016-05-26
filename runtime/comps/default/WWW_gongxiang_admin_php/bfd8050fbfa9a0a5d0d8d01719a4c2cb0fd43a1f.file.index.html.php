<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:08:54
         compiled from "./admin/views/default\advert\index.html" */ ?>
<?php /*%%SmartyHeaderCode:37545715af56e4e253-39701032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd8050fbfa9a0a5d0d8d01719a4c2cb0fd43a1f' => 
    array (
      0 => './admin/views/default\\advert\\index.html',
      1 => 1449033216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37545715af56e4e253-39701032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'plays' => 0,
    'wz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715af5703c997_11634116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715af5703c997_11634116')) {function content_5715af5703c997_11634116($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 广告位管理 > 管理广告位</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:250px;">广告图位置</span>
						<span class="list_width width_font" style="width:100px;">是否显示</span>
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
						<?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==1){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("首页横幅", null, 0);?>
						<?php }elseif($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==2){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("单页左侧", null, 0);?>
						<?php }elseif($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==3){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("文章列表页左侧", null, 0);?>
						<?php }elseif($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==4){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("文章内容页左侧", null, 0);?>							
						<?php }elseif($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==5){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("展示列表页左侧", null, 0);?>							
						<?php }elseif($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['wz']==6){?>
							<?php $_smarty_tpl->tpl_vars['wz'] = new Smarty_variable("展示内容页左侧", null, 0);?>							
						<?php }?>	
							<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['display']==0){?>background:#FAECBA;<?php }?>padding-top:2px; padding-bottom:2px">
					
							<span class="list_width" style="width:260px;"><input type="text" name="ord[]" style="width:15px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['ord'];?>
" class="text-box">&nbsp;<?php echo $_smarty_tpl->tpl_vars['wz']->value;?>
</span>
						
							<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">							
							<span class="list_width <?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']<=time()&&$_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']!='0'){?>red_font<?php }?>" style="width:60px;"><?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['display']==0){?>不显示<?php }else{ ?>显示<?php }?></span>
				
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
							暂无焦点图
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">
  							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a style='<?php if ($_GET['action']=="1"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/1">显示</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="2"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/2">不显示</a>&nbsp;&nbsp;
						 </span> 
					
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>