<?php
class order extends Common
{
	private $order_model;
	private $area_module;

	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		parent::__construct();
		$this->order_model = Load_Class('Mod_App_Order');
		$this->area_module = Load_Class('Mod_Public_Area');
	}


	#订单详情
	public function info() {

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("admin/order_view.html");
	}


	#订单保存
	public function add() {

		$Provincial_list_data = $this->area_module->getProvincialList();
		
		$smarty = Template::getInstance();
		$smarty->assign('Provincial_list_data', $Provincial_list_data);
		$smarty->assign('__host__', __HOST__);
		$smarty->display("admin/order_form.html");
	}

	//订单编辑
	public function edit() {
		$order_id 	= get_post('order_id');

		$projectname 	= get_post('projectname');
		$username		= get_post('username');
		$mobile 		= get_post('mobile');
		$country_id		= get_post('county');
		$detailaddress 	= get_post('detailaddress');
		$username		= get_post('username');


		if ($order_id) {
			$this->order_model->orderSave($order_id, $this->uid, $username, $mobile, $detailaddress, $projectname, $country_id);
		} else {
			$this->order_model->createOrder($this->uid, $username, $mobile, $detailaddress, $projectname, $country_id);
		}

		ToolUtil::redirect(__HOST__."index.php?mod=order&act=lis&type=admin");
	}

	#订单保存
	public function editView() {
		$order_id 	= get_query('order_id');
		$order_data = $this->order_model->getOrderById($order_id);
		//省市县
		$parent_list_data = $this->area_module->getAreaParentsListByCountryId($order_data['country_id']);

		$Provincial_list_data = $this->area_module->getProvincialList();

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->assign('order_data', $order_data);
		$smarty->assign('parent_list_data', $parent_list_data);
		$smarty->assign('Provincial_list_data', $Provincial_list_data);
		$smarty->display("admin/order_editview.html");
	}


	//订单列表展示
	public function lis() {
		$order_list = $this->order_model->getOrderListByUserId($this->uid);

		foreach ($order_list as &$order) {
			$order['address']		= $this->area_module->getAreaStrByCountryId($order['country_id']);
			$order['create_time'] 	= date("Y-m-d H:i:s", $order['create_time']);
			$order['statusTxt']		= Cfg_Common::$order_status[$order['status']];
			$order['next_status']	= empty(Cfg_Common::$order_status[$order['status'] + 10]) ? '' : Cfg_Common::$order_status[$order['status'] + 10];
			$order['change_url'] 	= Cfg_Common::$change_url[$order['status']];
		}

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->assign('order_list', $order_list);
		$smarty->display("admin/order_list.html");
	}
}