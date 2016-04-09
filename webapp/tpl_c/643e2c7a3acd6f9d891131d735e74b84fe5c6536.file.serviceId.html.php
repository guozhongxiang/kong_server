<?php /* Smarty version Smarty-3.1.19, created on 2016-04-09 01:39:52
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\service\serviceId.html" */ ?>
<?php /*%%SmartyHeaderCode:4977570290d3b963d6-78988438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643e2c7a3acd6f9d891131d735e74b84fe5c6536' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\service\\serviceId.html',
      1 => 1460137191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4977570290d3b963d6-78988438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570290d3b963d1_52938131',
  'variables' => 
  array (
    '__host__' => 0,
    'serviceIdList' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570290d3b963d1_52938131')) {function content_570290d3b963d1_52938131($_smarty_tpl) {?><!DOCTYPE html>
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
    <p class="somebtn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceIdEdit">编辑</a>
    </p>
    <div class="clear"></div>
</header>
<div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceIdAdd">
        <div class="tc pdy8 w90 mc bb">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xz.png" class="wicon" alt="">
            <span class="cb">&nbsp;新增服务ID</span>
        </div>
    </a>
    <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serviceIdList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceIdView&sid=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
">
        <div class=" w90 mc pdy8 bb">
            <p class="cb lh24"><?php echo $_smarty_tpl->tpl_vars['service']->value['project_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['service']->value['contact_person'];?>
</p>
            <div class="w100 lh">
                <div class="fl fs12" style="width:55%;">项目名称：<?php echo $_smarty_tpl->tpl_vars['service']->value['project_name'];?>
</div>
                <div class="fl fs12 w40">联系人：<?php echo $_smarty_tpl->tpl_vars['service']->value['contact_person'];?>
</div>
                <div class="clear"></div>
            </div>
            <div class="w100 lh">
                <div class="w50 fl fs12">联系电话：<?php echo $_smarty_tpl->tpl_vars['service']->value['contact_mobile'];?>
</div>
                <div class="w50 fl fs12">详细地址：<?php echo $_smarty_tpl->tpl_vars['service']->value['address'];?>
</div>
                <div class="clear"></div>
            </div>
        </div>
    </a>
    <?php } ?>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
</body>
</html><?php }} ?>
