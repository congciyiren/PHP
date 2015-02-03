<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	




	$stmt=$pdo->prepare("insert into shop(name,price,num,desn) values(?,?,?,?)");
	
	$stmt->execute(array("myname1",111.1,55,"good1"));
	$stmt->execute(array("myname2",111.2,56,"good2"));
	$stmt->execute(array("myname3",111.3,57,"good3"));