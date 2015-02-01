<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");


	$sqls="insert into shop (name,price,num,desn)values('XSPHP','79','10000','vaer good for php');";
	$sqls.="update shop set name='BISON' where id >40;";
	$sqls.="delete from shop where id>90;";

	echo $sqls."<br>";
	if($mysqli->multi_query($sqls)){
		echo "多条语句执行成功！<br>";
		echo "最后插入的ID:".$mysqli->insert_id."<br>";
		//echo "影响的行数为:".$mysqli->affected_rows;
	}else{
		echo "ERROR:".$mysqli->errno."--".$mysqli->error;
	}
	$mysqli->close();