<?php
	define(ROOT,"C:/AppServ/www/PHP/2015030504/");
	include ROOT."libs/Smarty.class.php";


	$tpl=new Smarty;
	$tpl->template_dir=ROOT."templates/";
	$tpl->compile_dir=ROOT."com";
	$tpl->config_dir=ROOT."configs";

	$tpl->caching=0;
	$tpl->cache_dir=ROOT."cache";
	$tp->cache_lifetime=60*60*24;
	$tpl->left_delimiter="<{";
	$tpl->right_delimiter="}>";