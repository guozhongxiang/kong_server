<?php
class pub extends Common
{
	private $area_module;


	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		$this->area_module = Load_Class('Mod_Public_Area');
	}


	#订单详情
	public function getAreaOptionAjax() {
		$tid = get_query('tid');
		$level = get_query('level');
		
		$option_html='<option value="0">请选择</option>';
		if ($level==1) {
			$list = $this->area_module->getProvincialList();
		}

		if ($level==2) {
			$list = $this->area_module->getCityList($tid);
		}

		if ($level==3) {
			$list = $this->area_module->getCountyList($tid);
		}

		$len=count($list);
		for ($i=0; $i < $len; $i++) { 
			$option_html=$option_html.'<option value="'.$list[$i]['id'].'">'.$list[$i]['area_name'].'</option>';
		}
		$this->AjaxReturn(1, '', $option_html);
	}
}