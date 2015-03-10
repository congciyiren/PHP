<?php
	header("Content-Type:text/html;charset=utf-8");

	$mysqli=new mysqli("localhost","root","89641551","xsphpdb");

	$result=$mysqli->query('"select * from users where name={$_POST["username"]}"');

	if($result->num_rows >0){
		echo "<font color='red'>用户{$_POST["username"]}已经存在,不能使用</font>";
	}else{
		echo "<font color='yellow'>用户{$_POST["username"]}已经存在,不能使用</font>";
	}