<?php /* Smarty version Smarty-3.1.19, created on 2016-04-08 20:45:00
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\main\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2908156ffebeee6e8e7-19965429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e21a3df02360161ac8a638f6d5c803e1f1e55fc' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\main\\edit.html',
      1 => 1460119495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2908156ffebeee6e8e7-19965429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ffebeee6e8e7_77156025',
  'variables' => 
  array (
    '__host__' => 0,
    'name' => 0,
    'birthday' => 0,
    'address' => 0,
    'company' => 0,
    'mobile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffebeee6e8e7_77156025')) {function content_56ffebeee6e8e7_77156025($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/public.css">
    <title>编辑资料</title>
    <style>
        .tleheader{
            background: rgb(45,181,185);
            color:#fff;
        }
        .ct{
            margin:6px 0;
        }
        .tx{
            height: 70px;
            line-height: 70px;
        }
        .head{
            width:70px;
            height:70px;
        }
        .iconB{
            width:26px;
            margin-bottom:20px;
        }
        .w96{
            width: 96%;
        }
        .xm{
            height: 50px;
            line-height: 50px;
        }
        .iconA{
            width:26px;
            margin-top: 12px;
            padding-left:10px;
        }
        input{
            border:none;
            outline:none;
        }
        #canvas{
            border:1px solid #dddddd;
        }
        .bdn{
            border:none;
            outline: none;
        }
        #preview{
            /*border:1px solid #dddddd;*/
        }
    </style>
</head>
<body class="bgg">
<header class="tleheader">
    <p class="backbtn">
        <a style="margin:0; text-decoration: none">
            <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/zjt.PNG" class="backpic" alt="">
            <span>返回</span>
        </a>
    </p>
    <h1 class="tc">编辑资料</h1>
    <div class="clear"></div>
</header>
<form action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=user&act=editUserInfo" method="post">
    <div class="bgw ct">
            <div class="tx w96 mc bb" style="padding:3px 0;">
                头像
        <label for="headpic">
                <div class="fr tx"  id="preview">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/main/personaldata/headportrait.PNG" id="imghead" class="head" alt="">
                    <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconB" alt=""> -->
                </div>
        </label>
                <div class="clear"></div>
            </div>
        <input type="file" id="headpic" style="display: none;"  onchange="previewImage(this)"  />

        <input type="text" id="headimg"  name="headimg" style="display:none;" />

        <div class="xm w96 mc bb">
            姓名
            <input type="text" class="fs16 w70" name="name"  maxlength="10" placeholder="姓名" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
            <div class="clear"></div>
        </div>
        <div class="xm w96 mc bb">
            生日
            <input type="text" class="fs16 w70" name="birthday" maxlength="10"  onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"  placeholder="19710424" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
">
            <div class="clear"></div>
        </div>
        <div class="xm w96 mc">
            所在地区
            <input type="text" class="fs16 w70" name="address" placeholder="所在地区" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">
            <!--<div class="fr xm">-->
                <!--&lt;!&ndash;<img src="personal data/head portrait.PNG" class="head" alt="">&ndash;&gt;-->
                <!--未设置-->
                <!--<img src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
img/icon/arrow/yjths.png" class="iconA fr" alt="">-->
            <!--</div>-->
            <div class="clear"></div>
        </div>
    </div>
    <div class="bgw ct">
        <div class="xm w96 mc bb">
            公司名
            <input type="text" class="fs16 w70" name="company" placeholder="公司企业名称" value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
">
            <div class="clear"></div>
        </div>
        <!--<div class="xm w96 mc bb">-->
            <!--<input type="text" class="fs16 w70" name="name" placeholder="姓名">-->
            <!--<span class="fr">某某</span>-->
            <!--<div class="clear"></div>-->
        <!--</div>-->

        <!--<div class="xm w96 mc bb">-->
            <!--姓名-->
            <!--<input type="text" class="fs16 w70" name="CompanyName" maxlength="10" placeholder="某某">-->
            <!--<div class="clear"></div>-->
        <!--</div>-->
        <!--<div class="xm w96 mc bb">-->
            <!--<input type="text" class="fs16 w60" name="tel" placeholder="13013013000">-->
            <!--<span class="fr">13013013000</span>-->
            <!--<div class="clear"></div>-->
        <!--</div>-->
        <div class="xm w96 mc bb">
            电话
            <input type="text" class="fs16 w70" name="mobile" maxlength="11"  onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"  placeholder="13013013000" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
