<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>安装超人管理平台</title>
  <meta name="keywords" content="table">
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

    <div class="am-g">

		<div class="am-cf am-padding">
			<div class="am-fl am-cf">
			<strong class="am-text-primary am-text-lg">自定义类别管理</strong>
			<a type="button" class="am-btn am-btn-default am-btn-xs" href="<?php echo U('admin/select/add');?>"><span class="am-icon-plus"></span>新增</a></div>
		</div>
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
				<th class="table-title">类别名</th>
				<th class="table-type">类别标识</th>
				<th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
		  <?php if(is_array($select_list)): $i = 0; $__LIST__ = $select_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
              <td><a href="#"><?php echo ($data['itemname']); ?></a></td>
              <td><?php echo ($data['itemgroup']); ?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary edit" href="<?php echo U('admin/select/edit','id='.$data['id']);?>"><span class="am-icon-pencil-square-o"></span>修改</a>
                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary edit" href="<?php echo U('admin/select/cacheCreate','itemgroup='.$data['itemgroup']);?>"><span class="am-icon-pencil-square-o"></span>生成</a>
					<a type="button" class="am-btn am-btn-default am-btn-xs" href="<?php echo U('admin/select/enum','itemgroup='.$data['itemgroup'],'');?>"><span class="am-icon-plus"></span>子项管理</a>
                  </div>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
          <hr />
        </form>
      </div>
    </div>
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
<script src="/static/layer.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.del').click(function() {
		$this=$(this);
		layer.confirm('确定要删除吗？', function(){
			window.location.href=$this.attr('href');
		},'提醒')
		return false;
	});
})
</script>