<?php
date_default_timezone_set('Asia/Shanghai');
error_reporting(E_ALL^E_NOTICE);
/* 定义系统目录分隔符 */
define('DS', DIRECTORY_SEPARATOR);

/* 常量设置 */
define('__ROOT__', substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/')+1));
define('__HTTP__', empty($_SERVER['HTTPS']) ? 'http://' : 'https://');
define('__HOST__', __HTTP__.$_SERVER['HTTP_HOST'].__ROOT__);

//服务端网站目录
define('WEB_ROOT', substr(dirname(__FILE__).DS, 0, -11));
define('SYSTEM_ROOT', WEB_ROOT . 'system/');
define('APP_WEB_ROOT', WEB_ROOT . 'webapp/');
define('APP_PAGE_TPL_DIR', APP_WEB_ROOT . 'tpl/');

require(WEB_ROOT . 'config/release/functions.php');
require(APP_WEB_ROOT . 'inc/constant.inc.php');
require(APP_WEB_ROOT . 'mod/common.php');
require_once (SYSTEM_ROOT. "Smarty-3.1.19/libs/Smarty.class.php");

// 注册autoload
spl_autoload_register('autoLoad');
function autoLoad($className) {
	$classNameArray = explode("_", $className);
	if (count($classNameArray) >= 2) {
		if ($classNameArray[0] == 'Mod') {
			$file =  'module/' . strtolower($classNameArray[1]) . '/' . strtolower($classNameArray[2]);
		} else if ($classNameArray[0] =='Cfg') {
			$file =  'config/release/'. strtolower($classNameArray[1]);
		}
		require(WEB_ROOT . $file . '.php');
	} else {
		require(SYSTEM_ROOT . $className . '.php');
	}
}

// 获得 module 名
if (!empty($_GET['mod'])) {
	$modName = trim($_GET['mod']);
} else {
	$modName = 'main';
}

if (empty($_GET['type'])) {
	$modFile = APP_WEB_ROOT . 'mod/' . $modName . '.php';
} else if ($_GET['type'] == 'admin') {
	$modFile = APP_WEB_ROOT . 'mod/admin/' . $modName . '.php';
} else {
	ToolUtil::redirect(__HOST__."index.php?mod=main&act=index");
}

if (!in_array($modName, $modList, true) || !file_exists($modFile)) {
	ToolUtil::redirect(__HOST__."index.php?mod=main&act=index");
}
//获取 act 名
if (!empty($_GET['act'])) {
	$actName = trim($_GET['act']);
} else {
	$actName = 'index';
}

//开启session
session_start();

//包含mod文件
require($modFile);
ToolUtil::noCacheHeader();

$smarty = Template::getInstance();
$smarty->assign('__host__', __HOST__);

$object = new $modName();
$object->$actName();