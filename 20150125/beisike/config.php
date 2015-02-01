<?php
	required_once('include/sql_class.php');
	$db=new db_mysql();
	$db->dbserver = 'localhost';
	$db->dbbase = 'gbook';
	$db->dbUser = 'root';
	$db->dbPwd = '89641551';
	$db->dbconnect();
	define('MCBOOKINSTALLED', true);
	define('TABLE_PREFIX',"ly_");
	if(PHP_VERSION>'5.0.0'){
		data_default_timezone_set('PRC');
	}
?>