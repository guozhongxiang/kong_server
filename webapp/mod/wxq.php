<?php
class Wxq extends Common
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
		$this->service_model = Load_Class('Mod_App_Service');
		$this->area_module = Load_Class('Mod_Public_Area');
	}

	/**
	*  外协圈入口
	*/
	public function wxq() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/index.html");
	}

	/**
	*  订单状态
	*/
	public function orderStatus() {
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
		$smarty->assign('order_status_arr', Cfg_Common::$order_status);
		$smarty->display("wxq/order/status.html");
	}

	/**
	*  服务Id
	*/
	public function serviceId() {
		$serviceIdList = $this->service_model->get_list($this->uid);

		foreach ($serviceIdList as &$data) {
			$data['address'] = $this->area_module->getAreaStrByCountryId($data['country_id']).$data['address'];
		}

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->assign('serviceIdList', $serviceIdList);
		$smarty->display("wxq/service/serviceId.html");
	}

	/**
	*  服务Id编辑
	*/
	public function serviceIdEdit() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/service/serviceIdEdit.html");
	}

	/**
	*  服务Id新增
	*/
	public function serviceIdAdd() {
		$Provincial_list_data = $this->area_module->getProvincialList();
		
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->assign('Provincial_list_data', $Provincial_list_data);
		$smarty->display("wxq/service/serviceIdAdd.html");
	}

	/**
	*  保存服务
	*/
	public function serviceSave() {
		$project_name 	= get_post('project_name');
		$contact_person	= get_post('contact_person');
		$contact_mobile = get_post('contact_mobile');
		$country_id		= get_post('country_id');
		$address		= get_post('address');
		$qs_time 		= strtotime(get_post('qs_time'));
		$type			= get_post('type');

		$this->service_model->create($this->uid, $project_name, $contact_person, $contact_mobile, $country_id, $address, $qs_time, $type);
	
		goto_url(__ROOT__.'index.php?mod=wxq&act=serviceId');
	}

	/**
	*  服务Id单条查看
	*/
	public function serviceIdView() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/service/serviceIdView.html");
	}

	/**
	*  添加项目
	*/
	public function addProject() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/project/add.html");
	}

	/**
	*	空调清洗付款
	*/
	public function airConditionPay() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/pay.html");
	}

	/**
	*	订单确认
	*/
	public function airConditionConfirm() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/orderConfirm.html");
	}

	/**
	*	投诉
	*/
	public function airConditionComplain() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/complain.html");
	}

	/**
	*	投诉界面
	*/
	public function airConditionComplainView() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/complainView.html");
	}

	/**
	*	投诉评价
	*/
	public function airConditionComplainComment() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/complainComment.html");
	}

	/**
	*	评价
	*/
	public function airConditionComment() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/comment.html");
	}

	/**
	*	清洁
	*/
	public function airConditionClean() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/clean.html");
	}

	/**
	*	清洁修改
	*/
	public function airConditionCleanModify() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("wxq/airConditionClean/cleanModify.html");
	}
}