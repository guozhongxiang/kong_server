<?php

class Mod_Public_Area extends Mod_App_Common
{
	private $provincial_db;
	private $city_db;
	private $county_db;
	/**
	 * [__construct 构造方法]
	 */
	public function __construct()
	{
		parent::__construct();
		$this->provincial_db 	= 'kong_area_provincial';
		$this->city_db 			= 'kong_area_city';
		$this->county_db 		= 'kong_area_county';
	}

	public function getProvincialList() {
		return $this->db->getRows("SELECT * FROM {$this->provincial_db}");
	}

	public function getCityList($tid) {
		return $this->db->getRows("SELECT * FROM {$this->city_db} WHERE `tid` = " . $tid);
	}

	public function getCountyList($tid) {
		return $this->db->getRows("SELECT * FROM {$this->county_db} WHERE `tid` = " . $tid);
	}

	//根据country_id获取省-市-县字符串
	public function getAreaStrByCountryId($cid) {
		$tmp = $this->db->getRow("SELECT * FROM {$this->county_db} WHERE id = {$cid}");
		if (empty($tmp)) {
			return false;
		}

		$str = $tmp['area_name'];

		$tmp = $this->db->getRow("SELECT * FROM {$this->city_db} WHERE id = {$tmp['tid']}");
		if (empty($tmp)) {
			return false;
		}

		$str = $tmp['area_name'].$str;

		$tmp = $this->db->getRow("SELECT * FROM {$this->provincial_db} WHERE id = {$tmp['tid']}");
		if (empty($tmp)) {
			return false;
		}

		$str = $tmp['area_name'].$str;

		return $str;
	}

	public function getAreaParentsListByCountryId($country_id) {
		$country_list = $this->db->getRows("SELECT * FROM {$this->county_db} WHERE id = {$country_id}");
		if (empty($country_list)) {
			return false;
		}

		$city_list = $this->db->getRows("SELECT * FROM {$this->city_db} WHERE id = {$country_list[0]['tid']}");
		if (empty($city_list)) {
			return false;
		}

		$provincial_list = $this->db->getRows("SELECT * FROM {$this->provincial_db} WHERE id = {$city_list[0]['tid']}");
		if (empty($provincial_list)) {
			return false;
		}

		return array('country_list' => $country_list, 'city_list' => $city_list, 'provincial_list' => $provincial_list);
	}
}