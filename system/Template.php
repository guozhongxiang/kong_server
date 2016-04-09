<?php
Class Template {
	
	private static $instance;
	
	public static function getInstance() {
		if (empty(self::$instance)) {
			self::$instance = new Smarty();
			self::iniz();
		}
		return self::$instance;
	}
	
	private static function iniz() {
		self::$instance->template_dir = APP_WEB_ROOT . Cfg_Smarty::$templateDir;
		self::$instance->compile_dir = APP_WEB_ROOT . Cfg_Smarty::$compileDir;
		self::$instance->caching = Cfg_Smarty::$cacheing;
		self::$instance->cache_dir = APP_WEB_ROOT . Cfg_Smarty::$cacheDir;
		//self::$instance->config_dir="config";
		self::$instance->left_delimiter = Cfg_Smarty::$leftDelimiter;
		self::$instance->right_delimiter = Cfg_Smarty::$rightDelimiter;
		//self::$instance->compile_check = Cfg_Smarty::$compileCheck;
	}
}
