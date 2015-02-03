<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo $e->getMessage();
		
	}	
	$stmt=$pdo->prepare("select id,name,price,num,desn from shop where id>:id order by id");
	$stmt->execute(array(":id"=>100));

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	while($row=$stmt->fetch()){
		print_r($row);
		echo '<br>';
	}

	$data=$stmt->fetchAll();
	echo '<pre>'; 
	print_r($data);

	echo '</pre>';

