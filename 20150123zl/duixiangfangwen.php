<?php
	class Person{
		var $name;
		var $sex;
		var $age;

		function say(){
			echo "这个人在说话<br>";
		}
		function run(){
			echo "这个人在走路<br>";
		}
	}
	$person1 = new Person();
	$person2 = new Person();
	$person3 = new Person();

	$person1->name = "张三";
	$person1->sex = "男";
	$person1->age = "20";

	$person2->name = "李四";
	$person2->sex = "男";
	$person2->age = "30";

	$person3->name = "王五";
	$person3->sex = "男";
	$person3->age = "40";

	echo "person1对象的名字是:".$person1->name."<br>";
	echo "person1对象的性别是:".$person1->sex."<br>";
	echo "person1对象的年龄是:".$person1->age."<br>";

	$person1->say();
	$person1->run();

	echo "person2对象的名字是:".$person2->name."<br>";
	echo "person2对象的性别是:".$person2->sex."<br>";
	echo "person2对象的年龄是:".$person2->age."<br>";

	$person2->say();
	$person2->run();

	echo "person3对象的名字是:".$person3->name."<br>";
	echo "person3对象的性别是:".$person3->sex."<br>";
	echo "person3对象的年龄是:".$person3->age."<br>";

	$person3->say();
	$person3->run();