">
            <div class="clear"></div>
        </div>
        <div class="xm w96 mc bb tc" style="padding:20px 0;">
        <button class="w80 bdn mc tc cw bgb pdy8" type="submit" style="border-radius:6px;">
            保存
        </button>
        </div>
    </div>
</form>
<div id="canvasbox" style="display: none;"></div>
<div id="prewviewT" class="pa w100" style="height:100%;background: #eee;top:0;left:0;display: none;">
    <header class="tleheader">
        <p class="backbtn">
            <a> < </a>
        </p>
        <h1 style="opacity: 0;">0</h1>
        <p class="somebtn">
            <a>提交</a>
        </p>
    </header>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
js/main/back.js"></script>
<script type="text/javascript">
            //图片上传预览    IE是用了滤镜。
            function previewImage(file)
            {
                var MAXWIDTH  = 70;
                var MAXHEIGHT = 70;
                var div = document.getElementById('preview');
                var div1 = document.getElementById('canvasbox');
                div.style.width = 70 + "px";
                div.style.height = 70 + "px";
                div.style.overflow = "hidden";
                div.style.float = "right";
                var i=0;
                canvas = function(img,rect){
                    div1.innerHTML = "<canvas id=canvas> </canvas>";
                    var canvas = document.getElementById('canvas');
                    canvas.width = MAXWIDTH*4;
                    canvas.height = MAXHEIGHT*4;
                    var ctx = canvas.getContext('2d');
                    var imgsrc = new Image();
                    imgsrc.src = img.src;
                    imgsrc.onload = function(){
                        ctx.drawImage(imgsrc,rect.left*4,rect.top*4,rect.width*4,rect.height*4);

                        console.log(canvas.toDataURL("image/png"));

                        div.innerHTML ='<img id=imghead>';
                        var img = document.getElementById('imghead');
                        img.style.width = MAXWIDTH + "px";
                        img.src = canvas.toDataURL("image/png");

                        document.getElementById("headimg").value = canvas.toDataURL("image/png")
//                        img.onload = function(){
//
//                        }

                    };

                };
                if (file.files && file.files[0])
                {
                    div.innerHTML ='<img id=imghead>';
                    var img = document.getElementById('imghead');
                    img.onload = function(){
                        rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
//                        img.width  =  rect.width;
//                        img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
//                        img.style.marginTop = rect.top+'px';
//                        img.style.marginLeft = rect.left+'px';

                        canvas(img,rect);
                    };

                    var reader = new FileReader();
                    reader.onload = function(evt){
                        img.src = evt.target.result;
                    };
                    reader.readAsDataURL(file.files[0]);
                }
                else //兼容IE
                {
                    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
                    file.select();
                    var src = document.selection.createRange().text;
                    div.innerHTML = '<img id=imghead>';
                    var img = document.getElementById('imghead');
                    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
                    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
                    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
                }
            }
    function clacImgZoomParam( maxWidth, maxHeight, width, height ){
        var param = {top:0, left:0, width:width, height:height};
        if( width>maxWidth || height>maxHeight )
        {
            rateWidth = width / maxWidth;
            rateHeight = height / maxHeight;

            if( rateWidth < rateHeight )
            {
                param.width =  maxWidth;
                param.height = Math.round(height / rateWidth);
            }else
            {
                param.width = Math.round(width / rateHeight);
                param.height = maxHeight;
            }
        }
//        console.log((maxWidth - param.width) / 2);
//        console.log((maxHeight - param.height) / 2);
        param.left = Math.round((maxWidth - param.width) / 2);
        param.top = Math.round((maxHeight - param.height) / 2);
        return param;
    }
</script>
</body>
</html><?php }} ?>
