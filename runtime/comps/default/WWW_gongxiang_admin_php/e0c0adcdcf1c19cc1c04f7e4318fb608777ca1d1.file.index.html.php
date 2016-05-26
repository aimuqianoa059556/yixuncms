<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:09:49
         compiled from "./admin/views/default\fun\index.html" */ ?>
<?php /*%%SmartyHeaderCode:22445715af8dcc70f6-73642867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c0adcdcf1c19cc1c04f7e4318fb608777ca1d1' => 
    array (
      0 => './admin/views/default\\fun\\index.html',
      1 => 1417617370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22445715af8dcc70f6-73642867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'arts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715af8dd634f9_16566165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715af8dd634f9_16566165')) {function content_5715af8dd634f9_16566165($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 扩展理 > 管理扩展</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" method="post">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:150px;">扩展名称</span>
						<span class="list_width width_font" style="width:100px;">显示</span>
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
					<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
						<span class="list_width" style="width:150px">
							<span title="<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
">
							<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">
							<input type="text" name="ord[]" style="width:20px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['ord'];?>
">&nbsp;
							<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
</span>
						</span>
						<span class="list_width" style="width:100px;padding-left:10px;">
							<?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['audit']==1){?>
								<span title="审核：<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="set(this,'audit',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#FE488B;cursor:pointer;">√</span>
							<?php }else{ ?>
								<span title="取消审核：<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="set(this,'audit',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#0000F6;cursor:pointer;">×</span>
							<?php }?>	
						</span>
						<span class="list_width">
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							<?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id']!=1){?>
							【<a title="删除扩展：<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="return confirm('确定要删除单页【<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
】吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">删除</a>】
							<?php }?>
						</span>
					</li>
					<?php endfor; else: ?>
						<li class="light-row" style="padding-left:10px;">
							本页没有扩展.
						</li>					
					<?php endif; ?>
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="排 序">
						 </span> 
					</li>					
	<script>
	function set(obj, stat, id){
		var ajax=Ajax();
		if(obj.innerHTML=="√"){
			ajax.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status/s/"+stat+"/id/"+id+"/val/0", function(data){
				if(data=="1"){
					ieff(obj, "×");
					obj.style.color="#0000F6";
				}
			
			});
		}else{
			ajax.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status/s/"+stat+"/id/"+id+"/val/1", function(data){
				if(data=="1"){
					ieff(obj, "√");
					obj.style.color="#FE488B";
				}
			});
		}
	}
	</script>
				</ul>	
			</div>
			</form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>