<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 16:51:06
         compiled from "./admin/views/default\group\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1007456b1bf7a7f51b8-97415011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00b0151275b94a8664d0d5f86ae7413bcbaa804a' => 
    array (
      0 => './admin/views/default\\group\\add.html',
      1 => 1450200955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1007456b1bf7a7f51b8-97415011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'groupname' => 0,
    'description' => 0,
    'useradmin' => 0,
    'webadmin' => 0,
    'articleadmin' => 0,
    'sendcomment' => 0,
    'photoadmin' => 0,
    'jobadmin' => 0,
    'boardadmin' => 0,
    'funadmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1bf7a86a4b7_16608912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1bf7a86a4b7_16608912')) {function content_56b1bf7a86a4b7_16608912($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">用户管理 > 用户组管理 > 添加用户组</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">用户组名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="groupname" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">组描述<span class="red_font">*</span></span>
						<textarea class="text-box" name="description" cols="40" rows="5"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
					</li>

					
					
					<li class="light-row">
						<span class="col_width">设置权限</span>
						<span style="height:30px;">				
							<label for="q1"><input id="q1" <?php if ($_smarty_tpl->tpl_vars['useradmin']->value==1){?>checked<?php }?> type="checkbox" name="useradmin" value="1"> 用户管理</label>&nbsp;&nbsp;
							<label for="q2"><input id="q2" <?php if ($_smarty_tpl->tpl_vars['webadmin']->value==1){?>checked<?php }?> type="checkbox" name="webadmin" value="1"> 网站编辑</label>&nbsp;&nbsp;
							<label for="q3"><input id="q3" <?php if ($_smarty_tpl->tpl_vars['articleadmin']->value==1){?>checked<?php }?> type="checkbox" name="articleadmin" value="1"> 文章管理</label>
							<label for="q8"><input id="q8" <?php if ($_smarty_tpl->tpl_vars['sendcomment']->value==1){?>checked<?php }?> type="checkbox" name="sendcomment" value="1"> 手机站管理</label>					
						</span><br>
						<span class="col_width">&nbsp;</span>
						<span  style="height:30px;">
							<label for="q4"><input id="q4" <?php if ($_smarty_tpl->tpl_vars['photoadmin']->value==1){?>checked<?php }?> type="checkbox" name="photoadmin" value="1"> 产品管理</label>&nbsp;&nbsp;
							<label for="q5"><input id="q5" <?php if ($_smarty_tpl->tpl_vars['jobadmin']->value==1){?>checked<?php }?> type="checkbox" name="jobadmin" value="1"> 招聘管理</label>&nbsp;&nbsp;
							<label for="q6"><input id="q6" <?php if ($_smarty_tpl->tpl_vars['boardadmin']->value==1){?>checked<?php }?> type="checkbox" name="boardadmin" value="1"> 维护更新</label>
							<label for="q7"><input id="q7" <?php if ($_smarty_tpl->tpl_vars['funadmin']->value==1){?>checked<?php }?> type="checkbox" name="funadmin" value="1"> 扩展管理</label>
        				</span>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>