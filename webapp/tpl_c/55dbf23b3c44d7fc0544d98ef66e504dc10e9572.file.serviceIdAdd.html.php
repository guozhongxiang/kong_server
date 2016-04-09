<?php /* Smarty version Smarty-3.1.19, created on 2016-04-09 01:43:55
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\service\serviceIdAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:121215703ba599dec84-30741698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55dbf23b3c44d7fc0544d98ef66e504dc10e9572' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\service\\serviceIdAdd.html',
      1 => 1460137433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121215703ba599dec84-30741698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703ba599dec81_02047374',
  'variables' => 
  array (
    '__host__' => 0,
    'Provincial_list_data' => 0,
    'provincial' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703ba599dec81_02047374')) {function content_5703ba599dec81_02047374($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>新增服务ID</title>
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
            padding:10px 2%;
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
            width:26px;
            position: absolute;
            right: 8px;
            top:8px;
        }
        .icon{
            width:26px;
            margin-bottom:-6px;
        }
        .fb{
            color:#fff;
            background: rgb(45,181,185);
        }
        .pdb70{
            padding-bottom:70px;
        }
        .i{
            margin-right:-5px;
        }
        select{
            border:none;
            outline: none;
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
    <h1 class="tc">新增服务ID</h1>
    <!--<p class="somebtn">-->
        <!--<a href="">编辑</a>-->
    <!--</p>-->
    <div class="clear"></div>
</header>
<form id="editProjectForm" class="bt w90 mc pdy8 pdb70" action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=serviceSave" method="post">
    <div class="tc pdy8 w90 mc">
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xz.png" class="icon" alt="">
        <a href="xzfwiddtck.html"><span class="cb">&nbsp;项目导入</span></a>
    </div>
    <p class="itemname bt">项目名称</p>
    <input type="text" class="br4" name="project_name" />
    <p class="itemname" >联系人</p>
    <input type="text" class="br4" name="contact_person" />
    <p class="itemname">联系电话</p>
    <input type="text" class="br4" name="contact_mobile" />
    <p class="itemname">地区</p>
    <div class="w100">
        <div class="br4 lh pr w30 fl" style="width:32%;padding:0 1%;">
            <select id="provincial" name="provincial_id" class="w100 bgg fs16" style="padding:10px 1%;">
                <option value="0">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['provincial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provincial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Provincial_list_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provincial']->key => $_smarty_tpl->tpl_vars['provincial']->value) {
$_smarty_tpl->tpl_vars['provincial']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['provincial']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provincial']->value['area_name'];?>
</option>
                <?php } ?>
            </select>      
        </div>
        <div class="br4 lh pr w30 fl" style="width:32%;padding: 0;margin-left:1%;">
            <select id="municipal" name="municipal_id" class="w100 bgg fs16" style="padding:10px 1%;">
                <option value="0">请选择</option>
            </select>
        </div>
        <div class="br4 lh pr w30 fl" style="width:32%;padding: 0;margin-left:1%;">
            <select id="country" name="country_id" class="w100 bgg fs16" style="padding:10px 1%;">
                <option value="0">请选择</option>
            </select>
        </div>
        <div class="clear"></div>
    </div>
    <p class="itemname">详细地址</p>
    <input type="text" class="br4" name="address" />
    <p class="itemname">质保截止日期</p>
    <div class="br4 lh pr">
        个人用户无需填写
        <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/xjths.PNG" class="wicon" alt="">
    </div>
    <p class="itemname">空调类型</p>
    <input type="text" class="br4" name="type" />
</form>
<div id="addBtn" class="fb">
    保存
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/zepto.min.js"></script>
<script type="text/javascript">
$(function(){
  var $provincial=$('#provincial');
  var $municipal=$('#municipal');
  var $country=$('#country');

  $provincial.change(function() {
    $e=$(this);
    $municipal.find('option').remove();
    $country.find('option').remove();
    $country.append($('<option value="0">请选择</option>'));
    $.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:2},function(data) {
      if (data.errCode==1) {
        $municipal.html(data['data']);
      };
    });
  });

  $municipal.change(function() {
    $e=$(this);
    $country.find('option').remove();
    $.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:3},function(data) {
      if (data.errCode==1) {
        $country.html(data['data']);
      };
    });
  });
  
  $('#addBtn').on('click', function(){
    $('#editProjectForm').submit();
  });
});

        
    
</script>

</body>
</html><?php }} ?>
