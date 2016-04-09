<?php
/**
 * 配置管理器
 * 已升级为配置管理器，后续所有配置通过本类进行管理
 *
 * @author 老版本ericfu
 * @author 新版本bennylin
 * @version 2.0
 * @created 18-六月-2008 17:32:31
 * @updated
 */
class Config
{
	/**
	 * 错误编码
	 *
	 * @var int
	 */
	public static $errCode = 0;

	/**
	 * 错误信息
	 *
	 * @var string
	 */
	public static $errMsg = '';

	/**
	 * 保存项目中DB的句柄
	 *
	 * @var array
	 */
	private static $DBResMap = array();

	/**
	 * 保存项目中MSDB的句柄
	 *
	 * @var array
	 */
	private static $MSDBResMap = array();

	/**
	 * 保存项目中MemCache的句柄
	 *
	 * @var array
	 */
	private static $CacheResMap = array();

	/**
	 * 保存项目中TTC的句柄
	 *
	 * @var array
	 */
	private static $TTCResMap = array();
	private static $TTC2ResMap = array();

	/**
	 * 保存项目中Redis的句柄
	 *
	 * @var array
	 */
	private static $RedisResMap = array();

	/**
	 * 保存项目中MCQ的句柄
	 *
	 * @var array
	 */
	private static $MCQResMap = array();
	/**
	 * DB的配置
	 *
	 * @var array
	 */
	private static $DBCfg;
	/**
	 * DB的配置
	 *
	 * @var array
	 */
	private static $MSDBCfg;
	/**
	 * IP的配置
	 *
	 * @var array
	 */
	private static $IPCfg;
	/**
	 * 保存项目中TTC的配置
	 *
	 * @var array
	 */
	private static $TTCCfg;
	/**
	 * 保存项目中MemCache的配置
	 *
	 * @var array
	 */
	private static $CacheCfg = array();

	/**
	 * 保存来自外部系统的IP Port的配置
	 *
	 * @var array
	 */
	private static $ExtIPCfg = array();

	/**
	 * 保存项目中Redis的配置
	 *
	 * @var array
	 */
	private static $RedisCfg;

	/**
	 * 保存项目中MCQ的配置
	 *
	 * @var array
	 */
	private static $MCQCfg;

	/**
	 * 读取配置
	 *
	 * @param string $type 配置类型		(ttc\db\other\..)
	 * @param string $id 配置标识
	 *
	 * @return mix array/false on failed
	 */
	public static function get($type, $id)
	{
		$type_conf = self::getAllByType($type);
		if (isset($type_conf[$id]))
		{
			return $type_conf[$id];
		}

		self::$errCode = 20100;
		self::$errMsg = "config not defined,type:{$type},id:{$id}";
		return false;
	}

	/**
	 * 从配置文件中获取某类型的所有配置
	 *
	 * @param string $type 配置类型		(ttc\kv_ttc\mc\db\other\..)
	 *
	 * @return mix/false
	 */
	public static function getAllByType($type)
	{
		//proccess local cache
		static $_cache = array();

		//缓存到cache,避免多次 require
		$cache_key = $type;
		if (empty($_cache[$cache_key]) )
		{
			//server env
			$server_env = 'formal';
			switch (get_cfg_var('env.name'))
			{
				case 'dev':
				case 'coredev':
					$server_env = 'dev';
					break;
				case 'test55':
					$server_env = 'test55';
					break;
				case 'test':
					$server_env = 'test';
					break;

				case 'beta':
					$server_env = 'beta';
					break;
			}

			//load from file by type
			switch ($type)
			{
				//const/ttc config,not care env
				case 'const':
				case 'module_state':
					$_cache[$cache_key] = include PHPLIB_ROOT . "etc/{$type}.php";
					break;

				//care env
				case 'ttc':
				case 'db':
					$_cache[$cache_key] = include PHPLIB_ROOT . "etc/{$server_env}.{$type}.php";
					break;

				//just clear the process local cache
				case '!clear':
					$_cache = array();
					return true;

				//user type
				default:
					if (!preg_match('/^[a-z0-9_]+$/i', $type))
					{
						self::$errCode = 20101;
						self::$errMsg = "config type '{$type}' is invalid";
						return false;
					}

					$_cache[$cache_key] = include PHPLIB_ROOT . "etc/{$server_env}.{$type}.php";
			}

			if ($_cache[$cache_key] === false)
			{
				self::$errCode = 20102;
				self::$errMsg = "config ({$server_env},{$type}) not found";
				return false;
			}
		}

		return $_cache[$cache_key];
	}

