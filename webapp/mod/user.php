<?php
class User extends Common
{
	private $user_db;

	/**
	 * [__construct 构造方法]
	 */
	public function __construct()
	{
		parent::__construct();

		$this->user_db = Load_Class('Mod_App_User');
	}
	
	/**
	*  注册页
	*/
	public function signUpView() {
		$smarty = Template::getInstance();
		$smarty->display("main/signup.html");
	}

	/**
	*  注册
	*/
	public function signUp() {
		$account = ToolUtil::transXSSContent(get_post('account'));
		$password = ToolUtil::transXSSContent(get_post('password'));

		$this->checkEmptyInput($account, $password, 'signInView');
		$user = $this->user_db->GetUserInfoByAccount($account);

		if (!empty($user)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView&error=" . urlencode("已注册的用户"));
		}

		$res = $this->user_db->signUp($account, $password);

		if ($res) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView");
		} else {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signUpView&error=" . urlencode("注册失败"));
		}
	}

	/**
	 * 用户登录页面
	 */
	public function signInView() {
		$smarty = Template::getInstance();
		$smarty->display("main/signin.html");
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
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signUpView&error=" . urlencode("用户名不存在！"));
		}
		
		//check password
		$rst = Mod_App_User::checkPassword($account, $password, $user['password']);
		if (empty($rst)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView&error=" . urlencode("用户名或密码不正确！"));
		}

		//logins	
		$rst = Mod_App_User::login($user);
		if (empty($rst)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView&error=" . urlencode("用户名或密码有误！"));
		}

		ToolUtil::redirect(__HOST__."index.php?mod=main&act=index");
	}

	/**
	*  校验输入为空是否
	*/
	private function checkEmptyInput($account, $password, $act) {
		//check input empty
		if (empty($account)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act={$act}&error=" . urlencode("用户名不能为空！"));
		}
		
		if (empty($password)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act={$act}&error=" . urlencode("密码不能为空！"));
		}
	}

	/**
	 * 退出登录
	 */
	public function logout() {
		setcookie("a_uid", "", time()-3600);
		setcookie("a_skey", "", time()-3600);

		$loginUid = Mod_App_User::getLoginUid();
		$skey = Mod_App_User::generateSkey($loginUid);
		setcookie($skey, "", time()-3600);

		ToolUtil::redirect(__HOST__."index.php?mod=user&act=signup");
	}

	/**
	 * 修改密码
	 */
	public function changePwd() {
		$loginUid = Mod_App_User::getLoginUid();
		$db = Config::getDB("db1");
		$user = $db->getRow('');
		if (empty($user)) {
			exit(json_encode(array('errCode'=>0, 'errMsg'=>'出错了')));
		}
		$mobile = $user['mobile'];
		$pwd = get_post('password');
		$pwd = Mod_App_User::generatePassword($mobile, $pwd);

		
		if ($ret) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signup");
		}
	}

	/**
	*  编辑信息页面
	*/
	public function editView() {
		$user = $this->user_db->GetUserInfoById($this->uid);

		$smarty = Template::getInstance();
		$smarty->assign('name', $user['name']);
		$smarty->assign('mobile', $user['mobile']);
		$smarty->assign('address', $user['address']);
		$smarty->assign('company', $user['company']);
		$smarty->assign('birthday', $user['birthday']);
		$smarty->assign('__host__', __HOST__);
		$smarty->display("main/edit.html");
	}

	/**
	*  编辑个人信息
	*/
	public function editUserInfo() {
		$data['name'] 		= ToolUtil::transXSSContent(get_post('name'));
		$data['mobile'] 	= ToolUtil::transXSSContent(get_post('mobile'));
		$data['birthday'] 	= ToolUtil::transXSSContent(get_post('birthday'));
		$data['address'] 	= ToolUtil::transXSSContent(get_post('address'));
		$data['company'] 	= ToolUtil::transXSSContent(get_post('company'));

		$this->user_db->updateUserInfo($this->uid, $data);

		ToolUtil::redirect(__HOST__."index.php?mod=user&act=editView");
	}
}