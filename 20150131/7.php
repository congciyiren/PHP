<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");
		
	$mysqli->autocommit(0);
	$error=true;
	$price=50;
	$sql="update zh set ye=ye-{$price} where name='zhangsan'";

	$result=$mysqli->query($sql);

	if(!$result){
		$error=false;
		echo "从张三转出失败<br>";
	}else{
		if($mysqli->affected_rows==0){
			$error=false;
			echo "张三的钱没有变化<br>";
		}else{
			echo "从张三帐号转出成功!<br>";
		}
	}

	$sql="update zh set ye=ye+{$price} where name='lisi1'";
	$result=$mysqli->query($sql);

	if(!$result){
		$error=false;
		echo "从李四转入失败<br>";
	}else{
		if($mysqli->affected_rows==0){
			$error=false;
			echo "李四的钱没有变化<br>";
		}else{
			echo "向李四帐号转入成功!<br>";
		}
	}


	
	if($error){
		echo "转账成功！";
		$mysqli->commit();
	}else{
		echo "转账失败!";
		$mysqli->rollback();
	}

	$mysqli->autocommit(1);

	$mysqli->close();