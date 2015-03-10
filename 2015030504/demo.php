<?php
	
	header("Content-Type:text/html;charset=utf-8");

	include "init.inc.php";
	$mysqli=new mysqli("localhost","root","89641551","xsphpdb");

	$result=$mysqli->query("select * from shops");

	$data=array();

	while($row=$result->fetch_assoc()){
		$data[]=$row;
	}

	$tpl->assign("data",$data);
	$tpl->display("test.tpl");