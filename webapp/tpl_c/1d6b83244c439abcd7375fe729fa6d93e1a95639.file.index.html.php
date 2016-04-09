<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 22:11:02
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:97525705020655f0d9-19052850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6b83244c439abcd7375fe729fa6d93e1a95639' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\index.html',
      1 => 1459951851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97525705020655f0d9-19052850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5705020655f0d9_29391341',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705020655f0d9_29391341')) {function content_5705020655f0d9_29391341($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php echo $_smarty_tpl->getSubTemplate ("admin/sideBar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      小空服务
    </div>
  </div>
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
