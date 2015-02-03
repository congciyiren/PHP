<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	

	$stmt=$pdo->prepare("update shop set name=:name,num=:num,price=:price,desn=:desn where id=:id" );
	
	// $stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(:name,:price,:num,:desn)" );
	
	$stmt->bindParam(":name",$name);
	$stmt->bindParam(":num",$num);
	$stmt->bindParam(":desn",$desn);
	$stmt->bindParam(":price",$price);
	$stmt->bindParam(":id",$id);

	// $stmt->bindParam(1,$name);
	// $stmt->bindParam(3,$num);
	// $stmt->bindParam(4,$desn);
	// $stmt->bindParam(2,$p);

	$name="bison5";
	$num=555;
	$desn="shuai5";
	$price=7757;
	$id=2639;

	if($stmt->execute()){
		echo "执行成功!<br>";
		// echo "最后插入的ID:".$pdo->lastInsertID();
	}else{
		echo "执行失败!";
	}

	$name="bison6";
	$num=556;
	$desn="shuai6";
	$price=776;
	$id=2640;

	if($stmt->execute()){
		echo "执行成功!<br>";
		// echo "最后插入的ID:".$pdo->lastInsertID();
	}else{
		echo "执行失败!";
	}