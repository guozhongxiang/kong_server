<?php /* Smarty version Smarty-3.1.19, created on 2016-04-08 23:15:44
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\service\serviceIdEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:223295703ba57018358-27028843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc2d800dae54974fc1b0b64f665e184c483ea524' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\service\\serviceIdEdit.html',
      1 => 1460018946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223295703ba57018358-27028843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703ba57018358_67937644',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703ba57018358_67937644')) {function content_5703ba57018358_67937644($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>服务ID</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .wicon{
            width:26px;
            margin-bottom:-6px;
        }
        .lh{
            line-height:22px;
        }
        .lh24{
            line-height:26px;
        }




        .check {
            /*float: right;*/
            position: relative;
            /*width: 40px;*/
            /*height: 40px;*/
        }
        .check input {
            padding-left: 10px;
            /*position: absolute;*/
            /*left: 50%;*/
            /*top: 50%;*/
        }
        .checkbox{
            position: absolute;
            left:50%;
            top:50%;
            margin-left:-6px;
            z-index: -1;
        }
        .selecticon {
            position: relative;
            /*top:50%;*/
            /*top: 0;*/
            padding-top:14px;
            /*left: 0;*/
            /*line-height: 60px;*/
            display: block;
            /*height: 60px;*/
            width:100%;
        }
        .selecticon img {
            width: 100%;
            padding: 10px 0;
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
    <h1 class="tc">服务ID</h1>
    <!--<p class="somebtn">-->
        <!--<a href="">编辑</a>-->
    <!--</p>-->
    <div class="clear"></div>
</header>
<div>
    <div class="tc pdy8 w90 mc bb">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xz.png" class="wicon" alt="">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceIdAdd"><span class="cb">&nbsp;新增服务ID</span></a>
    </div>


    <div class="w90 mc bb">
        <div class="check w10 fl">
            <input id="Checkbox3" type="checkbox" class="checkbox">
            <label for="Checkbox3" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class=" w90 mc pdy8 fl">
            <p class="cb lh24">云顶国际-王五</p>
            <div class="w100 lh">
                <div class="fl fs14" style="width:55%;">项目名称：云顶国际</div>
                <div class="fl fs14 w40">联系人：张三</div>
                <div class="clear"></div>
            </div>
            <div class="w100 lh">
                <div class="w50 fl fs14">联系电话：112223457</div>
                <div class="w50 fl fs14">详细地址：浙江 杭州 ...</div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="w90 mc bb">
        <div class="check w10 fl">
            <input id="Checkbox1" type="checkbox" class="checkbox">
            <label for="Checkbox1" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class=" w90 mc pdy8 fl">
            <p class="cb lh24">云顶国际-王五</p>
            <div class="w100 lh">
                <div class="fl fs14" style="width:55%;">项目名称：云顶国际</div>
                <div class="fl fs14 w40">联系人：张三</div>
                <div class="clear"></div>
            </div>
            <div class="w100 lh">
                <div class="w50 fl fs14">联系电话：112223457</div>
                <div class="w50 fl fs14">详细地址：浙江 杭州 ...</div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="w90 mc bb">
        <div class="check w10 fl">
            <input id="Checkbox2" type="checkbox" class="checkbox">
            <label for="Checkbox2" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class=" w90 mc pdy8 fl">
            <p class="cb lh24">云顶国际-王五</p>
            <div class="w100 lh">
                <div class="fl fs14" style="width:55%;">项目名称：云顶国际</div>
                <div class="fl fs14 w40">联系人：张三</div>
                <div class="clear"></div>
            </div>
            <div class="w100 lh">
                <div class="w50 fl fs14">联系电话：112223457</div>
                <div class="w50 fl fs14">详细地址：浙江 杭州 ...</div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="fb">
    已选择<span id="selectnum">0</span>条
    <span class="fr" style="padding-right:4px;">删除</span>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>

<script>
    var all = document.getElementById("selectall");
    var num = document.getElementById("selectnum");
    var checkbox = document.getElementsByClassName("checkbox");
    var icon = document.getElementsByClassName("selecticon");
//    all.onclick = function(){
//        for(var i = 0; i < checkbox.length; i++){
//            if(checkbox[i].checked == false){
//                checkbox[i].checked = true;
//            }
//            icon[i].getElementsByTagName("img")[0].src = "../../icon/select/checked.png";
//        }
//        num.innerHTML = checkbox.length;
//    }
    var select = new Array();
    var truecheck = 0;
    for(var i = 0; i < checkbox.length; i++){
        select[i] = function(x){
            checkbox[x].onclick = function(){
                for(var j = 0; j < checkbox.length; j++){
                    if(checkbox[j].checked == true){
                        truecheck++;
                        icon[j].getElementsByTagName("img")[0].src = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/checked.png";
                    }else{
                        icon[j].getElementsByTagName("img")[0].src = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png";
                    }
                }
                num.innerHTML = truecheck;
                truecheck = 0;
            }
        }
        select[i](i)
    }
</script>
</body>
</html><?php }} ?>
