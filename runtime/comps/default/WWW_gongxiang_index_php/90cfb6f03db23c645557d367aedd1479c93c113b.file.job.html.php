<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:32:33
         compiled from "./home/views/default\index\job.html" */ ?>
<?php /*%%SmartyHeaderCode:238256b19f01cdbfe3-78135262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90cfb6f03db23c645557d367aedd1479c93c113b' => 
    array (
      0 => './home/views/default\\index\\job.html',
      1 => 1440078356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238256b19f01cdbfe3-78135262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jobs' => 0,
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b19f01d783e5_06592665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b19f01d783e5_06592665')) {function content_56b19f01d783e5_06592665($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
			<div class="title blocktitle">首页 / 人才招聘</div>
			<div class="bottombor con3">
				<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['job']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value){
$_smarty_tpl->tpl_vars['job']->_loop = true;
 $_smarty_tpl->tpl_vars['job']->iteration++;
?>
					<div class="job <?php if (!(1 & $_smarty_tpl->tpl_vars['job']->iteration)){?>rfloat<?php }else{ ?>lfloat<?php }?>">
						<div class="jobtitle lfloat">招聘职位：<?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</div>
						<div class="clear"></div>
						<div style="background-color:#fff;">
						<div class="jobcontent">
							<span class="j">招聘人数：<?php echo $_smarty_tpl->tpl_vars['job']->value['number'];?>
人</span><span>薪资代遇：<?php if ($_smarty_tpl->tpl_vars['job']->value['treatment']=='0'){?>面议<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['job']->value['treatment'];?>
元/月<?php }?></span><br>
							<span class="j">结束时间：<?php if ($_smarty_tpl->tpl_vars['job']->value['endtime']==0){?>长期<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['endtime'],"%Y-%m-%d");?>
<?php }?></span><span>工作地点：<?php echo $_smarty_tpl->tpl_vars['job']->value['address'];?>
</span>
							<div class="jc">
							<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['job']->value['content'],"&quot;",'"'),"&#039;","'");?>

							</div>
						</div>
						</div>
					</div>
					<?php if (!(1 & $_smarty_tpl->tpl_vars['job']->iteration)){?><div class="clear"></div><?php }?>
				<?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
				暂无聘用信息，欢迎浏览其它内容...
				<?php } ?>
			</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>