<?php /* Smarty version Smarty-3.1.19, created on 2016-04-09 13:44:59
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\airConditionClean\cleanModify.html" */ ?>
<?php /*%%SmartyHeaderCode:75885703bc6bb2a769-56568693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac22bc8f8514b87989a1359d74806cbdcccde03f' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\airConditionClean\\cleanModify.html',
      1 => 1460180697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75885703bc6bb2a769-56568693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703bc6bb677f3_41087626',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703bc6bb677f3_41087626')) {function content_5703bc6bb677f3_41087626($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>空调清洗</title>
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
        .pdy20{
            padding:20px 0;
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
        .input{
            outline:none;
            width:60%;
            padding:4px 6px;
            border-radius:3px;
            border:1px solid #dddddd;
        }
        .wicon{
            width:26px;
            margin-bottom:-6px;
        }
        select{
            border:none;
            outline: none;
        }
        #day{
            width: 46%;
        }
        .w25{
            width: 22%;
        }
        .bdo{
            border-top:1px solid rgba(0,0,0,0);
            border-bottom:1px solid rgba(0,0,0,0);
        }
        .dn{
            display: none;
        }
        .qd{
            top:9px;
            right:-1.2em;
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
    <h1 class="tc">空调清洗</h1>
    <div class="clear"></div>
</header>
<div class="content">
    <p class="cg bb tit">服务ID <span class="cb fr fs14">修改</span><div class="clear"></div></p>
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
    <!--<div class="bgg pr" style="border-radius: 4px;margin-top:5px;">-->
        <!--<select class="lh24 pdy8 pdx fs14 bgg" id="select">-->
        <!--</select>-->
        <!--&lt;!&ndash; <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon pa bgg" style="top:10px;right:-1px;" alt=""> &ndash;&gt;-->
    <!--</div>-->

    <div class="pr" style="border-radius: 4px;margin-top:5px;">
        <select class="lh24 pdy8 fs14 bgg" id="day"></select>
        <select class="lh24 pdy8 fs14 bgg w25" id="timeBegin">
            <option value="">开始时间</option>
        </select>
        ~
        <select class="lh24 pdy8 fs14 bgg w25" id="timeEnd">
            <option value="">结束时间</option>
        </select>
        <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon pa bgg" style="top:10px;right:-1px;" alt=""> -->
    </div>

    <div class="cg tit w100" style="padding:12px 0;">
        <input type="text" class="input" placeholder="项目名称/联系人名" />
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/ss.PNG" class="wicon" alt="">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/index.php?mod=wxq&act=serviceIdAdd" class="fr">
            <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xz.png" class="wicon" alt=""> -->
            <span class="cb fs16">新增</span>
        </a>
        <div class="clear"></div>
    </div>
</div>
<div class="bt pdy20">
    <p class="tc pdy w80 db mc item bdo pr">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/n.PNG" class="wicon" alt="">
        云顶国际-王五
        <span class="fs16 cb db pa qd dn"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean" class="cb">确定</a></span>
    </p>
    <p class="tc pdy db w80 mc item bdo pr">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/n.PNG" class="wicon" alt="">
        云顶国际-王五
        <span class="fs16 cb db pa qd dn"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean" class="cb">确定</a></span>
    </p>
    <p class="tc pdy bt bb cb w80 db mc item pr">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/n.PNG" class="wicon" alt="">
        新东方国际科技中心-张三
        <span class="fs16 cb db pa qd"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean" class="cb">确定</a></span>
    </p>
    <p class="tc pdy db w80 mc item bdo  pr">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/w.PNG" class="wicon" alt="">
        云顶国际-王五
        <span class="fs16 cb db pa qd dn"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean" class="cb">确定</a></span>
    </p>
    <p class="tc pdy db w80 mc item bdo pr">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/w.PNG" class="wicon" alt="">
        云顶国际-王五
        <span class="fs16 cb db pa qd dn"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionClean" class="cb">确定</a></span>
    </p>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script>
    var items = document.getElementsByClassName('item');
    var qd = document.getElementsByClassName('qd');
    var arr = new Array();
    for(var i = 0; i < items.length; i++){
        arr[i] = function(x){
            items[x].onclick = function(){
                for(var j = 0; j < items.length; j++){
                    items[j].setAttribute("class","tc pdy db w80 mc item bdo pr");
                    qd[j].setAttribute("class","fs16 cb db pa qd dn");
                }
                this.setAttribute("class","tc pdy bt bb cb w80 db mc item pr");
                qd[x].setAttribute("class","fs16 cb db pa qd");
            }
        };
        arr[i](i);
    }
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/date.js"></script>
<script>
    Athedate.day(document.getElementById("day"),30);
    Athedate.timeline([document.getElementById("timeBegin"),document.getElementById("timeEnd")])
</script>


</body>
</html><?php }} ?>
