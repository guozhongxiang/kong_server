<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 08:54:29
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\order_editview.html" */ ?>
<?php /*%%SmartyHeaderCode:160485705adda7eaff9-03824233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70bfcba47107b83307e9d9085eeb7a181817742' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\order_editview.html',
      1 => 1459990465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160485705adda7eaff9-03824233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5705adda865114_05944475',
  'variables' => 
  array (
    '__host__' => 0,
    'order_data' => 0,
    'Provincial_list_data' => 0,
    'provincial' => 0,
    'parent_list_data' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705adda865114_05944475')) {function content_5705adda865114_05944475($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php echo $_smarty_tpl->getSubTemplate ("admin/sideBar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- sidebar end -->

<!-- content start -->
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">下单</strong> /
        <small>form</small>
      </div>
    </div>

    <hr>

    <div class="am-tabs am-margin" data-am-tabs>
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">基本信息</a></li>
      </ul>

      <div class="am-tabs-bd">

        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
          <form class="am-form" action="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
index.php?mod=order&act=edit&type=admin" method="post">
              <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['order_data']->value['order_id'];?>
">
              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  项目名称
                </div>
                <div class="am-u-sm-8 am-u-md-4">
                  <input type="text" name="projectname" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['order_data']->value['project_name'];?>
">
                </div>
                <div class="am-hide-sm-only am-u-md-6"></div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  联系人
                </div>
                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                  <input type="text" name="username" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['order_data']->value['customer_name'];?>
">
                </div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  联系电话
                </div>
                <div class="am-u-sm-8 am-u-md-4">
                  <input type="text" name="mobile" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['order_data']->value['customer_phone'];?>
">
                </div>
                <div class="am-hide-sm-only am-u-md-6"></div>
              </div>

              <div class="am-g am-margin-top">
                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                  地址
                </div>
                <div class="am-u-sm-8 am-u-md-4">
                  <select class="sel" id="provincial" name="provincial">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['provincial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provincial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Provincial_list_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provincial']->key => $_smarty_tpl->tpl_vars['provincial']->value) {
$_smarty_tpl->tpl_vars['provincial']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['provincial']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['parent_list_data']->value['provincial_list'][0]['id']==$_smarty_tpl->tpl_vars['provincial']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['provincial']->value['area_name'];?>
</option>
                    <?php } ?>
                  </select>
                  <select class="sel" id="municipal" name="municipal">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_list_data']->value['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['order']->value['area_name'];?>
</option>
                    <?php } ?>
                  </select>
                  <select class="sel" id="county" name="county">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_list_data']->value['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['order']->value['area_name'];?>
</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="am-u-sm-12 am-u-md-6"></div>
              </div>

              <div class="am-g am-margin-top-sm">
                <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                  详细地址
                </div>
                <div class="am-u-sm-12 am-u-md-10">
                  <textarea rows="10" name="detailaddress" placeholder="请填写详细地址"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['customer_address'];?>
</textarea>
                </div>
              </div>

              <div class="am-margin">
                <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">

$(function(){
  var $provincial=$('#provincial');
  var $municipal=$('#municipal');
  var $county=$('#county');

  $provincial.change(function() {
    $e=$(this);
    $municipal.find('option').remove();
    $county.find('option').remove();
    $county.append($('<option value="0">请选择</option>'));
    $.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:2},function(data) {
      if (data.errCode==1) {
        $municipal.html(data['data']);
      };
    });
  });

  $municipal.change(function() {
    $e=$(this);
    $county.find('option').remove();
    $.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:3},function(data) {
      if (data.errCode==1) {
        $county.html(data['data']);
      };
    });
  });
  
});
</script><?php }} ?>