	/**
	 * 初始化配置变量
	 */
	private static function init()
	{
		global $_DB_CFG, $_MSDB_CFG, $_CACHE_CFG, $_IP_CFG, $_EXT_IP_CFG, $_TTC_CFG, $_TMEM_CFG, $_MCQ_CFG;

		// TTC 配置
		if (empty(self::$TTCCfg)) {
			if(isset($_TTC_CFG)){
				self::$TTCCfg = &$_TTC_CFG;
			} else {
				self::$TTCCfg = '';
			}
		}

		// DB 配置
		if (empty(self::$DBCfg)) {
			if(isset($_DB_CFG)){
				self::$DBCfg = &$_DB_CFG;
			} else {
				self::$DBCfg = '';
			}
		}

		// MSDB 配置
		if (empty(self::$MSDBCfg)) {
			if(isset($_MSDB_CFG)){
				self::$MSDBCfg = &$_MSDB_CFG;
			} else {
				self::$MSDBCfg = '';
			}
		}

		if(empty(self::$CacheCfg)){
			if(isset($_CACHE_CFG)){
				self::$CacheCfg = &$_CACHE_CFG;
			} else {
				self::$CacheCfg = '';
			}
		}

		// 内部 ip 配置
		if (empty(self::$IPCfg)) {
			if(isset($_IP_CFG)){
				self::$IPCfg = &$_IP_CFG;
			} else {
				self::$IPCfg = '';
			}
		}

		// 其他 ip 配置
		if (empty(self::$ExtIPCfg)) {
			if(isset($_EXT_IP_CFG)){
				self::$ExtIPCfg = &$_EXT_IP_CFG;
			} else {
				self::$ExtIPCfg = '';
			}
		}

		// TMEM 配置
		if (empty(self::$TMemCfg)) {
			if(isset($_TMEM_CFG)){
				self::$TMemCfg = &$_TMEM_CFG;
			} else {
				self::$TMemCfg = '';
			}
		}

		// MCQ 配置
		if (empty(self::$MCQCfg)) {
			if(isset($_MCQ_CFG)){
				self::$MCQCfg = &$_MCQ_CFG;
			} else {
				self::$MCQCfg = '';
			}
		}
	}

	/**
	 * 清除错误标识，在每个函数调用前调用
	 */
	private static function clearERR()
	{
		self::$errCode = 0;
		self::$errMsg  = '';
	}

	/**
	 * 获得不分 set 的 memcache 对象
	 *
	 * @param	key		资源的key
	 * @return	Memcache		memcache 对象, 出错 false
	 */
	public static function getCache($key)
	{
		self::init();
		self::clearERR();

		// 如果在前面已创建该 cache 资源，则直接返回
		if (isset(self::$CacheResMap[$key]))
		{
			return self::$CacheResMap[$key];
		}

		// 判断参数
		if (!isset(self::$CacheCfg[$key]))
		{
			self::$errCode = 20000;
			self::$errMsg = "no cache config info for key {$key}";
			return false;
		}

		// cache 配置
		$cfg = self::$CacheCfg[$key];

		// 自动判断是单节点还是多节点 memcache 连接(一级 key 中有 host)
		$MemCache = new Memcache;
		if (isset($cfg['IP'])) {
			// 单节点连接
			$MemCache->connect($cfg['IP'], $cfg['PORT']);
		} else {
			// 多节点连接
			foreach ($cfg['servers'] as $server){
				$MemCache->addServer($server['IP'], $server['PORT'], 0);
			}
			if ($MemCache === false){
				self::$errCode = 20001;
				self::$errMsg = "add memcache server failed";
				return false;
			}
		}
		// 保存到类属性中
		self::$CacheResMap[$key] = $MemCache;
		return 	self::$CacheResMap[$key];
	}

	/**
	 * 获得 DB 对象
	 *
	 * 由于数据库不同于一般的 server ip/port ，这里不支持 $node 参数指定节点，以免出现不必要的问题。
	 * @modified myforchen 将DB的本地按照机器和端口作为key来保存
	 * @param	string	$key		返回 DB 对象
	 * @param	int		$node
	 * @return	DB	DB 对象, 出错 false
	 */
	public static function getDB($key)
	{
		self::clearERR();

		// 判断参数
		if (!isset(Cfg_Db::$$key)){
			self::$errCode = 20000;
			self::$errMsg = "no DB config info for key {$key}";
			return false;
		}

		$cfg =Cfg_Db::$$key;
		$cfg['port'] = empty($cfg['port']) ? 3306 : $cfg['port'];

		$cacheKey = $cfg['host'] . '_' . $cfg['port'];

		// 如果在前面已创建该 DB 资源，则直接返回
		if (isset(self::$DBResMap[$cacheKey])){
			if (self::$DBResMap[$cacheKey]->selectDB($cfg['db'])) {
				return self::$DBResMap[$cacheKey];
			}

			//retry
			if (self::$DBResMap[$cacheKey]->selectDB($cfg['db'])) {
				return self::$DBResMap[$cacheKey];
			}

			Logger::warn("change the mysql db fail : {$cfg['db']} [" . self::$DBResMap[$cacheKey]->errCode . ' : ' . self::$DBResMap[$cacheKey]->errMsg . ']');
			self::$DBResMap[$cacheKey]->closeDB();
			unset(self::$DBResMap[$cacheKey]);

			return false;
		}

		// 创建 DB 对象
		$DB = new DB($cfg['host'], $cfg['port'], $cfg['db'], $cfg['user'], $cfg['password']);
		if ($DB->errCode > 0) {
			self::$errCode = 20001;
			self::$errMsg = "create DB connnect failed for {$key}: " . $DB->errCode . " " . $DB->errMsg;
			return false;
		}

		//for module state report
		$DB->configId = $key;

		// 保存到类属性中
		self::$DBResMap[$cacheKey] = $DB;
		return self::$DBResMap[$cacheKey];
	}

