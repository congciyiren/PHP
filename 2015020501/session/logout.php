<?php
	
	include "comm.php";

	$username=$_SESSION["username"];
	$sid=session_id();

	session_start();
 
	$_SESSION=array();

	if(isset($_COOKIE[session_name()])){
		setCookie(session_name(),'',time()-3600,'/');
	}

	session_destroy();

	echo $username."再见!";
	echo $sid;

?>
<br>
	<a href="login.php">重新登录</a>
