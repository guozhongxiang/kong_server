<?php /* Smarty version Smarty-3.1.19, created on 2016-04-09 02:01:40
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\project\add.html" */ ?>
<?php /*%%SmartyHeaderCode:217725702f679b9b423-51424132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f732c776b53eb5bc5ce12924b4e1e0b93868cb' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\project\\add.html',
      1 => 1460018944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217725702f679b9b423-51424132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5702f679b9b429_91754174',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5702f679b9b429_91754174')) {function content_5702f679b9b429_91754174($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>服务添加</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .content{
            width:90%;
            margin:0 auto;
        }
        .img{
            width: 25%;
            text-align:center;
        }
        .detail{
            width: 60%;
        }
        .check{
            width: 15%;
        }
        .img img{
            width: 80%;
        }
        .check{
            float: right;
            position:relative;
            width:40px;
            height:40px;
        }
        .check input{
            padding-left:10px;
            position:absolute;
            left:50%;
            top:50%;
        }
        .selecticon{
            position:absolute;
            top:0;
            left:0;
            line-height: 60px;
            display: block;
            height:60px;
        }
        .selecticon img{
            width:100%;
            padding:10px 0;
        }
        .item{
            padding:10px 0;
            border-bottom: 1px solid rgb(222,222,222);
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
    <h1 class="tc">服务添加</h1>
    <p class="somebtn">
        <span id="selectall">全选</span>
    </p>
    <div class="clear"></div>
</header>
<div class="content">
    <div class="item">
        <div class="img fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button1.PNG" alt="">
        </div>
        <div class="detail fl">
            <p style="line-height: 26px">空调清洗</p>
            <p class="fs14">空调清洗空调清洗空调清洗空调清洗空调清洗</p>
        </div>
        <div class="check fl">
            <input id="Checkbox1" type="checkbox" class="checkbox">
            <label for="Checkbox1" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class="clear"></div>
    </div>
    <div class="item">
        <div class="img fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button1.PNG" alt="">
        </div>
        <div class="detail fl">
            <p style="line-height: 26px">空调清洗</p>
            <p class="fs14">空调清洗空调清洗空调清洗空调清洗空调清洗</p>
        </div>
        <div class="check fl">
            <input id="Checkbox2" type="checkbox" class="checkbox">
            <label for="Checkbox2" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class="clear"></div>
    </div>
    <div class="item">
        <div class="img fl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/button1.PNG" alt="">
        </div>
        <div class="detail fl">
            <p style="line-height: 26px">空调清洗</p>
            <p class="fs14">空调清洗空调清洗空调清洗空调清洗空调清洗</p>
        </div>
        <div class="check fl">
            <input id="Checkbox3" type="checkbox" class="checkbox">
            <label for="Checkbox3" class="selecticon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/unchecked.png" alt="">
            </label>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="fb">
    已选择(<span id="selectnum">0</span>/30)
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>

<script>
    var all = document.getElementById("selectall");
    var num = document.getElementById("selectnum");
    var checkbox = document.getElementsByClassName("checkbox");
    var icon = document.getElementsByClassName("selecticon");
    all.onclick = function(){
        for(var i = 0; i < checkbox.length; i++){
            if(checkbox[i].checked == false){
                checkbox[i].checked = true;
            }
            icon[i].getElementsByTagName("img")[0].src = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/select/checked.png";
        }
        num.innerHTML = checkbox.length;
    }
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
