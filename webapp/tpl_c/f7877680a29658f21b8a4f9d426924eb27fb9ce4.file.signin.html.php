<?php /* Smarty version Smarty-3.1.19, created on 2016-04-05 21:06:14
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\main\signin.html" */ ?>
<?php /*%%SmartyHeaderCode:35425700a0b00dd185-23465491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7877680a29658f21b8a4f9d426924eb27fb9ce4' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\main\\signin.html',
      1 => 1459861570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35425700a0b00dd185-23465491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5700a0b00dd186_67423562',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700a0b00dd186_67423562')) {function content_5700a0b00dd186_67423562($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/public.css">
    <title>test</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .bdn{
            border:none;
            outline:none;
        }
        .bdr{
            border-radius:6px;
        }
        .ip{
            padding:3px 6px;
            border-bottom:1px solid #555555;
        }
        .mt{
            margin-top:20%;
        }
    </style>
</head>
<body>
<header class="tleheader">
    <p class="backbtn"><a style="margin:0; text-decoration: none">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/zjt.PNG" class="backpic" alt="">
        <span>返回</span></a>
    </p>
    <h1 class="tc">登录</h1>
    <p class="somebtn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=signUpView">注册</a>
    </p>
    <div class="clear"></div>
</header>
<form class="pdy20" action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=signIn" method="post">
    <p class="tc pdy8 fs18">账号：<input type="text" name="account" class="fs18 ip bdn"></p>
    <p class="tc pdy8 fs18">密码：<input type="password" name="password" class="fs18 ip bdn"></p>
    <!--<div class="w60 mc"><p class="tr"><a href="signup">注册</a></p></div>-->
    <p class="tc pdy20 mt"><button type="submit" class="bdn bgb cw w60 pdy8 fs18 bgr bdr">登录</button></p>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
</body>
</html><?php }} ?>
