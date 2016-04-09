<?php

class Mod_App_Order extends Mod_App_Common
{
	private $order_db;

	const STATUS_DELETE = -1;
	const STATUS_CREATE = 0;

	const STATUS_ASSGIN = 10; 				#派单
	const STATUS_TAKING = 20; 				#接单
	const STATUS_SUBMIT_WORKEORDER = 30; 	#提交工单
	const STATUS_WORKEORDER_CONFIRM = 40; 	#确认工单
	const STATUS_MAKE_PRICE = 50; 			#定价
	const STATUS_PAY = 60; 					#付款

	public function __construct() {
		parent::__construct();
		$this->order_db = 'kong_app_order';
	}
	
	public function getOrderById($order_id) {
		return $this->db->getRow("SELECT * FROM {$this->order_db} WHERE `order_id` = " . $order_id);
	}
	
	public function changeOrderStatus($status, $order_id){
		return $this->db->update($this->order_db, array('status' => $status), 'order_id = ' . $order_id);
	}
	
	
	public function createOrder($user_id, $customer_name, $customer_phone, $customer_address, $project_name, $country_id) {
		$data = array();
		$data['create_time'] 		= time();
		list($usec, $sec) 			= explode(' ', microtime());
		$data['order_id'] 			= $sec . sprintf("%03d", ceil($usec*1000)) .rand(0,9);
		$data['user_id'] 			= $user_id;
		$data['status'] 			= self::STATUS_CREATE;
		$data['project_name'] 		= $project_name;
		$data['country_id']			= $country_id;

		$data['customer_name'] 		= $customer_name;
		$data['customer_phone'] 	= $customer_phone;
		$data['customer_address'] 	= $customer_address;


		return $this->db->insert($this->order_db, $data);
	}
	
	public function orderSave($order_id, $user_id, $customer_name, $customer_phone, $customer_address, $project_name, $country_id) {
		$data = array();
		$data['create_time'] 		= time();
		$data['user_id'] 			= $user_id;
		$data['project_name'] 		= $project_name;
		$data['country_id']			= $country_id;

		$data['customer_name'] 		= $customer_name;
		$data['customer_phone'] 	= $customer_phone;
		$data['customer_address'] 	= $customer_address;

		return $this->db->update($this->order_db, $data, " `order_id` = '{$order_id}'");

	}

	#根据用户id获取订单
	public function getOrderListByUserId($user_id) {
		return $this->db->getRows("SELECT * FROM {$this->order_db} WHERE `user_id` = " . $user_id);
	}

	#根据订单状态获取订单
	public function getOrdersByStatus($status) {
		return $this->db->getRows("SELECT * FROM {$this->order_db} WHERE `status` = " . $status);
	}


}