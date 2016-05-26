<?php /* Smarty version Smarty-3.1.8, created on 2016-02-23 14:46:33
         compiled from "./admin/views/default\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1365956b17c7ff10023-77179229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49e3fa4520a3375961c83e8c98d8da2d805ceb1' => 
    array (
      0 => './admin/views/default\\login\\index.html',
      1 => 1454492283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365956b17c7ff10023-77179229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c7ff37127_17192763',
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c7ff37127_17192763')) {function content_56b17c7ff37127_17192763($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>资质代理</title>
		<style>
			body{margin:0px;padding:0px;background-color:#1075B1;font-size:12px;color:#294961;font-weight:bold;}
			form,ul,li,input{margin:0px;padding:0px;}
			ul,li{list-style:none;}
			.logo{width:515px;height:400px;margin:0px auto;background:url("<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.png");}
			.logo_01{margin-left:200px;}
			.border{width:146px;height:15px;margin-bottom:5px;}
			.text-box{height:15px;margin-bottom:15px;}
			.button{border:1px solid #294961;}
		</style>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="Author" content="资质代理" />
		<meta name="Keywords" content="资质代理" />
	</head>
	<body class="center" onload="document.getElementById('login-form').username.focus()">
		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/prologin" method="post" id="login-form">
		<div style="height:100px;"></div>
		<div class="logo">
			<div style="height:150px;"></div>
			<div class="logo_01">
				<ul>
					<li>用户名：<input type="text" name="username" class="border"/></li>
					<li>密　码：<input type="password" name="userpwd" class="border"/></li>
					<li>校验码：<input type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();"  class="text-box" size="6" name="code" />
					<img style="cursor:pointer;" alt="看不清，换一张" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code/'+Math.random()" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code" />
					</li>
					<li>
						<input type="image" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logoin.png" />
					</li>
				</ul>
			</div>
		</div>
		</form>
	</body>
</html><?php }} ?>