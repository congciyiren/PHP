<?php

	//$_GET
	//$_POST
	//$_SESSION
	//$_COKKIE
	//$_REQUEST
	//$_FILES
	//$_SERVER
	//$_ENV
	//$_GLOBALS

	session_start();
	require "init.inc.php";

	$mysqli=new mysqli("localhost","root","89641551","xsphpdb");

	$result=$mysqli->query("select id,name,price,num,desn from shops");

	$_SESSION["username1"]="this is a username";
	//$row=$result->fetch_row();

	//print_r($row);
	//$tpl->assign("name",$row["name"]);

	$tpl->assign("arr1",array("aa","bbb","cccc"));
	$tpl->assign("arr2",array(array("xxxx","yyyy"),array("zzzz","wwww")));
	
	$tpl->assign("arr3",array("one"=>"11111","two"=>"22222"));

	$tpl->assign("arr4",array("one"=("two"=>"222211112")));

	$tpl->assign("arr5",array("one"=>array("rrrrrr"),array("two"=>kkkkk)));

	class Person{
		var $name;
		var $age;

		public function __construct($name,$age){
			$this->name=$name;
			$this->age=$age;
		}
		function say(){
			return $this->name."--".$this->age;
		}
	}

	$tpl->assign("ren",new Person("zhangsan",10));

	$tpl->assign("num1",10);
	$tpl->assign("num2",20);


	$tpl->assign("page",$_GET["page"]);

	$tpl->display("test.tpl");



