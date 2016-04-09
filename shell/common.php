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
	protected $redis;
	protected $wechat;

	/**
	 * [__construct 构造方法]
	 */
	protected function __construct()
	{
		$this->db = Config::getDB("db1");
		$this->redis = Config::getRedis("db1");
		$this->wechat = WeiXinIM::Instantiate(Cfg_Wechat::$weixin['appid'], Cfg_Wechat::$weixin['secret'], Cfg_Wechat::$weixin['token'], Cfg_Wechat::$weixin['aeskey'], Cfg_Wechat::$weixin['user']);
	}

	/**
     * [getValidTimeRange 根据传入的时间$time，返回有效时间段（第一天14:00~第二天10:00）]
     * @param  [int] $time [待计算时间,14:00~10:00之间]
     * @return [array]     [有效时间区间的unix时间戳]
     */
    protected function getValidTimeRange($time) {
    	$year	= date("Y", $time);
    	$month	= date("m", $time);
    	$day 	= date("d", $time);
    	$hour 	= date('H', $time);
    	$w 	= date('w', $time);
    	$begin	= 0;
    	$end 	= 0;
 	
    	if ($w == 5 && $hour >= 14) {
    		$begin	= mktime(14, 0, 0, $month, $day, $year);
    		$end 	= mktime(14, 0, 0, $month, $day + 3, $year);
    		return array('begin'=>$begin, 'end'=>$end);
    	}
    	if ($w == 6) {
    		$begin	= mktime(14, 0, 0, $month, $day - 1, $year);
    		$end 	= mktime(14, 0, 0, $month, $day + 2, $year);
    		return array('begin'=>$begin, 'end'=>$end);
    	}
    	if ($w == 0) {
    		$begin	= mktime(14, 0, 0, $month, $day - 2, $year);
    		$end 	= mktime(14, 0, 0, $month, $day + 1, $year);
    		return array('begin'=>$begin, 'end'=>$end);
    	}
    	if ($w == 1 && $hour < 14) {
    		$begin	= mktime(14, 0, 0, $month, $day - 3, $year);
    		$end 	= mktime(14, 0, 0, $month, $day, $year);
    		return array('begin'=>$begin, 'end'=>$end);
    	}
    	if ($hour >= 14) {
    		$begin	= mktime(14, 0, 0, $month, $day, $year);
    		$end 	= mktime(14, 0, 0, $month, $day + 1, $year);
    	} else if ($hour < 14) {
    		$begin	= mktime(14, 0, 0, $month, $day - 1, $year);
    		$end 	= mktime(14, 0, 0, $month, $day, $year);
    	}

    	return array('begin'=>$begin, 'end'=>$end);
    }

}