<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		
	}	

	$stmt=$pdo->prepare("select id,name,price,num,desn from shop where id>:id");
	$stmt->execute(array(":id"=>100));

	foreach($stmt as $val){
		print_r($stmt);
		echo '<br>';
	}