<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 09:13:04
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\main\wallet.html" */ ?>
<?php /*%%SmartyHeaderCode:385756ffee88d9bb60-50885350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528f245932eae8205afdd9a2e099686834bb2e35' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\main\\wallet.html',
      1 => 1459861570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385756ffee88d9bb60-50885350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ffee88d9bb62_92941842',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffee88d9bb62_92941842')) {function content_56ffee88d9bb62_92941842($_smarty_tpl) {?><!DOCTYPE html>
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
        .bgo{
            background: rgb(234,85,3)
        }
        .cz,.tx{
            border:1px solid #fff;
            padding:2px 12px;
            margin:0 4px;
            border-radius: 7px;
        }
        .fs36{
            font-size: 36px;
        }
        .pdy{
            padding:12px;
        }
        .co{
            color: rgb(234,85,3);
        }
        .bdo{
            border-bottom: 3px solid  rgb(234,85,3);
        }
        .bdg{
            border-bottom: 3px solid  rgb(120,120,120);
        }
        .pdy50{
            padding: 40px 0;
        }
    </style>
</head>
<body>
<header class="tleheader bgo" style="border:none;">
    <p class="backbtn"><a style="margin:0; text-decoration: none">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/zjt.PNG" class="backpic" alt="">
        <span>返回</span></a>
    </p>
    <h1 class="tc">空调圈钱包</h1>
    <div class="clear"></div>
</header>
<div class="bgo pdy8">
    <p class="fs36 tc cw pdy">1088.00</p>
    <p class="tc pdy8"><span class="cz cw fs12">充值</span><span class="tx cw fs12">提现</span></p>
</div>
<div class="pdy20">
    <div class="w80 mc">
        <div class="w50 fl bdo pdy8">
            <p class="tc co">我收到的</p>
        </div>
        <div class="w50 fl bdg pdy8">
            <p class="tc cg">我收到的</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="tc pdy50">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/wallet/wallet.png" class="w40 pdy50" alt="">
        <p class="fs20 cg">您还没有明细</p>
    </div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
</body>
</html><?php }} ?>
