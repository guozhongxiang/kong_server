<?php /* Smarty version Smarty-3.1.19, created on 2016-04-06 23:28:10
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\airConditionClean\complainComment.html" */ ?>
<?php /*%%SmartyHeaderCode:233535704801f92fd83-76667375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55483d10df8160adce1c4f8c61be5dd5c845edc2' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\airConditionClean\\complainComment.html',
      1 => 1459956450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233535704801f92fd83-76667375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5704801f96ce27_23184792',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5704801f96ce27_23184792')) {function content_5704801f96ce27_23184792($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>新东方国际科技中心-张三</title>
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
            /*float: right;*/
            /*padding:0 8px;*/
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
        select{
            border:none;
            outline: none;
            width: 100%;
        }
        .pdn{
            padding:0;
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
    <h1 class="tc" style="font-size:16px">新东方国际科技中心-张三</h1>
    <div class="clear"></div>
</header>
<div class="content">
    <p class="cg bb tit">服务ID 
        <!-- <span class="cb fr fs14"><a href="ktqx-xg.html" class="cb">修改</a></span><div class="clear"></div> -->
    </p>
    <div class="w100 bgg fs14 pdy" style="margin-top:5px;">
        <div class="w100 mc lh">
            <div class="w30 fl tr">项目名称：</div>
            <div class="w70 fl tl">新东方国际科技中心</div>
            <div class="clear"></div>
        </div>
        <div class="w100 mc lh">
            <div class="w30 fl tr">联系人：</div>
            <div class="w70 fl tl">张三</div>
            <div class="clear"></div>
        </div>
        <div class="w100 mc lh">
            <div class="w30 fl tr">联系电话：</div>
            <div class="w70 fl tl">13666666666</div>
            <div class="clear"></div>
        </div>
        <div class="w100 mc lh">
            <div class="w30 fl tr">详细地址：</div>
            <div class="w70 fl tl">浙江省 杭州市 滨江区 江陵路356号</div>
            <div class="clear"></div>
        </div>
        <div class="w100 mc lh">
            <div class="w30 fl tr">空调类型：</div>
            <div class="w70 fl tl">风冷热泵水冷机组</div>
            <div class="clear"></div>
        </div>
    </div>
    <p class="cg bb tit pdt12">服务时间 </p>
    <div class="bgg pr" style="border-radius: 4px;margin-top:5px;">
        <select class="lh24 pdy8 pdx fs14 bgg" id="select">
        </select>
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon pa bgg" style="top:10px;right:-1px;" alt="">
    </div>

    <p class="cg bb tit pdt12">备注 </p>
    <div class="bgg" style="border-radius: 4px;margin-top:5px;">
        <p class="lh24 pdy13 pdx fs14">
            主机无法正常开机，故障代码：XXX
        </p>
    </div>
    <div class="w100">
        <div class="w49 fl">
            <p class="cg bb tit pdt12">小二信息 </p>
            <p class="lh24 pdy13 pdx bgg fs14" style="margin-top:5px">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/head.png" class="icon pdn fl" alt="">
                张三
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon fr" alt="">
            </p>
        </div>
        <div class="w49 fl" style="margin-left:2%">
            <p class="cg bb tit pdt12">工程师信息 </p>
            <p class="lh24 pdy13 pdx bgg fs14" style="margin-top:5px">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/head.png" class="icon pdn fl" alt="">
                李四
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon fr" alt="">
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <p class="cg tit pdt12">订单状态 </p>

    <div class="w100 mc pr">
        <div class="w100 h">
            <div class="pl pr tc fl">
                <p class="tc pr l"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/ywc.PNG" class="w40" alt="" /></p>
                <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/n.PNG" class="w40 wicon" style="margin-bottom:-6px;" alt=""/><span class="fs12 cb">派单</span></p>
            </div>
            <div class="pl pr tc fl">
                <p class="tc pr l"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/ywc.PNG" class="w40" alt="" /></p>
                <p class="tc"><span class="fs12 cb">接单</span></p>
            </div>
            <div class="pl pr tc fl">
                <p class="tc pr l"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/ywc.PNG" class="w40" alt="" /></p>
                <p class="tc"><span class="fs12 cb">提交工单</span></p>
            </div>
            <div class="pl pr tc fl">
                <p class="tc pr lg"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/wwc.PNG" class="w40" alt="" /></p>
                <p class="tc"><span class="fs12">确认工单</span></p>
            </div>
            <div class="pl pr tc fl">
                <p class="tc pr lg"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/wwc.PNG" class="w40" alt="" /></p>
                <p class="tc"><span class="fs12">定价</span></p>
            </div>
            <div class="pl pr tc fl">
                <p class="tc pr lg"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/wwc.PNG" class="w40" alt="" /></p>
                <p class="tc"><span class="fs12">付款</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <p class="cg tit pdy8 bt bb">
        电子工单
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/wwc.PNG" class="fr icon" alt="">
    </p>
    <p class="cg tit pdy8 bb">
        标准价格
        <span class="fr">￥ 1100.00</span>
    </p>
    <p class="cg tit pdy8 bb">
        服务价格
        <span class="fr">￥ 1100.00</span>
    </p>
</div>
<div class="w80 mc tc cw" style="margin-bottom:20px;border-radius:6px;">
    <div class="w50 fl">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionComplainView" class="cw"><div class="w80 bgb pdy8 mc db">投诉</div></a>
    </div>
    <div class="w50 fl">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionComment" class="cw"><div class="w80 bgb pdy8 mc db">评论</div></a>
    </div>
    <div class="clear"></div>
</div>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script>
    var sw = document.body.offsetWidth*0.9;
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
<script src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/date.js"></script>
<script>
    Athedate.select(document.getElementById("select"),30);
</script>
</body>
</html><?php }} ?>
