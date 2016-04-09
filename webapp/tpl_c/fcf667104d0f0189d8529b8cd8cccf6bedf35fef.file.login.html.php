<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 20:33:01
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:209445703e16e8b2103-80584467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf667104d0f0189d8529b8cd8cccf6bedf35fef' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\login.html',
      1 => 1459945965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209445703e16e8b2103-80584467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703e16e8ef194_20144722',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703e16e8ef194_20144722')) {function content_5703e16e8ef194_20144722($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>小空服务</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
AmazeUI-2.6.0/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>小空服务管理端登录</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=index&act=signIn&type=admin" method="post" class="am-form">
      <label for="account">账号:</label>
      <input type="text" name="account" id="account" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p></p>
  </div>
</div>
</body>
</html>
<?php }} ?>
