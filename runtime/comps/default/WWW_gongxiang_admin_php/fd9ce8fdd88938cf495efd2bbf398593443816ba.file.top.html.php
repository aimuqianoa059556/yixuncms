<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:05:48
         compiled from "./admin/views/default\index\top.html" */ ?>
<?php /*%%SmartyHeaderCode:2290656b17c9c154892-42508571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9ce8fdd88938cf495efd2bbf398593443816ba' => 
    array (
      0 => './admin/views/default\\index\\top.html',
      1 => 1450236266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2290656b17c9c154892-42508571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'root' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c9c1f0c97_97496940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c9c1f0c97_97496940')) {function content_56b17c9c1f0c97_97496940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="top">
	<div style="float:left;height:63px;">
		<div style="font-family:黑体;font-size:14px;color:#FFFFFF;padding:10px 0px 10px 50px;">欢迎使用弘嘉企业网站后台管控系统</div>
		<div style="padding-left:200px;">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/one" target="menu">系统首页</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/two" target="menu">基本管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/three" target="menu">文章管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/four" target="menu">展示管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/five" target="menu">招聘管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/seven" target="menu">扩展管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/night" target="menu">手机网站</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/ten" target="menu">模板与数据</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/six" target="menu">维护与更新</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/pd/eighth" target="menu">用户管理</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
" target="_blank">网站首页</a></li>
			</ul>
		</div>
	</div>
	<div style="float:right;height:63px;padding:10px;color:#FFFFFF;">欢迎您-<span title="<?php echo $_SESSION['description'];?>
"><?php echo $_SESSION['username'];?>
</span>，【<?php echo $_SESSION['groupname'];?>
】【<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top">退出系统</a>】</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>