<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	

	$stmt=$pdo->prepare("select id,name,price,num,desn from shop where id>:id order by id");
	$stmt->execute(array(":id"=>100));

	$row=$stmt->fetch();
	print_r($row);

	$row=$stmt->fetch();
	print_r($row);