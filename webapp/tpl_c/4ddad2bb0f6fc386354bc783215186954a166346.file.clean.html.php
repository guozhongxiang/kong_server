<?php /* Smarty version Smarty-3.1.19, created on 2016-04-09 14:11:47
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\airConditionClean\clean.html" */ ?>
<?php /*%%SmartyHeaderCode:16824570290d687cec7-01703918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ddad2bb0f6fc386354bc783215186954a166346' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\airConditionClean\\clean.html',
      1 => 1460182300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16824570290d687cec7-01703918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570290d687cec3_15806455',
  'variables' => 
  array (
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570290d687cec3_15806455')) {function content_570290d687cec3_15806455($_smarty_tpl) {?><!DOCTYPE html>
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
    <p class="cg bb tit">服务ID <span class="cb fr fs14"><a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=airConditionCleanModify" class="cb">修改</a></span><div class="clear"></div></p>
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
    <div class="pr" style="border-radius: 4px;margin-top:5px;">
        <select class="lh24 pdy8 fs14 bgg" id="day" name="date"></select>
        <select class="lh24 pdy8 fs14 bgg w25" id="timeBegin" name="hourBegin">
            <option value="" disabled="disabled">开始时间</option>
        </select>
        ~
        <select class="lh24 pdy8 fs14 bgg w25" id="timeEnd" name="hourEnd">
            <option value="">结束时间</option>
        </select>
        <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/xjt.png" class="icon pa bgg" style="top:10px;right:-1px;" alt=""> -->
    </div>


    <p class="cg bb tit pdt12">备注 </p>
    <textarea name="a" class="bgg ta" id="bb" rows="4" style="margin-top:5px;"></textarea>
</div>
<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=wxq&act=orderStatus"> -->
    <div class="fb" id="condition">
        确认下单
    </div>
<!-- </a> -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/date.js"></script>
<script>
    Athedate.day(document.getElementById("day"),30);
    Athedate.timeline([document.getElementById("timeBegin"),document.getElementById("timeEnd")])
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/zepto.min.js"></script>
<script>
  $('#condition').on('click', function(){
    var node     = $(this);
    // var order_id = node.attr('data-id');
    // var url      = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
" + node.attr('data-url');

    $.ajax({
      url :       "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/index.php?mod=order&act=orderSubmitWorkerOrderAjax",
      type :      "post",
      dataType :  "json",
      data : {
        'order_id'  : "14600090511545",
        'status'    : "14600090511545"
      },
      success: function(data) {
        if (data.errCode == 1) {
          window.location.href = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/index.php?mod=wxq&act=orderStatus";
        } else {
          alert(data.Msg);
        }
      },
      error : function(e) {
        alert('failed');
      }
    });
  });
</script>

</body>
</html><?php }} ?>
