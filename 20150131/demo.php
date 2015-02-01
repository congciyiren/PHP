<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");

	$mysqli->set_charset("utf8");

	$result=$mysqli->query("select name,desn from shop where id>70");
	print_r($result->fetch_assoc());
	echo "<br>";
	print_r($result->fetch_assoc());

	$mysqli->close();