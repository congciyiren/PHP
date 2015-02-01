<?php
	class Person{
		var $name;
		var $ses;
		var $age;

		function __construct($name="",$sex="男",$age=1){
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
	}

	$person1 = new Person("张三","男",20);
	$person2 = new Person("李四","女");
	$person3 = new Person("王五");

	$person1->say();
	$person2->say();
	$person3->say();
	$person1->run();
	