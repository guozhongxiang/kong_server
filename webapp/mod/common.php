<?php

/**
 * 公共文件
 * @author  Devil
 * @version v_0.0.1
 * @time    2015-09-28 10:30
 */
abstract class Common
{
	protected $db;
	protected $smarty;
	protected $uid;

	/**
	 * [__construct 构造方法]
	 */
	protected function __construct()
	{
		$this->db = Config::getDB("db1");
		$this->smarty = Template::getInstance();
        $this->uid = Mod_App_User::getLoginUid();
	}

	/**
	*  登录状态校验
	*/
	protected function loginCheck() {
		$loginUid = Mod_App_User::getLoginUid();
		if (empty($loginUid)) {
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=signInView");
		}
	}

	/**
	 * [Is_Login 登录校验]
	 */
	protected function Is_Login()
	{
		if(empty($this->uid))
		{
			ToolUtil::redirect(__HOST__."index.php?mod=user&act=loginPage");
		}
	}

	/**
	 * [AjaxReturn ajax数据返回]
	 * @param [int] 	$code [状态码]
	 * @param [string]  $text [提示信息]
	 * @param [mixed]  	$data [返回数据]
	 */
	protected function AjaxReturn($code = 0, $text = '', $data = '')
	{
		$param = array(
				'errCode'	=>	$code,
				'msg'		=>	$text,
				'data'		=>	$data
			);
		exit(json_encode($param));
	}
}