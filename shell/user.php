<?php
class User extends Common{
	public function __construct()
	{
		parent::__construct();

        // 脚本执行时间用于记录日志
        $this->t1 = getMillisecond();
        echo 'start: '.date('Y-m-d H:i:s').PHP_EOL;
	}

	/**
	 * 将用户数据定时导入到redis中
	 */
	public function setLogin() {
		$db = Config::getDB('db1');
		$rst = $db->getRows("SELECT * FROM f_admin_users");
		if (!empty($rst)) {
			$redis = Config::getRedis('db1');
			foreach ($rst as $rt) {
				$userInfo = array('uid' => $rt['id'], 'username' => $rt['username'], 'password' => $rt['password'], 'privages' => $rt['privages']);
				$redis->set(Cfg_Redis::$keysPre['admin_manager_info']  . $rt['username'], json_encode($userInfo));
				$redis->set(Cfg_Redis::$keysPre['admin_manager_info_uid'] . $rt['id'], json_encode($userInfo));
				//var_dump($redis->get(Cfg_Redis::$keysPre['admin_manager_info']  . $rt['username']));
			}
		}
	}

	/**
	 * [updateUserType 更新用户类型，活跃与否，价格敏感与否]
	 * @author gzx
	 * @return [type] [description]
	 */
	public function updateUserType() {
		$res = $this->updateUserActiveStatus();
		if ($res) {
			echo "update user's activity successfully!<br/>";
		} else {
			echo "update user's activity failed!<br/>";
		}
		
		$res = $this->updateUserPriceSensitivity();
		if ($res) {
			echo "update user's sensitivity successfully!<br/>";
		} else {
			echo "update user's sensitivity failed!<br/>";
		}

		return;
	}

    /**
     * 更新用户的订单数和套餐数
     */
    public function updateUserOrderCount(){

        $db = Config::getDB('db1');

        $sql = "SELECT o.`uid`,count(distinct(o.`id`)) as oc,SUM(i.`count`) as ic FROM f_app_orders as o LEFT JOIN `f_app_orders_items` as i on i.`order_id`= o.`id` LEFT JOIN `f_app_users` as u on o.`uid`= u.`id` LEFT JOIN `f_app_sku` as sk on i.`item_id`= sk.`id` where o.`status`> 1 and sk.`type`= 0 and o.`create_time`> UNIX_TIMESTAMP('2015-08-12 14:00:00') and u.`subscribe`= 1 group by o.`uid` having count(o.`uid`)> 0";
        $userOrderCount = $db->getRows($sql);

        echo 'uid|orderCount|skuCount'.PHP_EOL;

        $fail_count = 0; // 失败的数量
        $fail_uids = '';
        foreach($userOrderCount as $k => $v){
            echo $v['uid'].'|'.$v['oc'].'|'.$v['ic'].PHP_EOL;
            $sql = "UPDATE f_app_users SET order_count = {$v['oc']}, sku_count={$v['ic']} WHERE id={$v['uid']}";
            if(!$this->db->execSql($sql)) {
                $fail_count++;
                $fail_uids .= $v['uid'].',';
            }
//            if($k > 20) break;
        }
        echo 'end: '.date('Y-m-d H:i:s').PHP_EOL;
        echo 'spend time (millisecond):'.(getMillisecond()-$this->t1).PHP_EOL;
        echo "update user's order count complete! failure users:$fail_count ($fail_uids)".PHP_EOL;
    }

    /**
     * 更新用户最后一个订单的时间
     */
    public function updateUserLastOrderTime(){
        $db = Config::getDB('db1');

        $sql = "select a.id,a.uid,a.take_time,a.dis_id from `f_app_orders` as a LEFT JOIN `f_app_users` as u on a.uid= u.id where u.`subscribe`= 1 and a.take_time > UNIX_TIMESTAMP('2015-08-13') and a.`status`> 1 AND a.id=(select max(id) from `f_app_orders` where a.uid= uid and `status`> 1) ORDER BY a.`take_time` DESC";

        $userLastOrderTime = $db->getRows($sql);

        echo 'uid|oid|lastOrderTime|last_dis_id'.PHP_EOL;

        $fail_count = 0; // 失败的数量
        $fail_uids = '';

        foreach($userLastOrderTime as $k => $v){
            echo $v['uid'].'|'.$v['id'].'|'.date('Y-m-d', $v['take_time']).'|'.$v['dis_id'].PHP_EOL;
            $sql = "UPDATE f_app_users SET last_order_time = {$v['take_time']},last_dis_id = {$v['dis_id']}  WHERE id={$v['uid']}";

            if(!$this->db->execSql($sql)) {
                $fail_count++;
                $fail_uids .= $v['uid'].',';
            }

//            if($k > 20) break;
        }

        echo 'end: '.date('Y-m-d H:i:s').PHP_EOL;
        echo 'spend time (millisecond):'.(getMillisecond()-$this->t1).PHP_EOL;

        echo "update user's last order time complete! failure users:$fail_count ($fail_uids)".PHP_EOL;
    }

	/**
	 * [updateUserType 更新用户活跃度]
	 * @author gzx
	 * @return [type] [description]
	 */
	private function updateUserActiveStatus() {
		$time_2  = mktime(00, 00, 00, date("m"), date("d") - 14, date("Y"));
		$time_4  = mktime(00, 00, 00, date("m") - 1, date("d"), date("Y"));

		//沉睡用户
        $sql = "UPDATE f_app_users SET buy_active = -1";
        $res = $this->db->execSql($sql);

        //不活跃用户
        $sql = "UPDATE f_app_users SET buy_active = 0 WHERE id IN (SELECT DISTINCT uid FROM f_app_orders WHERE create_time < {$time_2} AND create_time > {$time_4} AND status > 1)";
        $res *= $this->db->execSql($sql);

        //活跃用户
		$sql = "UPDATE f_app_users SET buy_active = 1 WHERE id IN (SELECT DISTINCT uid FROM f_app_orders WHERE create_time >= {$time_2} AND status > 1)";
        $res *= $this->db->execSql($sql);

        return $res ? true : false;
	}

	/**
	 * [updateUserType 更新用户价格敏感度]
	 * @author gzx
	 * @return [type] [description]
	 */
	private function updateUserPriceSensitivity() {
		//价格敏感用户
		$sql = "UPDATE f_app_users SET price_sensitive = 1";
        $res = $this->db->execSql($sql);

        //价格不敏感用户
        $data = $this->db->getRows("SELECT o.uid, o.total_price AS cnt FROM f_app_orders AS o LEFT JOIN f_app_orders_items AS i ON o.id = i.order_id WHERE o.status > 1 GROUP BY o.id HAVING o.total_price/sum(i.count) >= 2000");
        $uidlist = get_varray_from_array2($data, 'uid');
		$uidlist = implode(',', $uidlist);
        
		$sql = "UPDATE f_app_users SET price_sensitive = 0 WHERE id IN ($uidlist)";
        $res *= $this->db->execSql($sql);

        return $res ? true : false;
	}
}