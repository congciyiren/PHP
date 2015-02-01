<?php
	require "conn.inc.php";
	$sql="insert into shop(name,price,num,desn)values('{$_GET["name"]}',
		'{$_GET["price"]}','{$_GET["num"]}','{$_GET["desn"]}')";
	echo $sql."<br>";
	$result=mysql_query($sql);
	if(!$result){
		echo "ERROR" .mysql_errno().":".mysql_error();
		exit;
	}
	echo "最后自动增长的ID:".mysql_insert_id()."<br>";
	echo "影响的函数：".mysql_affected_rows()."<br>";
	var_dump($result);
	mysql_close();