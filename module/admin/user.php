<?php

/**
 * 用户module层
 */

class Mod_Admin_User extends Mod_Admin_Common
{
	private $user_db;
	/**
	 * [__construct 构造方法]
	 */
	public function __construct()
	{
		parent::__construct();
		$this->user_db = 'kong_admin';
	}

	/**
	 * 校验登录密码
	 * @param $username
	 * @param $password
	 * @param $passwordVerify
	 * @return boolean
	 */
	public static function checkPassword($account, $password, $passwordVerify) {
		if (empty($account) || empty($password) || empty($passwordVerify)) return false;
		$checkPassword = self::generatePassword($account, $password);

		if ($checkPassword == $passwordVerify) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * 生成密码规则
	 * @param $username
	 * @param $password
	 * @return string
	 */
	public static function generatePassword($account, $password) {
		if (empty($account) || empty($password)) return false;
		$user = strip_tags(substr($account, 0, 32));
		$pwd = strip_tags(substr($password, 0, 32));

		$checkPassword = md5(substr(md5($pwd), 7, 6) . substr(md5($user), 3, 6));
		return $checkPassword;
	}
	
	/**
	 * 登录态写入
	 * @param $uid
	 */
	public static function login($user) {
		if (empty($user)) return false;
		
		$skey = self::generateSkey($user['id']);
		if (empty($skey)) return false;
		
		$time = time()+Cfg_Login::$skeyExpire;
		setcookie("d_uid", $user['id'], $time);
		setcookie("d_skey", $skey, $time);
		setcookie($skey, json_encode($user), $time);

		return true;
	}
	
	/**
	 * 登录态检验与获取用户uid
	 */
	public static function getLoginUid() {
		$uid = isset($_COOKIE['d_uid']) ? $_COOKIE['d_uid'] : 0;
		$skey = isset($_COOKIE['d_skey']) ? $_COOKIE['d_skey'] : '';
		
		$skeyCheck = self::generateSkey($uid);
		if ($skey != $skeyCheck) {
			return false;
		} 
		
		$time = time()+Cfg_Login::$skeyExpire;
		setcookie("d_uid", $uid, $time);
		setcookie("d_skey", $skey, $time);
		setcookie($skey, empty($_COOKIE[$skey]) ? '' : $_COOKIE[$skey], $time);
		return $uid;
	}

	/**
	 * 生成skey
	 * @param  $uid
	 * @return boolean|string
	 */
	public static function generateSkey($uid) {
		if (empty($uid)) {
			return false;
		}
		
		$skey = substr(md5(Cfg_Login::$appSkey . md5($uid)), 5, 16);
		return $skey;
	}

	/**
	 * [GetUserInfoByAccount 根据账号获取用户信息]
	 * @param [string] $username 	[管理员名称]
	 * @param [string] $field       [需要查询的字段]
	 * @return[array] 				[管理员记录]
	 */
	public function GetUserInfoByAccount($account, $field = '*') {
		if(empty($account)) return '';
		
		$user = $this->db->getRow('SELECT '.$field.' FROM '.$this->user_db.' WHERE `admin_name`="'.$account.'"');

		return empty($user) ? '' : $user;
	}

	/**
	 * [GetUserInfoById 根据Id获取用户信息]
	 * @param [string] $username 	[管理员名称]
	 * @param [string] $field       [需要查询的字段]
	 * @return[array] 				[管理员记录]
	 */
	public function GetUserInfoById($id, $field = '*') {
		if(empty($id)) return '';
		
		$user = $this->db->getRow('SELECT '.$field.' FROM '.$this->user_db.' WHERE `id`="'.$id.'"');

		return empty($user) ? '' : $user;
	}

	/**
	*  用户信息编辑
	*/
	public function updateUserInfo($uid, $data) {
		return $this->db->update($this->user_db, $data, ' id = '.$uid);
	}
}
?>