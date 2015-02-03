<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551",array(PDO::ATTR_AUTOCOMMIT=>0));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "数据库链接失败:".$e->getMessage();
		exit;
	}	

	try{
		$pdo->beginTransaction();

		$price=500;

		$sql="update zhanghao set price=price-{$price} where id=1";

		$affected_rows=$pdo->exec($sql);
		if(!$affected_rows)
			throw new PDOException("张三转出失败");

		$sql="update zhanghao set price=price+{$price} where id=3";


		$affected_rows=$pdo->exec($sql);

		if(!$affected_rows)
			throw new PDOException("向李四转入失败");

		echo "交易成功!";
		$pdo->commit();

	}catch(PDOException $e){
		echo $e->getMessage();
		$pdo->rollback();
	}

	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,1);