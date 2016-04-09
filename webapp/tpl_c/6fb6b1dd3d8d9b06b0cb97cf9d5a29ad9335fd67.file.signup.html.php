<?php /* Smarty version Smarty-3.1.19, created on 2016-04-05 21:06:12
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\main\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:198515700885b877fa5-06749753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb6b1dd3d8d9b06b0cb97cf9d5a29ad9335fd67' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\main\\signup.html',
      1 => 1459861570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198515700885b877fa5-06749753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5700885b877fa4_20864819',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700885b877fa4_20864819')) {function content_5700885b877fa4_20864819($_smarty_tpl) {?><!DOCTYPE html>
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
    <h1 class="tc">注册</h1>
    <p class="somebtn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=signInView">登录</a>
    </p>
    <div class="clear"></div>
</header>
<form class="pdy20" action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=signUp" method="post" onsubmit="return check()">
    <p class="tc pdy8 fs18">&nbsp;&nbsp;&nbsp;账号&nbsp;&nbsp;&nbsp;：<input type="text" name="account" class="fs18 ip bdn" id="name"></p>
    <p class="tc pdy8 fs18">输入密码：<input type="password" name="password" class="fs18 ip bdn" id="password"></p>
    <p class="tc pdy8 fs18">确认密码：<input type="password" class="fs18 ip bdn" id="passwordcheck"></p>
    <!--<div class="w60 mc"><p class="tr"><a href="signup">注册</a></p></div>-->
    <p class="tc pdy20 mt"><button type="submit" class="bdn bgb cw w60 pdy8 fs18 bgr bdr">注册</button></p>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script type="text/javascript">
    function check(){
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var passwordcheck = document.getElementById("passwordcheck").value;

        if(name.length == 0){
            alert("用户名不能为空！");
            return false;
        }
        else if(name.length>20){
            alert("用户名不能超过20个字符，请重新输入！");
            return false;
        }
        else if(password.length < 6 || passwordcheck.length < 6){
            alert("密码不能小于6个字符，请重新输入！")
            return false;
        }
        else if(password!=passwordcheck){
            alert("2次密码输入不一致！");
            return false;
        }else{
            return true;
        }

    }
</script>
</body>
</html><?php }} ?>
