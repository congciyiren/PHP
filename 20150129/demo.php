<?php
	require "conn.inc.php";
	$sql="delete from shop where id>80";
	echo $sql."<br>";
	$result=mysql_query($sql);
	if(!$result){
		echo "ERROR" .mysql_errno().":".mysql_error();
		exit;
	}
	if(mysql_affected_rows()>0){
		echo "执行成功<br>";
	}else{
		echo "纪录没有改变<br>";
	}
	echo "最后自动增长的ID:".mysql_insert_id()."<br>";
	echo "影响的函数：".mysql_affected_rows()."<br>";
	mysql_close();