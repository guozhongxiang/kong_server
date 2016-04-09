<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>安装超人管理平台</title>
  <meta name="keywords" content="form">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/static/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/static/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/static/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/static/assets/css/admin.css">
  <script src="/static/jquery.min.js"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>小空服务</strong> <small>管理平台</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
	  <li>
        <a href="/admin/index/">
          <span class="am-icon-user"></span><span class="admin-fullText"> <?php echo (session('admin_name')); ?>&nbsp(<?php echo (session('group_name')); ?>) </span>
        </a>
      </li> 
	  <li><a href="<?php echo U('admin/index/logout');?>"><span class="am-icon-power-off"></span> <span class="admin-fullText">退出</span></a></li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header> 

<div class="am-cf admin-main">
  <!-- sidebar start -->
        <div class="admin-sidebar">
        <ul class="am-list admin-sidebar-list">
          <?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_list): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($menu_list['url']); ?>"><?php echo ($menu_list['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>


        </div>
  <!-- sidebar end --> 

<!-- content start -->
<form action="<?php echo U('admin/select/addsave');?>" method="post">
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加</strong> / <small>类别</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">添加类别</a></li>
    </ul>

    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
		<div class="am-g am-margin-top">
			<div class="am-u-sm-2 am-text-right">
			  类别名
			</div>
			<div class="am-u-sm-4">
			  <input type="text" class="am-input-sm" name="itemname" id="itemname">
			</div>
			<div class="am-u-sm-6">*必填，不可重复</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-2 am-text-right">
			  类别标识
			</div>
			<div class="am-u-sm-4 col-end">
			  <input type="text" class="am-input-sm" name="itemgroup" id="itemgroup">
			</div>
			<div class="am-u-sm-6">*必填</div>
		</div>
      </div>
    </div>
  </div>

  <div class="am-margin">
    <input type="submit" class="am-btn am-btn-primary" value="确定添加" id="submit">
    <a type="button" class="am-btn am-btn-default" href="<?php echo U('/admin/select');?>">返回列表</a>
  </div>
</div>
</form>
<!-- content end -->

</div>


<footer>
  <hr>
  <p class="am-padding-left">©小空服务管理平台.</p>
</footer> 

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/static/assets/js/polyfill/rem.min.js"></script>
<script src="/static/assets/js/polyfill/respond.min.js"></script>
<script src="/static/assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/assets/js/jquery.min.js"></script>
<script src="/static/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="/static/assets/js/app.js"></script>
</body>
</html>
<script src="/static/layer.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#submit').click(function(){
		var $itemname=$('#itemname');
		var $itemgroup=$('#itemgroup');

		var itemname=$.trim($itemname.val());
		var itemgroup=$.trim($itemgroup.val());

		if(itemname==''){
			tips($itemname,'请填写类别名');
			return false;
		}
		if(itemgroup==''){
			tips($itemgroup,'请填写类别标识');
			return false;
		}
	});
})

var tips=function(e,tit){
	e.focus();
	// 第一个参数输入  标题
	//参数2  要绑定的对象
	//参数3 输出箭头方向
	// 样式
	layer.tips(tit,e,{time:2, guide: 0, style:['background-color:#F26C4F; color:#fff', '#F26C4F']} );	
}
</script>