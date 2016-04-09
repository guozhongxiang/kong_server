<?php
class Order extends Common
{
	private $order_model;
	private $order_id;

	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		parent::__construct();
		$this->loginCheck();		//登录状态校验
		$this->order_model = Load_Class('Mod_App_Order');
		$this->order_id = get_post('order_id');
	}

	/**
	*  登录状态校验
	*/
	public function loginCheck() {
		$loginUid = Mod_App_User::getLoginUid();
		if (empty($loginUid)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView");
		}
	}

	/**
	*  外协圈入口
	*/
	public function wxq() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/index.html");
	}


	//派单
	public function orderAssginAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_ASSGIN, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_ASSGIN);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}


	//接单
	public function orderTakingAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_TAKING, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_TAKING);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}

	//提交工单
	public function orderSubmitWorkerOrderAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_SUBMIT_WORKEORDER, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_SUBMIT_WORKEORDER);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}

	//确认工单
	public function orderWorkerOrderConfirmAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_WORKEORDER_CONFIRM, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_WORKEORDER_CONFIRM);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}

	//定价
	public function orderMakePriceAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_MAKE_PRICE, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_MAKE_PRICE);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}

	public function orderPayAjax() {
		$this->__checkParmes();
		$res = $this->order_model->changeOrderStatus(Mod_App_Order::STATUS_PAY, $this->order_id);
		if ($res) {
			$this->AjaxReturn(1, '', Mod_App_Order::STATUS_PAY);
		} else {
			$this->AjaxReturn(0, '修改订单状态失败');
		}
	}

	private function __checkParmes() {
		if (!$this->order_id) {
			$this->AjaxReturn(0, '缺少订单id');
		}
	}
}