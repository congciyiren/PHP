<?php
	define(ROOT,"C:/AppServ/www/PHP/20150305/");
	include ROOT."libs/Smarty.class.php";

	$tpl=new Smarty;
	$tpl->template_dir=ROOT."tpl/";      //模版文件
	$tpl->compile_dir=ROOT."com";		//生成编译后的文件
	$tpl->config_dir=ROOT."configs";	//配置文件
	$tpl->left_delimiter="<{";			
	$tpl->right_delimiter="}>";