<?php
class Mod_App_Service extends Mod_App_Common
{
	private $service_db;
	
	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		parent::__construct();
		$this->service_db = 'kong_app_service';
	}

	/**
	*	获取服务列表
	*/
	public function get_list($uid) {
		$data = $this->db->getRows("SELECT * FROM {$this->service_db} WHERE uid = {$uid}");
		return empty($data) ? array() : $data;
	}

	/**
	*	创建服务
	*/
	public function create($uid, $project_name, $contact_person, $contact_mobile, $country_id, $address, $qs_time, $type) {
		$data['uid'] 			= $uid;
		$data['project_name'] 	= $project_name;
		$data['contact_person']	= $contact_person;
		$data['contact_mobile'] = $contact_mobile;
		$data['country_id']		= $country_id;
		$data['address']		= $address;
		$data['qs_time'] 		= $qs_time;
		$data['type']			= $type;

		return $this->db->insert($this->service_db, $data);
	}
}