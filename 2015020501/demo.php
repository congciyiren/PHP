<?php
	session_start();

	$_SESSION["aa"]="111111";
	$_SESSION["bb"]="222222";
	$_SESSION["cc"]=array('1');

	echo session_id()."<br>";   