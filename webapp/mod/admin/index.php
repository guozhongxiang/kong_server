<?php
class Index {
	private $user_db;

	/**
	 * [__construct 构造方法]
	 */
	public function __construct() {
		$this->user_db = Load_Class('Mod_Admin_User');
	}

	/**
	*  登录状态校验
	*/
	private function loginCheck() {
		$loginUid = Mod_Admin_User::getLoginUid();
		if (empty($loginUid)) {
			ToolUtil::redirect(__HOST__."index.php?mod=admin&act=loginView&type=admin");
		}
	}

	/**
	 *	登录页面
	 */
	public function loginView() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("admin/login.html");
	}

	/**
	 * 用户登录逻辑
	 */
	public function signIn() {
		$account = ToolUtil::transXSSContent(get_post('account'));
		$password = ToolUtil::transXSSContent(get_post('password'));

		$this->checkEmptyInput($account, $password, 'signIn');
		$user = $this->user_db->GetUserInfoByAccount($account);

		if (empty($user)) {
			ToolUtil::redirect(__HOST__."index.php?mod=index&act=loginView&type=admin&error=" . urlencode("用户名不存在！"));
		}
		
		//check password
		$rst = Mod_Admin_User::checkPassword($account, $password, $user['password']);
		if (empty($rst)) {
			ToolUtil::redirect(__HOST__."index.php?mod=index&act=loginView&type=admin&error=" . urlencode("用户名或密码不正确！"));
		}

		//logins	
		$rst = Mod_Admin_User::login($user);
		if (empty($rst)) {
			ToolUtil::redirect(__HOST__."index.php?mod=index&act=loginView&type=admin&error=" . urlencode("用户名或密码有误！"));
		}

		ToolUtil::redirect(__HOST__."index.php?mod=index&act=index&type=admin");
	}

	/**
	*  校验输入为空是否
	*/
	private function checkEmptyInput($account, $password, $act) {
		//check input empty
		if (empty($account)) {
			ToolUtil::redirect(__HOST__."index.php?mod=index&act={$act}&type=admin&error=" . urlencode("用户名不能为空！"));
		}
		
		if (empty($password)) {
			ToolUtil::redirect(__HOST__."index.php?mod=index&act={$act}&type=admin&error=" . urlencode("密码不能为空！"));
		}
	}

	/**
	 * 用户首页
	 */
	public function index() {
		$smarty = Template::getInstance();
		$smarty->assign('__host__', __HOST__);
		$smarty->display("admin/index.html");
	}
}