<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");

	$stmt=$mysqli->prepare("select id , name, price, num, desn from shop where id >?");
	$stmt->bind_param("i",$id);
	$stmt->bind_result($id, $name, $price, $num, $desn);

	$id=2578;

	$stmt->execute();
	$stmt->store_result();//一次性取出所有结果，重要

	$result=$stmt->result_metadata();
	while($field=$result->fetch_field()){
	echo $field->name."--";
	}
	echo '<br>';


	while( $stmt->fetch()){
	echo "$id--$name--$price--$num--$desn<br>";
	
	}
	echo "纪录总数:" .$stmt->num_rows;
	$stmt->free_result();
	$stmt->close();
