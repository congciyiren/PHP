<?php
	class Person{
		var $name;
		var $sex;
		var $age;

		function __construct($name,$sex,$age){
			$this->name = $name;
			$this->sex = $sex;
			$this->age = $age;
		}

		function say(){
			echo "我的名字: ".$this->name.", 性别: ".$this->sex.", 年龄: ".$this->age."。<br>";
		}

		function run(){
			echo $this->name."在走路<br>";
		}

		function __destruct(){
			echo "再见".$this->name."<br>";
		}
	}

	$person1 = new Person("张三","男","20");
	$person1 = null;
	$person2 = new Person("李四","女","30");
	$person3 = new Person("王五","男","40");