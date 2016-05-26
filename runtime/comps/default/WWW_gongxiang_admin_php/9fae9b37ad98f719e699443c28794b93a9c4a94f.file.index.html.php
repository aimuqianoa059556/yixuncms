<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 16:27:08
         compiled from "./admin/views/default\board\index.html" */ ?>
<?php /*%%SmartyHeaderCode:198625715ebdc511014-10155477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fae9b37ad98f719e699443c28794b93a9c4a94f' => 
    array (
      0 => './admin/views/default\\board\\index.html',
      1 => 1425534505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198625715ebdc511014-10155477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'page' => 0,
    'arts' => 0,
    'res' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715ebdc5fb616_06938702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715ebdc5fb616_06938702')) {function content_5715ebdc5fb616_06938702($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 留言管理 > 管理留言</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/fpro/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:190px">主题</span>
						<span class="list_width width_font" style="width:110px">留言人</span>
						<span class="list_width width_font" style="width:120px">电话</span>
						<span class="list_width width_font" style="width:95px;">留言时间</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<span class="list_width" style="width:190px"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
"><a href="#" onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/open/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
')"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'],16);?>
</a></span>
							<span class="list_width" style="width:80px"><?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['nickname'];?>
</span>
							<span class="list_width" style="width:120px"><?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['telephone'];?>
</span>
							<span class="list_width" style="width:120px;text-align:center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['posttime'],"%Y-%m-%d");?>
</span>
							
							<span class="list_width" style="width:160px;">
							【<a onclick="return confirm('确定要删除留言<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							暂无留言
						</li>
					<?php endif; ?>
					<li class="dark-row">
						<div class="col_width" style="margin-left:15px;width:100%"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="dels" type="image" title="删除" onClick="return confirm('你确定要删除选中的留言吗?')"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/delete.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 </div> 
						<div class="right" style="width:100%;margin-top:10px;">
							<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

						</div>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>