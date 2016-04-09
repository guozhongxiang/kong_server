<?php
class Cfg_Login {
	
	//登录态skey的私钥
	public static $appSkey = '13&ds8lFDlls8S(';
	
	//登录态的过期时间
	public static $skeyExpire = 1800;//s
	
	//sms每天次数
	public static $smsTimes = 5;
	
	//app登录态过期时间
	public static $appSkeyExpire = 5184000;//2个月
	
}