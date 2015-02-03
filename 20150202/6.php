<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	

	//$stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(?,?,?,?)");
	
	 $stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(:name,:price,:num,:desn)" );

	$stmt->execute(array(":price"=>99,":name"=>"bison8",":num"=>"787",":desn"=>"very good good"));
	$stmt->execute(array(":price"=>88,":name"=>"bison9",":num"=>"788",":desn"=>"very good good"));
	$stmt->execute(array(":price"=>77,":name"=>"bison7",":num"=>"789",":desn"=>"very good good"));
	
