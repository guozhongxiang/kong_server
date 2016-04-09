<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 21:41:48
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\header.html" */ ?>
<?php /*%%SmartyHeaderCode:229275705121cc22d91-97629770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da0873f5e985b84807992080f7e388d760284994' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\header.html',
      1 => 1459950085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229275705121cc22d91-97629770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5705121cc22d99_10582636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705121cc22d99_10582636')) {function content_5705121cc22d99_10582636($_smarty_tpl) {?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>管理端主页</title>
  <meta name="description" content="管理端主页">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta name="apple-mobile-web-app-title" content="管理端主页" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
AmazeUI-2.6.0/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
AmazeUI-2.6.0/assets/css/admin.css">
</head>
<body>

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>小空服务后台管理</strong>
  </div>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
    </ul>
  </div>
</header><?php }} ?>
