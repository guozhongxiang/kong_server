<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 13:29:31
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\main\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1774356ffbf36ed18d2-78552954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e065b43c04364b696b42e8d9172dcb1a1ce42e91' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\main\\index.html',
      1 => 1460006962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774356ffbf36ed18d2-78552954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ffbf370095f0_56222653',
  'variables' => 
  array (
    '__host__' => 0,
    'name' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffbf370095f0_56222653')) {function content_56ffbf370095f0_56222653($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/css/public.css">
    <title>小空服务</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .setup{
            width:42px;
            margin-bottom:-25px;
            margin-right:10px;
        }
        .w{
            width:100px;
        }
        .iconA{
            width:44px;
            margin-bottom:-14px;
        }
        .iconB{
            width:24px;
            margin-top:11px;
        }
        .pdy{
            padding:8px 0;
        }
        .ct{
            line-height: 40px;
            height: 40px;
        }
        .fb{
            padding:2px 0;
        }
        .itembox2{
            position: relative;
            width:20%;
        }
        .itembox2 .picb{
            width:40%;
            display:block;
            margin:0 auto;
            padding-top:6%;
        }
        .textb{
            font-size: 8px;
        }
    </style>
</head>
<body>
<div class="tc bgb pdy8">
    <p class="tr"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/setup.PNG" class="setup" alt=""></p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/head portrait.PNG" style="margin-bottom:-6px;" class="w" alt="">
    <p class="fs18 cw" style="padding:4px 0;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <p class="fs14 cw"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</p>
</div>
<div class="w90 mc">
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=editView">
        <p class="fs20 pdy ct bb">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/personaldata.PNG" class="iconA" alt="">
            <span class="ct">编辑资料</span>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB fr" alt="">
        </p>
    </a>
    <p class="fs20 pdy ct bb">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/services.PNG" class="iconA" alt="">
        <span class="ct">我的服务</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB fr" alt="">
    </p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=main&act=wallet">
        <p class="fs20 pdy ct bb">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/wallet.PNG" class="iconA" alt="">
            <span class="ct">空调圈钱包</span>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB fr" alt="">
        </p>
    </a>
    <p class="fs20 pdy ct bb">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/invitation.PNG" class="iconA" alt="">
        <span class="ct">邀请</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB fr" alt="">
    </p>
    <p class="fs20 pdy ct bb">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/my/help.PNG" class="iconA" alt="">
        <span class="ct">帮助与反馈</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB fr" alt="">
    </p>
</div>
<div class="fb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=gzq&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/gzq-hs.PNG" class="picb" alt="">
                <p class="textb cg">工作圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=rmq&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/rmq-hs.PNG" class="picb" alt="">
                <p class="textb cg">人脉圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=xmq&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/xmq-hs.PNG" class="picb" alt="">
                <p class="textb cg">项目圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=wxq">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/wxq-hs.PNG" class="picb" alt="">
                <p class="textb cg">外协圈</p>
            </div>
        </div>
    </a>
    <a>
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/wd-ls.PNG" class="picb" alt="">
                <p class="textb cb">我的</p>
            </div>
        </div>
    </a>
    <div class="clear"></div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
</body>
</html><?php }} ?>
