<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:32:15
         compiled from "./admin/views/default\job\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1110856b19eef8bd357-06365682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f9bd5e037466ce877aa70a31388e7f6c965a45' => 
    array (
      0 => './admin/views/default\\job\\index.html',
      1 => 1416646323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110856b19eef8bd357-06365682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arts' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19eef959752_50604353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19eef959752_50604353')) {function content_56b19eef959752_50604353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 招聘管理 > 管理招聘信息</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:250px;">招聘职位</span>
						<span class="list_width width_font" style="width:100px;">起始时间</span>
						<span class="list_width width_font" style="width:100px;">结束时间</span>
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
					<li  class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
						<span class="list_width" style="width:250px">
							<span title="产品编码：<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['pnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
</span>
						</span>
						<span class="list_width" style="width:100px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['starttime'],"%Y-%m-%d");?>
</span>
						<span class="list_width <?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']<=time()&&$_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']!='0'){?>red_font<?php }?>" style="width:100px;"><?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']==0){?>长期显示<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime'],"%Y-%m-%d");?>
<?php }?></span>
						<span class="list_width">
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							【<a title="删除产品：<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="return confirm('确定要删除职位【<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
】吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">删除</a>】
						</span>
					</li>
					<?php endfor; else: ?>
						<li class="light-row">
							本页没有招聘信息
						</li>					
					<?php endif; ?>
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<a style='<?php if ($_GET['action']=="3"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/3">无期限的</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="4"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/4">过期的</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="5"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/5">没到期的</a>&nbsp;|
							<a style='<?php if ($_GET['action']==''){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index">全部显示</a>&nbsp;&nbsp;
						 </span> 
					</li>					
				</ul>	
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>