<?php
	define("ROOT",str_replace("\\","/",dirname(__FILE__)).'/');
	rquire ROOT."libs/Smarty.class.php";
	$smarty = new Smarty();


	$smarty ->setTemplateDir(ROOT.'templates/')
	//		->setTemplateDir(ROOT.'templates2/')
			->setCompileDir(ROOT.'templates_c/')
			->setPluginsDir(ROOT.'plugins/')
			->setConfigDir(ROOT.'configs');


	$smarty->caching = false;
	$smarty->cache_lifetime = 60*60*24;
	$smarty->left_delimiter = '<{';
	$smarty->right_delimiter = '}>';