	/**
	 * 获得 MSSQL DB 对象
	 *
	 * 由于数据库不同于一般的 server ip/port ，这里不支持 $node 参数指定节点，以免出现不必要的问题。
	 *
	 * @param	string	$key		返回 DB 对象
	 * @param	int		$node
	 * @return	DB	DB 对象, 出错 false
	 */
	public static function getMSDB($key)
	{
		self::init();
		self::clearERR();

		// 判断参数
		if (!isset(self::$MSDBCfg[$key]) || empty(self::$MSDBCfg[$key]['IP'])){
			self::$errCode = 20000;
			self::$errMsg = "no DB config info for key {$key}";
			return false;
		}

		$cfg = self::$MSDBCfg[$key];
		$cfg['PORT'] = empty($cfg['PORT']) ? 1433 : $cfg['PORT'];

		//$cacheKey = $cfg['IP'] . '_' . $cfg['PORT'];
		$cacheKey = $key;

		// 如果在前面已创建该 DB 资源，则直接返回
		if (isset(self::$MSDBResMap[$cacheKey])) {
			if (self::$MSDBResMap[$cacheKey]->selectDB($cfg['DB']) ) {
				return self::$MSDBResMap[$cacheKey];
			}

			//retry
			if (self::$MSDBResMap[$cacheKey]->selectDB($cfg['DB']) ) {
				return self::$MSDBResMap[$cacheKey];
			}

			Logger::warn("change the mssql db fail : {$cfg['DB']} [" . self::$MSDBResMap[$cacheKey]->errCode . ' : ' . self::$MSDBResMap[$cacheKey]->errMsg . ']');
			self::$MSDBResMap[$cacheKey]->closeDB();
			unset(self::$MSDBResMap[$cacheKey]);

			return false;
		}

		// 创建 DB 对象
		$MSDB = new MSSQL($cfg['IP'], $cfg['PORT'], $cfg['DB'], $cfg['USER'], $cfg['PASSWD']);
		if ($MSDB->errCode > 0) {
			self::$errCode = 20001;
			self::$errMsg = "create DB connnect failed for {$key}: " . $MSDB->errCode . " " . $MSDB->errMsg;
			return false;
		}

		$ret = $MSDB->init();
		if (false === $ret) {
			self::$errCode = 20001;
			self::$errMsg = 'connect to msserveer failed[]' . $MSDB->errMsg;
			return false;
		}

		//for module state report
		$MSDB->configId = $key;

		// 保存到类属性中
		self::$MSDBResMap[$cacheKey] = $MSDB;
		return self::$MSDBResMap[$cacheKey];
	}

	/**
	 * 获得 ip 和端口等
	 *
	 * @param	string	$key	资源的key
	 * @param	int		$node 	节点数字编号; 如果为 false 表示忽略，返回全部节点
	 * @return 	array	需要的 ip 端口等信息
	 */
	public static function getIP($key, $node = false)
	{
		self::clearERR();
		self::init();
		// 判断参数 key 是否存在
		if (!isset(self::$IPCfg[$key])){
			self::$errCode = 20000;
			self::$errMsg = "no config info for key {$key}";
			return false;
		}

		// 判断是否单节点
		$cfg = self::$IPCfg[$key];
		// 多节点方式
		if ($node === false) {
			// 直接返回
			return $cfg;
		} else {
			// 获得指定(不掩盖错误，不存在则返回错误)
			if (!isset($cfg[$node])) {
				self::$errCode = 20001;
				self::$errMsg = "no node for {$node} in {$key}";
				return false;
			} else {
				return $cfg[$node];
			}
		}
	}

