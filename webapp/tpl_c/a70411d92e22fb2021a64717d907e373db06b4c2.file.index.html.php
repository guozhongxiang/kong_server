<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 13:29:30
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\xmq\index.html" */ ?>
<?php /*%%SmartyHeaderCode:141555705ec7d8e76c4-21245357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70411d92e22fb2021a64717d907e373db06b4c2' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\xmq\\index.html',
      1 => 1460006947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141555705ec7d8e76c4-21245357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5705ec7d924753_60480449',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705ec7d924753_60480449')) {function content_5705ec7d924753_60480449($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/public.css">
    <meta charset="UTF-8">
    <title>流程审批</title>
    <style>
        .box{
            width:50%;
            min-height:50px;
            text-align: center;
            position: relative;
        }
        .container{
            background:rgb(46,182,185);
            padding:6% 0 8%;
            position: relative;
        }
        .itembox{
            position: relative;
        }
        .item{
            z-index:-1;
            border-right:1px solid rgb(233,233,233);
            border-bottom:1px solid rgb(233,233,244);
            position: absolute;
        }
        .pic1{
            width:40%;
            margin:0 auto;
            display: block;
        }
        /*.pic1:before{
            content: "1";
            width:12px;
            height: 12px;
            background: #f00;
            border-radius: 50%;
            position: absolute;
            right:12px;
            top:12px;
        }*/
        .text1{
            font-size:14px;
            color:#fff;
        }
        .pic2{
            width:60%;
            display:block;
            margin:0 auto;
            padding-top:12%;
        }
        .text2{
            line-height: 20px;
            font-size: 14px;
            text-align: center;
        }
        .pic2:last-child{
            padding-top: 20%;
        }
        h1{
            color:#fff;
        }
        .tleheader{
            background: rgb(46,182,185);
            border:none;
        }
        .fs12{
            font-size:12px;
            line-height:12px;
        }
        .pdy4{
            margin:10px 0;
        }
        .itembox2{
            position: relative;
            width:20%;
        }
        .fb{
            padding:2px 0;
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
<header class="tleheader">
    <p class="backbtn">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/zsjnztb.PNG" class="backpic" alt="">
    </p>
    <h1 class="tc">云钉国际系统改造</h1>
    <p class="somebtn">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button+.PNG" class="backpic" alt="">
    </p>
</header>
<div class="container" style="padding:1px 0;">
    <p class="tc fs12 pdy4">2016.0102-2016.0108-2016.02.9</p>
    <div class="pdy4" style="height:12px;width:75%;margin:10px auto;line-height:12px;border-radius:6px;background:rgb(244,244,244);border:1px solid rgb(233,233,233);">
        <div class="fs12 tc" style="height:12px;width:60%;line-height:12px;border-radius:6px;background:rgb(255,102,0);">30/50天</div>
    </div>
</div>
<div>
    <a href="xmq-gsgg1/lsgg.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button1.PNG" class="pic2" alt="">
                <p class="text2">项目公告</p>
            </div>
        </div>
    </a>
    <a href="xmq-lcsp2/gzq2.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button2.PNG" class="pic2" alt="">
                <p class="text2">流程审批</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmrl-3/gzrl-1.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button3.PNG" class="pic2" alt="">
                <p class="text2">项目日历</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmsk-4/xmsk-cw1.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button4.PNG" class="pic2" alt="">
                <p class="text2">项目收款</p>
            </div>
        </div>
    </a>
    <a href="xmq-gxrb-5/gxrlb.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button5.PNG" class="pic2" alt="">
                <p class="text2">关系人</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmgy-6/yxrm-1.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button6.PNG" class="pic2" alt="">
                <p class="text2">项目概要</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmxj-7/xmxj.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button7.PNG" class="pic2" alt="">
                <p class="text2">项目巡检</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmy-8/xky-wdwj-6.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button8.PNG" class="pic2" alt="">
                <p class="text2">项目云</p>
            </div>
        </div>
    </a>
    <a href="xmq-xmtxl-9/txl.html">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button9.PNG" class="pic2" alt="">
                <p class="text2">项目通讯录</p>
            </div>
        </div>
    </a>
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/xmq/xiangmuquan/button10.PNG" class="pic2" alt="">
            </div>
        </div>
    <div class="clear"></div>
</div>

<div class="fb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=gzq&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/rmq/renmaiquan/gzq-hs.PNG" class="picb" alt="">
                <p class="textb cg">工作圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=rmq&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/rmq/renmaiquan/rmq-hs.PNG" class="picb" alt="">
                <p class="textb cg">人脉圈</p>
            </div>
        </div>
    </a>
    <a>
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/rmq/renmaiquan/xmq-ls.PNG" class="picb" alt="">
                <p class="textb cb">项目圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=wxq">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/rmq/renmaiquan/wxq-hs.PNG" class="picb" alt="">
                <p class="textb cg">外协圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/index.php?mod=main&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/rmq/renmaiquan/wd-hs.PNG" class="picb" alt="">
                <p class="textb cg">我的</p>
            </div>
        </div>
    </a>
    <div class="clear"></div>
</div>
<script>
    var sw = document.body.offsetWidth;
    var items = document.getElementsByClassName("itembox");
    var item = document.getElementsByClassName("item");
    for(var i = 0; i < items.length; i++){
        items[i].style.width = sw/4 + "px";
        items[i].style.height = sw/4 + "px";
        item[i].style.width = sw/4 + "px";
        item[i].style.height = sw/4 + "px";
        if((i+1)%4==0){
            item[i].style.borderRight = "none";
        }
    }
</script>
</body>
</html><?php }} ?>