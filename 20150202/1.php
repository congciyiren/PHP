<?php
	
	try{
		$driver_opts=array();
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551",$driver_opts);	
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		exit;
	}

	echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br>";
	echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br>";
	echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO)."<br>";
	echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION)."<br>";
	echo $pdo->getAttribute(PDO::ATTR_DRIVER_NAME)."<br>";