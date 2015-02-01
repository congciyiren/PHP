<?php
	class Person{
		var $name;
		var $sex;
		var $age;

		function say(){
			echo "我的名字: ".$this->name.", 性别: ".$this->sex.", 年龄: ".$this->age."。<br>";
		}

		function run(){
			echo $this->name."在走路<br>";
		}
	}

	$person1 = new Person();
	$person2 = new Person();
	$person3 = new Person();

	$person1->name = "张三";
	$person1->sex = "男";
	$person1->age = "20";

	$person2->name = "李四";
	$person2->sex = "女";
	$person2->age = "30";

	$person3->name = "王五";
	$person3->sex = "男";
	$person3->age = "40";

	$person1->say();
	$person2->say();
	$person3->say();
	$person1->run();