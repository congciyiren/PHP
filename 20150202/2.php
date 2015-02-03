<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		exit;
	}

	echo "影响的行数".$pdo->exec("insert into shop(name,price,num,desn) values('iverson','33.32,'333','good')");

	if(!$affected_rows){
		echo $pdo->errorCode()."<br>";
		print_r($pdo->errorInfo());
	}else{
		echo "执行成功!";
	}