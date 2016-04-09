<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'				=> true,
	'URL_MODEL'					=> 2, //url REWRITE模式
	
	//路由规则
	'URL_ROUTE_RULES'			=>array(
		
	),
	
	
	'DEFAULT_FILTER'        	=> 'htmlspecialchars',//// 系统默认的变量过滤机制
	
	//数据库配置信息
	'DB_TYPE'   				=> 'mysql', // 数据库类型
	'DB_HOST'   				=> 'localhost', // 服务器地址
	'DB_NAME'  					=> 'kong_server', // 数据库名
	'DB_USER'					=> 'root', // 用户名
	'DB_PWD'					=> 'root', // 密码
	'DB_PORT'					=> 3306, // 端口
	'DB_PREFIX'					=> 'kong_', // 数据库表前缀 
	'DB_CHARSET'				=> 'utf8', // 字符集
	
	'MODULE_ALLOW_LIST'			=>	array('Home', 'Admin', 'Mobile'),
    'DEFAULT_MODULE'			=>	'Home',

    'URL_CASE_INSENSITIVE'		=>	true,//不区分url大小写

    //'SESSION_TYPE'				=>	'Db',//session配置

    'SESSION_OPTIONS'			=>	array('expire' => 7200 ),
	//'SHOW_PAGE_TRACE' =>true,
	'URL_HTML_SUFFIX'=>'',
	
	/*
	'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
	'APP_SUB_DOMAIN_RULES'    =>    array(
											'm'  => 'Mobile',
										),
	*/
);