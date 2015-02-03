<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	

	$stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(?,?,?,?)" );
	
	// $stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(:name,:price,:num,:desn)" );
	
	// $stmt->bindParam(":name",$name);
	// $stmt->bindParam(":num",$num);
	// $stmt->bindParam(":desn",$desn);
	// $stmt->bindParam(":price",$p);

	$stmt->bindParam(1,$name,PDO::PARAM_STR);
	$stmt->bindParam(3,$num,PDO::PARAM_INT);
	$stmt->bindParam(4,$desn,PDO::PARAM_STR);
	$stmt->bindParam(2,$p,PDO::PARAM_STR);

	$name="bison2";
	$num=222;
	$desn="shuai2";
	$p=33.32;

	if($stmt->execute()){
		echo "执行成功";
		echo "最后插入的ID:".$pdo->lastInsertID();
	}else{
		echo "执行失败";
	}