<?php
$debug = false;
if ($debug && rand(0, 1000) == 1) {
	xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
}

date_default_timezone_set('Asia/Shanghai');

/* 定义系统目录分隔符 */
define('DS', DIRECTORY_SEPARATOR);

/* 常量设置 */
define('__ROOT__', substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/')+1));
define('__HTTP__', empty($_SERVER['HTTPS']) ? 'http://' : 'https://');
$host = empty($_SERVER['HTTP_HOST']) ? '' : $_SERVER['HTTP_HOST'];
define('__HOST__', __HTTP__.$host.__ROOT__);

/* 项目目录定义 */
$root_dir = '/alidata/www/fangao/';
$log_dir = '/alidata/log/';
//$root_dir = '/data/www/fangao_web/';
//$log_dir = '/data/log/';
define('WEB_ROOT', substr(dirname(__FILE__).DS, 0, -23));
define('SYSTEM_ROOT', WEB_ROOT . 'system/');
define('APP_WEB_ROOT', WEB_ROOT . 'shell/admin_fan-gao_cn/');
define('LOG_ROOT', $log_dir);

/*define('WEB_ROOT', '/alidata/www/fangao/');
define('SYSTEM_ROOT', WEB_ROOT . 'system/');
define('APP_WEB_ROOT', WEB_ROOT . 'shell/admin_fan-gao_cn/');
define('LOG_ROOT', '/data/log/');*/

require_once (SYSTEM_ROOT. "Smarty-3.1.19/libs/Smarty.class.php");

// 注册autoload
spl_autoload_register('autoLoad');
function autoLoad($className) {
	$classNameArray = explode("_", $className);
	if (count($classNameArray) >= 2) {
		if ($classNameArray[0] == 'Mod') {
			$file =  'module/' . strtolower($classNameArray[1]) . '/' . strtolower($classNameArray[2]);
		} else if ($classNameArray[0] =='Cfg') {
			$env = Config::getEnvName();
			if (empty($env)) $env = 'release';
			$file =  'config/' . $env . '/'. strtolower($classNameArray[1]);
		} else if ($classNameArray[0] == 'Lang') {
			$file =  'lang/' . strtolower($classNameArray[1]) . '/'.  strtolower($classNameArray[2]) ;
		}
		require(WEB_ROOT . $file . '.php');
	} else {
		require(SYSTEM_ROOT . $className . '.php');
	}
}

require(WEB_ROOT . 'config/release/functions.php');
require(APP_WEB_ROOT . 'mod/common.php');

// 获得 module 名
if (!empty($argv[1])) {
	$modName = trim($argv[1]);
} else {
	$modName = empty($_REQUEST['mod']) ? '' : R('mod');
}
if(empty($modName)) exit('mod no exist');

$modFile = APP_WEB_ROOT . 'mod/' . $modName . '.php';

//获取 act 名
if (!empty($argv[2])) {
	$actName = trim($argv[2]);
} else {
	$actName = empty($_REQUEST['act']) ? '' : R('act');
}


//获取 pwd 名
if (!empty($argv[3])) {
	$pwd = trim($argv[3]);
} else {
	$pwd = empty($_REQUEST['pwd']) ? 'pwd' : R('pwd');
}
// 测试站不走密码校验
if(isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] != Cfg_Common::$test_host))
{
	if(empty($pwd) || $pwd != 'gongfuxiang??!??~') exit('pwd error');
}

require($modFile);
ToolUtil::noCacheHeader();

$object = new $modName();
$object->$actName();

if ($debug && rand(0, 1000) == 1) {
	$xhprofData = xhprof_disable();
	include_once SYSTEM_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
	include_once SYSTEM_ROOT . "/xhprof_lib/utils/xhprof_runs.php";

	$xhprofRuns = new XHProfRuns_Default();

	$xhprofRuns->save_run($xhprofData, "shell_admin_fan-gao_cn_"  . $modName . "_" . $actName);
}