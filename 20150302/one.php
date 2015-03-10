<?php
	include "session.class.php";

	$_SESSION["islogin3"]=1;
	$_SESSION["userbane"]="admin";
	$_SESSION["uid"]=333;


	echo session_name().'='.session_id().'<br>';