<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 12:06:09
         compiled from "./admin/views/default\base\baseset.html" */ ?>
<?php /*%%SmartyHeaderCode:1837056b17cb143ad74-03280873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8a153ffc35f7d94fe6cd6cf6202d6604638907' => 
    array (
      0 => './admin/views/default\\base\\baseset.html',
      1 => 1448959709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837056b17cb143ad74-03280873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'varList' => 0,
    'key' => 0,
    'value' => 0,
    'app' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b17cb14fe274_08000333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b17cb14fe274_08000333')) {function content_56b17cb14fe274_08000333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理-常规设置-系统信息</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">前台显示风格</span>
							<select class="text-box" name="appStyle">
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['varList']->value['selectStyle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<option <?php if ($_smarty_tpl->tpl_vars['varList']->value['appStyle']==$_smarty_tpl->tpl_vars['key']->value){?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
								<?php } ?>
							</select>
							&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/style/add/" title="">安装新模板</a>
						</li>
					<li class="dark-row">
						<span class="col_width">文章每页显示数目</span>
						<input type="text" class="text-box" name="articlePageSize" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['articlePageSize'];?>
"> 条 / 页			
					</li>
					<li class="light-row">
						<span class="col_width">产品每页显示数目</span>
						<input type="text" class="text-box" name="photoPageSize" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['photoPageSize'];?>
"> 条 / 页				
					</li>
					<li class="dark-row">
						<span class="col_width">首页文章栏目显示数目</span>
						<input type="text" class="text-box" name="homecolumnsize" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['homecolumnsize'];?>
"> 个栏目	（注：不能大于文章顶层分类数）		
					</li>
					<li class="light-row">
						<span class="col_width">首页栏目文章显示数目</span>
						<input type="text" class="text-box" name="homecolumnpagesize" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['homecolumnpagesize'];?>
"> 条 / 栏目				
					</li>					
				
					<li class="dark-row">
						<span class="col_width">水印图片</span>
						<span id="newwater">
					        	<img id="wtu" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['varList']->value['water'];?>
" alt="水印图片">
						</span>	
						<input type="button"  style="margin-left:30px" class="button" value="更 换" onclick="changeup(this)">
					</li>
					<li class="light-row">
						<span class="col_width">水印位置</span>
						<select name="position">
						 	<option value="0" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==0){?> selected <?php }?>>随机位置</option> 
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==1){?> selected <?php }?>>顶端居左</option> 
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==2){?> selected <?php }?>>顶端居中</option> 
							<option value="3" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==3){?> selected <?php }?>>顶端居右</option> 
							<option value="4" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==4){?> selected <?php }?>>中部居左</option> 
							<option value="5" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==5){?> selected <?php }?>>中部居中</option> 
							<option value="6" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==6){?> selected <?php }?>>中部居右</option> 
							<option value="7" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==7){?> selected <?php }?>>底端居左</option> 
							<option value="8" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==8){?> selected <?php }?>>底端居中</option> 
							<option value="9" <?php if ($_smarty_tpl->tpl_vars['varList']->value['position']==9){?> selected <?php }?>>底端居右</option>  
						</select>&nbsp;&nbsp;&nbsp;&nbsp;可以有10种设置状态
					</li>
					<li class="dark-row">
						<span class="col_width">产品缩略图尺寸</span>
						宽 <input type="text" class="text-box" name="width" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['width'];?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="height" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['height'];?>
"> px
					</li>
					<li class="light-row">
						<span class="col_width">图片上传后的最大尺寸</span>
						宽 <input type="text" class="text-box" name="maxWidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['maxWidth'];?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="maxHeight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['maxHeight'];?>
"> px
					</li>
					<li class="dark-row">
						<span class="col_width">焦点图尺寸</span>
						宽 <input type="text" class="text-box" name="bwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['bwidth'];?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="bheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['bheight'];?>
"> px
					</li>
					<li class="light-row">
						<span class="col_width">幻灯片尺寸</span>
						宽 <input type="text" class="text-box" name="pwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['pwidth'];?>
"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="pheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['pheight'];?>
"> px
					</li>					
					<li class="dark-row">
						<span class="col_width">缓存设置</span>
						<input type="radio" name="cstart" <?php if ($_smarty_tpl->tpl_vars['varList']->value['cstart']=='1'){?>checked<?php }?> value="1"> 开启 &nbsp;&nbsp;
						<input type="radio" name="cstart" <?php if ($_smarty_tpl->tpl_vars['varList']->value['cstart']=='0'||$_smarty_tpl->tpl_vars['varList']->value['cstart']==null){?>checked<?php }?> value="0"> 关闭
					
					</li>
					<li class="light-row">
						<span class="col_width">缓存时间</span>
						<input type="text" class="text-box" name="ctime" size="10" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['ctime'];?>
"> 秒
					
					</li>
					<li class="dark-row">
						<span class="col_width">网站标题</span>
						<input type="text" class="text-box" name="appname" size="30" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['appname'];?>
"> 显示在首页的标题栏
					
					</li>
					<li class="light-row">
						<span class="col_width">关键字</span>
						<input type="text" class="text-box" name="keyword" size="50" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['keyword'];?>
"> 网站SEO优化，多个关键字请用使用英文","分隔
					
					</li>
					<li class="dark-row">
						<span class="col_width">网站描述</span>
						<textarea type="text" class="text-box" name="description" cols="40" rows="5"><?php echo $_smarty_tpl->tpl_vars['varList']->value['description'];?>
</textarea> 
						用一句精练语句描述网站的简介，不要敲回车。
					</li>
					<li class="light-row">
						<span class="col_width">ICP备案号</span>
						<input type="text" class="text-box" name="icp" size="20" value="<?php echo $_smarty_tpl->tpl_vars['varList']->value['icp'];?>
">
					
					</li>
					<li class="dark-row">
						<span class="col_width">版权信息</span>
						<textarea type="text" class="text-box" name="copy" cols="60" rows="5"><?php echo $_smarty_tpl->tpl_vars['varList']->value['copy'];?>
</textarea>
						注意：如需换行请使用“&lsaquo;br&rsaquo;”代替，不要敲回车。
					</li>					
					<li class="light-row">
						<span class="col_width">&nbsp;</span>
						<input type="submit" class="button" name="mod" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>