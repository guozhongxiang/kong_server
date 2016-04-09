<?php
class Xmq extends Common
{
	private $order_model;
	private $area_module;
	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		parent::__construct();
		$this->loginCheck();		//登录状态校验
		$this->order_model = Load_Class('Mod_App_Order');
		$this->area_module = Load_Class('Mod_Public_Area');
	}


	public function index() {

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("xmq/index.html");
	}
}