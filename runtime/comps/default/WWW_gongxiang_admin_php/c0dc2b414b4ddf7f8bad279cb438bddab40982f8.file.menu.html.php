<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:24:56
         compiled from "./admin/views/default\base\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1458956b19d38bd3a99-76207765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0dc2b414b4ddf7f8bad279cb438bddab40982f8' => 
    array (
      0 => './admin/views/default\\base\\menu.html',
      1 => 1446439836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458956b19d38bd3a99-76207765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19d38c96fa1_10734139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19d38c96fa1_10734139')) {function content_56b19d38c96fa1_10734139($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 页面导航 > 导航设置</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:30px;">排序</span>
						<span class="list_width width_font" style="width:110px;">栏目名称</span>
						<span class="list_width width_font" style="width:110px;">目标</span>
						<span class="list_width width_font" style="width:322px;">URL</span>
						<span class="list_width width_font" style="width:50px;">显示</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menuupdate" method="post">
					<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
						<span class="list_width" style="width:30px">
						<?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['pid']==0){?>
							<input type="text" name="ord" class="text-box" style="width:20px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['ord'];?>
">
						<?php }else{ ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-
						<?php }?>
						</span>
						<span class="list_width" style="width:110px">
							<input type="text" name="title" class="text-box" style="width:100px" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
">&nbsp;
						</span>
						<span class="list_width" style="width:110px">
							<select name="target" class="text-box">
								<option value="_self" <?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['target']=='_self'){?>selected<?php }?>>_self</option>
								<option value="_blank" <?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['target']=='_blank'){?>selected<?php }?>>_blank</option>
								<option value="_top" <?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['target']=='_top'){?>selected<?php }?>>_top</option>
								<option value="_parent" <?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['target']=='_parent'){?>selected<?php }?>>_parent</option>
							</select>
						</span>						
						<span class="list_width" style="width:330px">
							<input type="text" name="url" class="text-box" style="width:300px" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['url'];?>
">&nbsp;
						</span>	
						<span class="list_width" style="width:40px;">
							<?php if ($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['display']==1){?>
								<span title="审核：<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="set(this,'display',<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#FE488B;cursor:pointer;">√</span>
							<?php }else{ ?>
								<span title="取消审核：<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
" onclick="set(this,'display',<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#0000F6;cursor:pointer;">×</span>
							<?php }?>	
						</span>
						<span class="list_width">
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
" />
							<input type="submit" value="更新" class="text-box" style="background-color:#fff;"/>
							<input type="button" value="删除" class="text-box" style="background-color:#fff;" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menudel/id/<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
'"/>
						</span>
					</li>
					</form>
					<?php endfor; else: ?>
						<li class="light-row" style="padding-left:10px;">
							本页没有扩展.
						</li>					
					<?php endif; ?>
					<li class="dark-row">
						<input type="button" value="新增导航栏目" class="text-box" style="background-color:#fff;" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menuadd'"/>					
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
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>