<?php /* Smarty version Smarty-3.1.19, created on 2016-04-07 08:46:29
         compiled from "C:\phpStudy\WWW\kongtiao\kong_server\webapp\tpl\admin\order_list.html" */ ?>
<?php /*%%SmartyHeaderCode:18153570514b1873535-76576890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ed0d8e883da9a221c8d571a42517fae9ed0101' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\kongtiao\\kong_server\\webapp\\tpl\\admin\\order_list.html',
      1 => 1459989972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18153570514b1873535-76576890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570514b18b05c8_44089329',
  'variables' => 
  array (
    'order_list' => 0,
    'order' => 0,
    '__host__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570514b18b05c8_44089329')) {function content_570514b18b05c8_44089329($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php echo $_smarty_tpl->getSubTemplate ("admin/sideBar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">订单列表</strong></div>
      </div>

      <hr>
<!--
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有类别</option>
              <option value="option2">IT业界</option>
              <option value="option3">数码产品</option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option>
            </select>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>
-->
      <div class="am-g">
        <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
            <tr>
              <th>订单ID</th>
              <th>项目名</th>
              <th>客户姓名</th>
              <th>客户电话</th>
              <th>客户地址</th>
              <th>详细地址</th>
              <th>下单时间</th>
              <th>订单状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
              <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['project_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['create_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['statusTxt'];?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary" href="<?php echo $_smarty_tpl->tpl_vars['__host__']->value;?>
/index.php?mod=order&act=editView&type=admin&order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><?php if (!empty($_smarty_tpl->tpl_vars['order']->value['next_status'])) {?><span class="opt" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['order']->value['change_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['next_status'];?>
</span><?php } else { ?>已付款<?php }?></button>
                  </div>
                </div>
              </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
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
</script><?php }} ?>
