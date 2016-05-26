<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:04:15
         compiled from "./home/views/default\public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:356356b17c3f991680-48556788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47147b88138ddfb578e5f58f96d2f6720d098683' => 
    array (
      0 => './home/views/default\\public\\head.html',
      1 => 1448980619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '356356b17c3f991680-48556788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'keywords' => 0,
    'description' => 0,
    'res' => 0,
    'public' => 0,
    'globallink' => 0,
    'app' => 0,
    'row' => 0,
    'sonmenu' => 0,
    'ban' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17c3fa06988_04694570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17c3fa06988_04694570')) {function content_56b17c3fa06988_04694570($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/member.css">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/photo.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/thickbox.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/SpryValidationTextField.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/jquery.lazyload.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.thickbox.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/imgplay.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/play02.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/member.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/marquee.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/SpryValidationTextarea.js" type="text/javascript"></script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/yixun_ico.ico" />
<script type="text/javascript" language="javascript">
    //加入收藏
    function AddFavorite(sURL, sTitle) {
        sURL = encodeURI(sURL); 
        try{
            window.external.addFavorite(sURL, sTitle);   
        }catch(e) {   
        try{   
            window.sidebar.addPanel(sTitle, sURL, "");   
        }catch (e) {   
            alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
            }   
        }
    }
    //设为首页
    function SetHome(url){
        if (document.all) {
            document.body.style.behavior='url(#default#homepage)';
            document.body.setHomePage(url);
        }else{
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
        }
    }
</script>
</head>
<body>
	<div class="pagewidth pagerelative itop">
		<div class="pageabsolute logo"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.png" title="YIXUNCMS"/></a></div>
		<div class="pageabsolute zhucewz">
			<a onclick="SetHome(window.location)" href="javascript:void(0)" title="设为首页" class="btn">设为首页</a>
			<a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)" title="加入收藏" class="btn">加入收藏</a>
		</div>
	</div>
	<div class="imenu pagerelative">
		<div class="pagewidth">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['globallink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['men']!=null){?>
					<div class="sonm pageabsolute">
						<ul class="sonlink">
						<?php  $_smarty_tpl->tpl_vars['sonmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sonmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['men']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sonmenu']->key => $_smarty_tpl->tpl_vars['sonmenu']->value){
$_smarty_tpl->tpl_vars['sonmenu']->_loop = true;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sonmenu']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sonmenu']->value['title'];?>
</a></li>
						<?php } ?>
						</ul>
					</div>
				<?php }?>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<!--banner-->
	<div id="jnImageroll">
		<a href="#nogo" id="JS_imgWrap" target="_blank">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ban']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/>
		<?php } ?>
		</a>
		<div>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ban']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['links'];?>
"></a>
		<?php } ?>
		</div>
	</div><?php }} ?>