	/**
	 * 获得外部 ip 配置信息
	 *
	 * @param	string	$key	资源的key
	 * @param	int		$node 	节点数字编号; 如果为 false 表示忽略，返回全部节点
	 * @return 	array	需要的 ip 端口等信息
	 */
	public static function getExtIP($key, $node = false)
	{
		self::clearERR();
		self::init();
		// 判断参数 key 是否存在
		if (!isset(self::$ExtIPCfg[$key]))
		{
			self::$errCode = 20000;
			self::$errMsg = "no config info for key {$key}";
			return false;
		}

		// 判断是否单节点
		$cfg = self::$ExtIPCfg[$key];
		// 多节点方式
		if ($node === false) {
			// 直接返回
			return $cfg;
		} else {
			// 获得指定(不掩盖错误，不存在则返回错误)
			if (!isset($cfg[$node])) {
				self::$errCode = 20001;
				self::$errMsg = "no node for {$node} in {$key}";
				return false;
			} else {
				return $cfg[$node];
			}
		}
	}

	/**
	 * 获得 TTC 句柄
	 *
	 * @param	string	$key	资源的key
	 * @return 	TTC	返回TTC句柄
	 */
	public static function getTTC($key)
	{
		self::clearERR();
		self::init();
		// 如果在前面已创建该 ttc 资源，则直接返回
		if (isset(self::$TTCResMap[$key])){
			return self::$TTCResMap[$key];
		}
		// 判断参数
		if (!isset(self::$TTCCfg[$key])){
			self::$errCode = 20000;
			self::$errMsg = "no TTC config info for key {$key}";
			return false;
		}
		// cache 配置
		$cfg = self::$TTCCfg[$key];
		$ttc = new TTC($cfg);

		//for module state report
		$ttc->configId = $key;

		// 保存到类属性中
		self::$TTCResMap[$key] = $ttc;
		return 	self::$TTCResMap[$key];
	}

	/**
	 * 获得 TTC2 句柄(仅支持批量取的TTC)
	 *
	 * @param	string	$key	资源的key
	 * @return 	TTC2	返回TTC2句柄
	 */
	public static function getTTC2($key)
	{
		self::clearERR();
		self::init();
		// 如果在前面已创建该 ttc 资源，则直接返回
		if (isset(self::$TTC2ResMap[$key])){
			return self::$TTC2ResMap[$key];
		}

		// 判断参数
		if (!isset(self::$TTCCfg[$key])){
			self::$errCode = 20000;
			self::$errMsg = "no TTC config info for key {$key}";
			return false;
		}
		// cache 配置
		$cfg = self::$TTCCfg[$key];
		$ttc = new TTC2($cfg);
		// 保存到类属性中
		self::$TTC2ResMap[$key] = $ttc;
		return 	self::$TTC2ResMap[$key];
	}

	/**
	 * 获取memcacheq句柄
	 * @param string $key 资源的key
	 * @param Memcacheq	返回memcacheq句柄
	 *
	 **/
	public static function getMCQ($key) {
		self::clearERR();
		self::init();
		// 如果在前面已创建该 mcq 资源，则直接返回
		if (isset(self::$MCQResMap[$key])){
			return self::$MCQResMap[$key];
		}

		// 判断参数
		if (!isset(self::$MCQCfg[$key])){
			self::$errCode = 20000;
			self::$errMsg = "no memcacheq config info for key {$key}";
			return false;
		}
		// cache 配置
		$cfg = self::$MCQCfg[$key];
		$mcq = new Memcacheq($cfg);
		// 保存到类属性中
		self::$MCQResMap[$key] = $mcq;
		return 	self::$MCQResMap[$key];
	}

	public static function getRedis($key)
	{
		self::clearERR();

		// 如果在前面已创建该 redis 资源，则直接返回
		if (isset(self::$RedisResMap[$key])){
			return self::$RedisResMap[$key];
		}

		// 判断参数
		if (!isset(Cfg_Redis::$$key)){
			self::$errCode = ErrorConfig::getErrorCode('no_tmem_config');
			self::$errMsg = "no TMem config info for key {$key}";
			return false;
		}
		// cache 配置
		$cfg = Cfg_Redis::$$key;
		if(!isset($cfg['host'])) {
			self::$errCode = ErrorConfig::getErrorCode('config_error');
			self::$errMsg = "no TMem server ip for key {$key}";
			return false;
		} 

		if(!isset($cfg['port'])) {
			$cfg['port'] = 6379;
		}

		$redis = new Redis();
		$redis->connect($cfg['host'], $cfg['port']);
		$redis->auth($cfg['password']);

		// 保存到类属性中
		self::$RedisResMap[$key] = $redis;
		return 	self::$RedisResMap[$key];
	}


	/**
	 * 获得环境名称
	 *
	 * @return 	string	返回环境名称
	 */
	public static function getEnvName()
	{
		$envName = '';
		$phpConfig = get_cfg_var('env.name');
		return $phpConfig;
	}
}

