<?php
	
	include "comm.php";

	$username=$_COOKIE["username"];

	setCookie("username");
	setCookie("uid", '', time()-3600);
	setCookie("islogin");

	echo $username."再见!";

?>
<br>
	<a href="login.php">重新登录</a>
