<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 23:28:11
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\airConditionClean\comment.html" */ ?>
<?php /*%%SmartyHeaderCode:222325704825f5b91b9-68438641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7292d22dd26fafbce242cd3e7071543ae4e4c2' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\airConditionClean\\comment.html',
      1 => 1459956449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222325704825f5b91b9-68438641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5704825f5b91b9_57879580',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5704825f5b91b9_57879580')) {function content_5704825f5b91b9_57879580($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>投诉</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .content{
            width:90%;
            margin:0 auto;
            padding:12px 0;
        }
        .tit{
            line-height: 24px;
        }
        .pdy{
            padding:6px 0;
        }
        .pdx{
            padding-left: 10px;
        }
        .bgg{
            background:rgb(233,233,233) ;
        }
        .lh{
            line-height: 24px;
        }
        .pdt12{
            padding-top:12px;
        }
        .icon{
            width: 26px;
            float: right;
            padding:0 8px;
            margin-top:-4px;
        }
        .ta{
            border:none;
            outline:none;
            width: 100%;
            line-height:24px;
            color:#000;
        }
        .pdy13{
            padding:13px  8px;
        }
        .w49{
            width: 49%;
        }
        .l img{
            background: #fff;;
        }
        .lg img{
            background: #fff;;
        }
        .l:before{
            content:'';
            width:100%;
            border-top:1px solid rgb(45,181,185);
            position:absolute;
            left:0;
            z-index: -1;
            top:10px;
        }
        .lg:before{
            content:'';
            width:100%;
            border-top:1px solid rgb(200,200,200);
            position:absolute;
            left:0;
            z-index: -1;
            top:10px;
        }
        .wicon{
            width:32px;
            margin-bottom:-8px;
        }
        .txta{
            border:1px solid #dddddd;
            resize: none;
            border-radius: 5px;
            background: #dddddd;
            outline: none;
            margin-bottom:50px;
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
    <h1 class="tc" style="font-size:16px">订单编号 0571151011001</h1>
    <div class="clear"></div>
</header>
<div class="content bb">
    <p class="bb tit cb fs18">评价</p>

    <p class="cg tit pdy8">
        空调维修
        201605700101001
    </p>
    <p class="cg tit pdy8">
        小儿信息：
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="wicon" alt=""> 狄丹阳
    </p>
    <p class="cg tit pdy8 bb">
        工程师信息：
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="wicon" alt=""> 张三
    </p>

    <p class="tit cg fs18 pdy13">评价意见</p>
    <p class="cg tit pdy8 w90 db mc">满意度 <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="wicon" alt=""></p>
    <textarea name="" class="txta w90 mc db " id="" cols="30" rows="10"></textarea>
</div>
<a href="ts.html">
    <div class="w80 mc tc cw bgb pdy8 bt" style="margin-bottom:20px;margin-top:20px;border-radius:6px;">
        提交评价
    </div>
</a>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script>
    var sw = document.body.offsetWidth*0.9*0.9;
    var pl = document.getElementsByClassName('pl');
    var h = document.getElementsByClassName('h');
    var ih = document.getElementById('ih');
    for(var i = 0; i < pl.length; i++){
        pl[i].style.width = sw/6 + "px";
    }
    for(var j = 0; j < h.length; j++){
        h[j].style.height = sw/6*0.4+sw/6*0.4+10 + "px"
    }
    //    h.style.height = sw/6+sw/6*0.4+sw/6*0.4+20 + "px"
    //    alert(sw/6+sw/6*0.4+sw/6*0.4)
</script>
</body>
</html><?php }} ?>
