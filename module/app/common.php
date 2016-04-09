<?php

/**
 * 公共model层
 */
abstract class Mod_App_Common
{
	protected $db;

	/**
	 * [__construct 构造方法]
	 */
	public function __construct()
	{
		$this->db = Config::getDB("db1");
	}
}
?>