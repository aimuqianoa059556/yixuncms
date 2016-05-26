<?php /* Smarty version Smarty-3.1.8, created on 2016-05-26 13:21:27
         compiled from "./home/views/default\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8470574687d7e97a64-99233221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4157d075bc1974d194b13ff4d80a736ca28f1afb' => 
    array (
      0 => './home/views/default\\index\\index.html',
      1 => 1454481765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8470574687d7e97a64-99233221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'play' => 0,
    'public' => 0,
    'app' => 0,
    'row' => 0,
    'about' => 0,
    'notice' => 0,
    'url' => 0,
    'contact' => 0,
    'res' => 0,
    'photo' => 0,
    'cols' => 0,
    'artitle' => 0,
    'ad' => 0,
    'adv' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_574687d8065395_77591126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574687d8065395_77591126')) {function content_574687d8065395_77591126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\local.com\\test.com\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
		<div class="product">
			<div class="title blocktitle">推荐阅读</div>
			<div id="play">
				<a href="#nogo" id="js_play">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['name'] = 'pic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['play']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total']);
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/play/<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['title'];?>
" width="514" height="300"/>
				<?php endfor; else: ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/Yixun.jpg"/>
				<?php endif; ?>
				</a>
				<div>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['play']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
 $_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration === $_smarty_tpl->tpl_vars['row']->total;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/article/aid/<?php echo $_smarty_tpl->tpl_vars['row']->value['aid'];?>
"<?php if ($_smarty_tpl->tpl_vars['row']->last){?> class="last"<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</a>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
" class="last">1</a>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="about">
			<div class="title blocktitle">企业概况</div>
			<div class="bottombor con">
				<?php echo $_smarty_tpl->tpl_vars['about']->value;?>

			</div>
		</div>
		<div class="contect">
			<div class="title blocktitle">联系我们</div>
			<div class="bottombor con">
				<div id="s1" class="scroll">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
 $_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration === $_smarty_tpl->tpl_vars['row']->total;
?>
					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/notice/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="color:#<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>|
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
					<a target="_blank">欢迎光临我们的网站</a>|
				<?php } ?>
				</div>
				<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

			</div>
		</div>		
		<!--product-->
		<div class="clear"></div>
		<div class="productlist" id="one" style="display:none;">
			<div class="title blocktitle">
			<span class="promore">业务展示</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/index/pid/2" title="更多"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.png"></a>
			</div>
			<div class="bottombor">
				<div class=blk_18>
				<a onmouseup=ISL_StopUp_1() class=LeftBotton onmousedown=ISL_GoUp_1() onmouseout=ISL_StopUp_1() href="javascript:void(0);" title="Prive" target=_self></a>
				<div class=pcont id=ISL_Cont_1>
					<div class=ScrCont>
						<div id=List1_1>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
 $_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration === $_smarty_tpl->tpl_vars['row']->total;
?>
							<span class=pl>
							<a class=pl title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/photoshow/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target=_blank>
								<img height="180" width="200" alt="" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/phoimg/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

							</a>
							</span>
						<?php } ?>
						</div>
						<div id=List2_1></div>
					</div>
				</div>
				<a onmouseup=ISL_StopDown_1() class=RightBotton onmousedown=ISL_GoDown_1() onmouseout=ISL_StopDown_1() href="javascript:void(0);" title="Next" target=_self></a>
				</div>
				<SCRIPT type=text/javascript>
				<!--
				picrun_ini()
				//-->
				</SCRIPT>			
			</div>
		</div>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
 $_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration === $_smarty_tpl->tpl_vars['row']->total;
?>
	<div class="art" style="<?php if ($_smarty_tpl->tpl_vars['row']->iteration%2==0){?>float:right;<?php }?> display:none;">
		<div class="title blocktitle">
		<span class="artmore"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/pid/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="更多"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.png"></a>
		</div>
		<div class="bottombor conlist">
		<div class="lfloat">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/pid/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/prcture/<?php echo $_smarty_tpl->tpl_vars['row']->value['imgname'];?>
"/>
			</a>
		</div>
		<div class="rfloat">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['artitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artitle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['art']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artitle']->key => $_smarty_tpl->tpl_vars['artitle']->value){
$_smarty_tpl->tpl_vars['artitle']->_loop = true;
?>
				<li><span class="box"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/article/aid/<?php echo $_smarty_tpl->tpl_vars['artitle']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['artitle']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['artitle']->value['title'];?>
</a></span><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artitle']->value['posttime'],"Y-m-d");?>
</span></li>
			<?php }
if (!$_smarty_tpl->tpl_vars['artitle']->_loop) {
?>
				<li><span class="box">暂无内容</span></li>				
			<?php } ?>
			</ul>
		</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['row']->iteration==2){?>
		<?php  $_smarty_tpl->tpl_vars['adv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adv']->key => $_smarty_tpl->tpl_vars['adv']->value){
$_smarty_tpl->tpl_vars['adv']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['adv']->value['links'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/advert/<?php echo $_smarty_tpl->tpl_vars['adv']->value['pic'];?>
" style="margin-top:10px;"/></a>
		<?php } ?>
	<?php }?>
	<?php } ?>
	<div class="clear"></div>
		<div class="productlist" id="two" style="display:none;">
			<div class="title blocktitle">
			<span class="promore">案例展示</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/index/pid/4" title="更多"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/more.png"></a>
			</div>
			<div class="bottombor">
				<div class=blk_18>
				<a onmouseup=ISL_StopUp_2() class=LeftBotton onmousedown=ISL_GoUp_2() onmouseout=ISL_StopUp_2() href="javascript:void(0);" title="Prive" target=_self></a>
				<div class=pcont id=ISL_Cont_2>
					<div class=ScrCont>
						<div id=List1_2>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
 $_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration === $_smarty_tpl->tpl_vars['row']->total;
?>
							<a class=pl title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/photo/photoshow/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target=_blank>
								<img height="180" width="200" alt="" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/phoimg/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

							</a>
						<?php } ?>
						</div>
						<div id=List2_2></div>
					</div>
				</div>
				<a onmouseup=ISL_StopDown_2() class=RightBotton onmousedown=ISL_GoDown_2() onmouseout=ISL_StopDown_2() href="javascript:void(0);" title="Next" target=_self></a>
				</div>
				<SCRIPT type=text/javascript>
				<!--
				picrun_ini02()
				//-->
				</SCRIPT>		
			</div>
		</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>