<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 22:10:57
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\sideBar.html" */ ?>
<?php /*%%SmartyHeaderCode:256285705121cc22d94-08738410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd222007b66c4edcc4a863915de410031719bf528' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\sideBar.html',
      1 => 1459951853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256285705121cc22d94-08738410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5705121cc22d96_15533524',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705121cc22d96_15533524')) {function content_5705121cc22d96_15533524($_smarty_tpl) {?><div class="admin-sidebar am-offcanvas" id="admin-offcanvas" style="overflow-y:hidden">
	<div class="am-offcanvas-bar admin-offcanvas-bar">
	  <ul class="am-list admin-sidebar-list">
	    <li><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=index&act=index&type=admin"><span class="am-icon-home"></span> 后台首页</a></li>
	    <li><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=order&act=lis&type=admin"><span class="am-icon-table"></span> 订单管理</a></li>
	    <li><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=order&act=add&type=admin"><span class="am-icon-table"></span> 创建订单</a></li>
	  </ul>
	</div>
</div><?php }} ?>
