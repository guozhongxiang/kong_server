<?php
class Main extends Common
{
	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		parent::__construct();

		$this->loginCheck();		//登录状态校验
		$this->user_db = Load_Class('Mod_App_User');
	}

	/**
	 * 用户首页
	 */
	public function index() {
		$user = $this->user_db->GetUserInfoById($this->uid);

		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->assign('name', $user['name']);
		$smarty->assign('company', $user['company']);
		$smarty->display("main/index.html");
	}

	/**
	*  个人钱包
	*/
	public function wallet() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("main/wallet.html");
	}
}