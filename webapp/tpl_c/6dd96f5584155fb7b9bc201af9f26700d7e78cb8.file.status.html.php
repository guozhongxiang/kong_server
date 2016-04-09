<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 17:11:06
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\wxq\order\status.html" */ ?>
<?php /*%%SmartyHeaderCode:8940570290d04ac0c5-32431110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dd96f5584155fb7b9bc201af9f26700d7e78cb8' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\wxq\\order\\status.html',
      1 => 1460020262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8940570290d04ac0c5-32431110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570290d04ac0c5_00252159',
  'variables' => 
  array (
    '__host__' => 0,
    'order_list' => 0,
    'order' => 0,
    'order_status_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570290d04ac0c5_00252159')) {function content_570290d04ac0c5_00252159($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/public.css">
    <title>订单状态</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .pdy{
            padding:20px 0;
        }
        .b{
            color:#fff;
            background: rgb(45,181,185);
            padding:2px 6px;
            border-radius: 3px;
            margin-top:6px;
        }
        .icon{
            margin-bottom:-4px;
        }
        .o0{
            opacity: 0;
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
        .pt{
            padding-top:8px;
        }
        .fs14{
            font-size: 12px;;
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
    <h1 class="tc">订单状态</h1>
    <div class="clear"></div>
</header>
<div class="pdy8">


    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
    <div class="w90 pt mc bb">
        <div class="w100 mc pr">
            <div class="w100">
                <div class="w70 fl">
                    <p class="fs14"><?php echo $_smarty_tpl->tpl_vars['order']->value['project_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['order']->value['customer_name'];?>
</p>
                    <p class="fs14">空调维修 <?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
</p>
                </div>
                <div class="b fr tc" style="min-width:4em;">
					<span class="cw">
						<?php if (!empty($_smarty_tpl->tpl_vars['order']->value['next_status'])) {?> 
							<span class="opt" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['order']->value['change_url'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['order']->value['next_status'];?>

							</span>
						<?php } else { ?>
							已付款
						<?php }?>
					</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="w100 h">
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<10) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<10) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/n.PNG" class="w40 icon" alt=""/>
                        <span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<10) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['10'];?>
</span>
                    </p>
                </div>
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<20) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<20) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<20) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['20'];?>
</span></p>
                </div>
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90 o0" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<30) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<30) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<30) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['30'];?>
</span></p>
                </div>
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90 o0" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<40) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<40) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<40) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['40'];?>
</span></p>
                </div>
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90 o0" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<50) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<50) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<50) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['50'];?>
</span></p>
                </div>
                <div class="pl pr tc fl">
                    <p class="tc"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/bighead.PNG" class="w90 o0" alt="" /></p>
                    <p class="tc pr <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<60) {?>lg<?php } else { ?>l<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/wxq/<?php if ($_smarty_tpl->tpl_vars['order']->value['status']<60) {?>wwc<?php } else { ?>ywc<?php }?>.PNG" class="w40" alt="" /></p>
                    <p class="tc"><span class="fs14 <?php if ($_smarty_tpl->tpl_vars['order']->value['status']<60) {?><?php } else { ?>cb<?php }?>"><?php echo $_smarty_tpl->tpl_vars['order_status_arr']->value['60'];?>
</span></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/zepto.min.js"></script>
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
        h[j].style.height = sw/6+sw/6*0.4+sw/6*0.4+20 + "px"
    }
//    h.style.height = sw/6+sw/6*0.4+sw/6*0.4+20 + "px"
//    alert(sw/6+sw/6*0.4+sw/6*0.4)
	$('.opt').on('click', function(){
		var node     = $(this);
		var order_id = node.attr('data-id');
		var url      = "<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
" + node.attr('data-url');

		$.ajax({
		  url :       url,
		  type :      "post",
		  dataType :  "json",
		  data : {
			'order_id'  : order_id,
			'status'    : status
		  },
		  success: function(data) {
			if (data.errCode == 1) {
			  window.location.reload();
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
