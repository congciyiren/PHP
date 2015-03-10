<?php
	session_start();

	print_r($_SESSION);

	echo session_id()."<br>";
	echo $_COOKIE["PHPSESSID"];

	setCookie(session_name(),"12313213213213",);