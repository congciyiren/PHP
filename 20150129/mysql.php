<?php
	$link = mysql_connect('localhost','root','89641551');

	if(!$link){
		die('链接失败:'.mysql_error());
	}