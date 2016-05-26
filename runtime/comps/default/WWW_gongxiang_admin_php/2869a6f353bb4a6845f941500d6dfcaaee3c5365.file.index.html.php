<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 15:15:31
         compiled from "./admin/views/default\flink\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2101856b1a913497ab2-41581355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2869a6f353bb4a6845f941500d6dfcaaee3c5365' => 
    array (
      0 => './admin/views/default\\flink\\index.html',
      1 => 1415935175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101856b1a913497ab2-41581355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'links' => 0,
    'row' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a91355afb4_06619716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a91355afb4_06619716')) {function content_56b1a91355afb4_06619716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">基本管理 > 友情链接 > 管理友情链接</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/ord" method="post">
		<div class="msg-box">
			<ul class="viewmess">
				<li class="dark-row">
					<span class="list_width width_font">网站名称</span>
					<span class="list_width width_font" style="width:90px;">网站LOGO</span>
					<span class="list_width width_font" style="width:80px;">网站联系人</span>
					<span class="list_width width_font">添加时间</span>
					<span class="list_width width_font">操作</span>
				</li>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
?>
				<li class="<?php if (!(1 & $_smarty_tpl->tpl_vars['row']->index)){?>light-row<?php }else{ ?>dark-row<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['row']->value['audit']==0){?>background:#FAECBA;<?php }?>padding-bottom:2px;padding-top:2px;">
					<span class="list_width"><input type="text" name="ord[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ord'];?>
" maxlength="3" style="width:20px;" />&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['webname'];?>
</a></span>
					<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
					<span class="list_width" style="width:90px;"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" width="88" height="31" /></span>
					<span class="list_width" style="width:80px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['rname'];?>
</span>
					<span class="list_width"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['dtime'],"%Y-%m-%d");?>
</span>
					<span class="list_width" style="width:160px;">
					【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">修改</a>】
					【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" onclick="return confirm('确定要删除友情链接【<?php echo $_smarty_tpl->tpl_vars['row']->value['webname'];?>
】吗？')" >删除</a>】
					</span>
				</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
				<li>暂无友情链接</li>
				<?php } ?>
				<li class="dark-row">
					<span class="col_width" style="margin-left:20px;width:300px;">
						<input class="button" name="order" type="submit" value="改变显示顺序">&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/display/off" style='<?php if ($_GET['display']=="off"){?>background:#888;color:white;<?php }?>'>不显示</a>&nbsp;|
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/display/on" style='<?php if ($_GET['display']=="on"){?>background:#888;color:white;<?php }?>'>显示</a>
					</span>
				</li>
			</ul>
		</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>