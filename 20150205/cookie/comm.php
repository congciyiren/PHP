<?php
//	print_r($_COOKIE);
	if(!$_COOKIE["isLogin"]){
		header("Location:login.php");
	}
