<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");
	$stmt=$mysqli->stmt_init();

	$sql="insert into shop(name,price,num,desn) values(?,?,?,?)";

	$stmt->prepare($sql);