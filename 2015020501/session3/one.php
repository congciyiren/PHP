<?php
	session_start();
	$_SESSION["islogin3"]=1;
	$_SESSION["username"]="admin";
	$_SESSION["uid"]=333;
	echo session_name.'='.session_id().'<br>';