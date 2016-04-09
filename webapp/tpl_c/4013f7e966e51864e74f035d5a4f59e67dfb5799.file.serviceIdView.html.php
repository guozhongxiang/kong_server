<?php /* Smarty version Smarty-3.1.19, created on 2016-04-08 23:16:03
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\service\serviceIdView.html" */ ?>
<?php /*%%SmartyHeaderCode:35115703cde48f0a53-04711724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4013f7e966e51864e74f035d5a4f59e67dfb5799' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\service\\serviceIdView.html',
      1 => 1460018947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35115703cde48f0a53-04711724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703cde48f0a52_54900815',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703cde48f0a52_54900815')) {function content_5703cde48f0a52_54900815($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>服务ID单条查看</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .itemname{
            padding-top:12px;
        }
        .br4{
            border-radius: 4px;
            /*border: 1px solid #dddddd;*/
            font-size: 16px;
            background:#eeeeee;
            padding:13px 2%;
            width: 96%;
            margin-top:4px;
            border: none;
            outline: none;
        }
        .lh{
            line-height:16px;
            padding:13px 2%;
        }
        .wicon{
            width:34px;
            position: absolute;
            right: 8px;
            top:4px;
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
    <h1 class="tc">云顶国际-王五</h1>
    <p class="somebtn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceIdEdit">编辑</a>
    </p>
    <div class="clear"></div>
</header>
<div class="bt w90 mc pdy8">
    <p class="itemname bt">项目名称</p>
    <div class="br4" >云鼎国际</div>
    <p class="itemname">联系人</p>
    <div class="br4" >王五</div>
    <p class="itemname">联系电话</p>
    <div class="br4" >13666666666</div>
    <p class="itemname">地区</p>
    <div class="w100">
        <div class="br4 lh pr w30 fl" style="width:32%;padding:13px 1%;">
            <!--<select id="s_province" name="s_province" class="w100" style="padding:13px 1%;"></select>-->
            浙江省
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/xjths.PNG" class="wicon" alt="">
        </div>
        <div class="br4 lh pr w30 fl" style="width:32%;padding:13px 0;margin-left:1%;">
            <!--<select id="s_city" name="s_city"  class="w100" style="padding:13px 1%;"></select>-->
            杭州市
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/xjths.PNG" class="wicon" alt="">
        </div>
        <div class="br4 lh pr w30 fl" style="width:32%;padding:13px 0;margin-left:1%;">
            <!--<select id="s_county" name="s_county"  class="w100" style="padding:13px 1%;"></select>-->
            西湖区
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/xjths.PNG" class="wicon" alt="">
        </div>
        <div class="clear"></div>

    </div>
    <p class="itemname">详细地址</p>
    <div class="br4" >保淑路XXX号</div>
    <p class="itemname">质保截止日期</p>
    <div class="br4 lh pr">
        2016-6-16
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/xjths.PNG" class="wicon" alt="">
    </div>
    <p class="itemname">空调类型</p>
    <div class="br4" >风冷热泵水冷机组</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>

<script class="resources library" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/area.js" type="text/javascript"></script>
<script type="text/javascript">_init_area();</script>
<script type="text/javascript">
    var Gid  = document.getElementById ;
    var showArea = function(){
        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                Gid('s_city').value + " - 县/区" +
                Gid('s_county').value + "</h3>"
    }
    Gid('s_county').setAttribute('onchange','showArea()');
</script>
</body>
</html><?php }} ?>
