<?php /* Smarty version Smarty-3.1.8, created on 2016-04-19 12:08:20
         compiled from "./admin/views/default\advert\add.html" */ ?>
<?php /*%%SmartyHeaderCode:109565715af34ebbbe5-44424626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129c4b9fc030aabd3417b8abb58554cb9c685d6f' => 
    array (
      0 => './admin/views/default\\advert\\add.html',
      1 => 1449032494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109565715af34ebbbe5-44424626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5715af350fc3b5_41116417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715af350fc3b5_41116417')) {function content_5715af350fc3b5_41116417($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理 > 广告位管理 > 添加广告位</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">广告位置 <span class="red_font">*</span></span>
						<select name="wz" class="text-box">
							<option value="1">首页横幅</option>
							<option value="2">单页左侧</option>
							<option value="3">文章列表页左侧</option>
							<option value="4">文章内容页左侧</option>
							<option value="5">展示列表页左侧</option>
							<option value="6">展示内容页左侧</option>
						</select>
					</li>
					<li class="light-row">
						<span class="col_width">广告图片 <span class="red_font">*</span></span>
						<input type="file" name="pic" class="text-box" />
					</li>
					<li class="dark-row">
						<span class="col_width">链接地址 <span class="red_font">*</span></span>
						<input type="text" class="text-box" name="links" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['links'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="1"||$_smarty_tpl->tpl_vars['post']->value['display']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="0"){?> checked <?php }?> value="0"> 不显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添加广告图">&nbsp;&nbsp;
						<input type="reset" class="button" value="重置广告图">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>