<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>安装超人管理平台</title>
  <meta name="keywords" content="index">
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
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>一些常用模块</small></div>
    </div>
	<?php if($_SESSION['admin_type']== 'admin' ): ?><ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="/admin/order/financelist" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>财务审核</a></li>
      <li><a href="/admin/manage/" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>客服管理</a></li>
      <li><a href="/admin/vip/" class="am-text-danger"><span class="am-icon-btn am-icon-user-md"></span><br/>会员管理</a></li>
      <li><a href="/admin/worker/" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>联盟管理</a></li>
    </ul>
	<?php else: ?>
	<ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="/admin/order/waitpaylist" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>待付款订单</a></li>
      <li><a href="/admin/order/waitlist" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>待接单订单</a></li>
      <li><a href="/admin/order/mylist" class="am-text-danger"><span class="am-icon-btn am-icon-file-text"></span><br/>我的订单</a></li>
      <li><a href="/admin/worker/search/" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>联盟成员搜索</a></li>
    </ul><?php endif; ?>

  </div>
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