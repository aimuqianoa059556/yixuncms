<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:49:50
         compiled from "./admin/views/default\image\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2400856b1a30e2a9205-41873286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781bd375c366379adacf2ab3c4a78e43c127a5a1' => 
    array (
      0 => './admin/views/default\\image\\index.html',
      1 => 1440138205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2400856b1a30e2a9205-41873286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'images' => 0,
    'public' => 0,
    'res' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a30e31e500_27854209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a30e31e500_27854209')) {function content_56b1a30e31e500_27854209($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->图片管理->图片列表</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del" onsubmit="return confirm('你确定要删除选中的所有图片吗?')">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请从相册中选择需要编辑的图片&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
				
					</li>
					<script>
						var sel=document.getElementById("sel");
						sel.onchange=function(){
							var pid=this.options[this.selectedIndex].value;
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/"+pid;
						}
					</script>
				</ul>
					 <div style="float:left;margin:5px 0 20px 0; width:98%;">
					 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['name'] = "ls";
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total']);
?>
						<div class="piclist">
						<a id="thickImg" href="<?php if ($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['water']==1){?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/th_<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['name'];?>
<?php }?>" class="thickbox" title="调用路径：/public/uploads/prcture/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['name'];?>
">
							<img onload="DrawImage(this,140,90);" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['name'];?>
">
						</a>
						<div style="position:absolute;bottom:-23px;">
							<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['id'];?>
" style="vertical-align:middle;">
						
						</div>
						</div>
					 <?php endfor; else: ?>
						<div style="width:100%;padding-left:30px;line-height:80px;">暂无活动展示图片.</div>
					 <?php endif; ?>
					</div>
					</div>
				<ul class="viewmess">
					<li class="dark-row" style="width:100%;float:left;">
						<span class="col_width" style="margin-left:15px;float:left"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="delb" type="image" title="删除"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/delete.gif">&nbsp;&nbsp;
						 </span> 
						<span class="right" style="float:right;">
							<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

						</span>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>