<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:12:26
         compiled from "./home/views/default\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2150856b17c3fa06984-94025676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016ffd82b8d7e4c9188e2d9d4753e92ffaaa6a42' => 
    array (
      0 => './home/views/default\\public\\footer.html',
      1 => 1461039143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2150856b17c3fa06984-94025676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c3fa2da85_16113971',
  'variables' => 
  array (
    'links' => 0,
    'public' => 0,
    'copy' => 0,
    'icp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c3fa2da85_16113971')) {function content_56b17c3fa2da85_16113971($_smarty_tpl) {?>	<div class="clear"></div>
	<div class="flink">
		<div class="pagewidth">友情链接：
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['url'];?>
" target="_blank">
					<?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['list']){?>
						<img width="88" height="31" alt="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['logo'];?>
" border="0" style="vertical-align:middle;margin-right:5px;">
					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>

					<?php }?>
				</a>
			<?php endfor; endif; ?>
		</div>
	</div>
	<div class="footer">
<?php echo $_smarty_tpl->tpl_vars['copy']->value;?>
<?php echo $_smarty_tpl->tpl_vars['icp']->value;?>

<script language="javascript" type="text/javascript" src="http://js.users.51.la/17561189.js"></script>
<noscript><a href="http://www.51.la/?17561189" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17561189.asp" style="border:none" /></a></noscript><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255517076'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1255517076%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<!--在线客服-->
<script language="JavaScript" src="http://code.54kefu.net/kefu/js/116/760716.js" type="text/javascript" charset="utf-8"></script>
	</div>
</body>
</html><?php }} ?>