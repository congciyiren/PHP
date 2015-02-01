<?php
	$link = mysql_connect('localhost','root','89641551');
	mysql_select_db("xsphp")or die("select db error!");

	$sql="select id,name,price,num,desn from shop";
	$result=mysql_query($sql);

	$data=mysql_fetch_row($result);

	print_r($data);
	echo '<br>';

	$data=mysql_fetch_row($result);

	print_r($data);
	echo '<br>';


	mysql_close();