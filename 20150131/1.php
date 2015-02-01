<?
	$mysqli = new mysqli("localhost","root","89641551","xsphp");
	if(mysqli_connect_error()){
		echo "链接数据库失败:".mysqli_connect_error();
		$mysqli=null;
		exit;
	}

	
	//$sql="delete from shop where id >'70'";
	$sql="insert into shop(name,price,num,desn) values('hello','23.7','22','goodbz')";

	$result=$mysqli->query($sql);

	if(!$result){
		echo "SQL语句有误<br>";
		echo "ERROR：".$mysqli->errno."|".$mysqli->error;
		exit;
	}
	if( $mysqli->affected_rows>0){
		echo "有行数被影响<br>";
	}
	echo "最后自动增长的ID:".$mysqli->insert_id;

	 $mysqli->close();