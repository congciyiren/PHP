<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=xsphp","root","89641551");
		
	}catch(PDOException $e){
		echo $e->getMessage();
		
	}	
	$stmt=$pdo->prepare("select id,name,price,num,desn from shop where id>:id order by id");
	$stmt->bindColumn("id",$id,PDO::PARAM_INT);
	$stmt->bindColumn("price",$price);
	$stmt->bindColumn("name",$name,PDO::PARAM_STR);
	$stmt->bindColumn(4,$num);
	$stmt->bindColumn(5,$desn);


	$stmt->execute(array(":id"=>100));

	echo '<table border=1 width=900 align="center">';
	echo '<tr>';

	for($i=0;$i<$stmt->columnCount();$i++){
		$field=$stmt->getColumnMeta($i);
		echo '<th>'.$field["name"]."</th>";
	
	}

	echo '</tr>';

	while($stmt->fetch()){
		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$price.'</td>';
		echo '<td>'.$num.'</td>';
		echo '<td>'.$desn.'</td>';
		echo '</tr>';
	}
	echo "</table>";

	echo "总纪录数:".$count=$stmt->rowCount();
	echo "总字段数:".$count=$stmt->columnCount();


