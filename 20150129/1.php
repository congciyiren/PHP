<?php
	require "conn.inc.php";
	$sql="CREATE TABLE is not exists shop(id int not null auto_increment,name varchar(50)not null default '',price double not null default '0.00',num int not null default '0',desn text,primary key(id),key name(name,price))";
	mysql_query($sql);
	mysql_close();