<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:05:33
         compiled from "./admin/views/default\public\success.html" */ ?>
<?php /*%%SmartyHeaderCode:2200856b17c8d3c5746-53927466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326321ca74274f239339489a2cc85d827c309e8e' => 
    array (
      0 => './admin/views/default\\public\\success.html',
      1 => 1420682206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2200856b17c8d3c5746-53927466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mess' => 0,
    'mark' => 0,
    'public' => 0,
    'timeout' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c8d413948_69923672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c8d413948_69923672')) {function content_56b17c8d413948_69923672($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>提示消息</title>
		<style type="text/css">
			body {font: 70% Arail;text-align:center;background-color:#F0F0F0;}
			#notice { width: 400px; background: #FFF; border: 1px solid #BBB; background: #EEE; padding: 3px;
			position: absolute; left: 50%; top: 50%; margin-left: -200px; margin-top: -100px; }
			#notice div { background: #FFF; padding: 30px 0 20px; font-size: 1.2em; font-weight:bold }
			#notice p { background: #FFF; margin:0px; padding:10px 0px 20px 0px; }
			a { color: #f00} a:hover { text-decoration: none; }
			
		</style>
	</head>
	<body>
		<div id="notice">
			<div style="text-align:left;color:#666;padding:15px 10px 10px 10px;font-size:12px;background-color:#F0F0F0;border-bottom:1px solid #ccc;"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['mark']->value){?>
				<p>
					<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/ok.png" />
				</p>
			<?php }else{ ?>
				<p>
					<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/no.png" />
				</p>
			<?php }?>		
			<p>
				 在( <span id="sec" style="color:blue;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
</span> )秒后自动跳转，或直接点击 <a href="javascript:<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
">这里</a> 跳转<br>
				 <span style="display:block;text-decoration:underline;cursor:pointer;line-height:25px" onclick="stop(this)">停止</span>
			</p>
		 </div>	
		 <script>
		 		var seco=document.getElementById("sec");
				var time=<?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
;
				var tt=setInterval(function(){
						time--;
						seco.innerHTML=time;	
						if(time<=0){
							<?php echo $_smarty_tpl->tpl_vars['location']->value;?>

							return;
						}
					}, 1000);
				function stop(obj){
					clearInterval(tt);
					obj.style.display="none";
				}
		</script>
	</body>
</html>
<?php }} ?>