<?php
	$link = mysql_connect('127.0.0.1','root','89641551');
	if(!$link){
		die('链接失败:'.mysql_error());
	}

	echo "与mysql服务器建立的链接成功:<br>";

	echo mysql_get_client_info();
	echo mysql_get_host_info();
	echo mysql_get_proto_info();
	echo mysql_get_server_info();
	echo mysql_client_encoding();
	echo mysql_stat();

	mysql_close($link);