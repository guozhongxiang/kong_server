<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 16:49:19
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\index.html" */ ?>
<?php /*%%SmartyHeaderCode:111305701429714d321-37321469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93a91c46c81d915a7acbcdf0ff1162ff2ce6466' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\index.html',
      1 => 1460018938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111305701429714d321-37321469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5701429714d326_48925323',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5701429714d326_48925323')) {function content_5701429714d326_48925323($_smarty_tpl) {?><!DOCTYPE html>
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
        .point{
            width:20px;
            height:20px;
            border-radius: 50%;
            background: #f00;
            position: absolute;
            top:0;
            right:28%;
            color:#fff;
            font-size: 10px;
            line-height: 20px;
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
        .cg{
            color:rgb(167,167,167);
        }
    </style>
</head>
<body>
<header class="tleheader">
        <!--<p class="backbtn"><a href="../gzqsy.html" style="margin:0;">-->
            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/zjt.PNG" class="backpic" alt="">-->
            <!--<span>返回</span></a>-->
        <!--</p>-->
    <h1 class="tc" style="border: none;padding:0;color:#fff;">杭州小空科技有限公司</h1>
</header>
<div class="container">
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=orderStatus">
        <div class="box fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/job/dwsp.png" class="pic1" alt="">
            <p class="text1">订单状态</p>
            <span class="point">1</span>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceId">
        <div class="box fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/job/wfqd.png" class="pic1" alt="">
            <p class="text1">服务ID</p>
            <span class="point">1</span>
        </div>
    </a>
    <div class="clear"></div>
</div>
<div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button2.PNG" class="pic2" alt="">
                <p class="text2">空调清洗</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button3.PNG" class="pic2" alt="">
                <p class="text2">空调维修</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button1.PNG" class="pic2" alt="">
                <p class="text2">空调安装</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=addProject">
        <div class="itembox fl">
            <div class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/button4.png" class="pic2" alt="">
            </div>
        </div>
    </a>
    <div class="clear"></div>
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
    <a>
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/wxq-ls.PNG" class="picb" alt="">
                <p class="textb cb">外协圈</p>
            </div>
        </div>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=main&act=index">
        <div class="itembox2 fl">
            <div class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/renmaiquan/wd-hs.PNG" class="picb" alt="">
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
        items[i].style.width = sw/3 + "px";
        items[i].style.height = sw/3 + "px";
        item[i].style.width = sw/3 + "px";
        item[i].style.height = sw/3 + "px";
        if((i+1)%3==0){
            item[i].style.borderRight = "none";
        }
    }
</script>
</body>
</html><?php }} ?>
