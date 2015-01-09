<?php
	class Person{
		private $name;
		private $sex;
		private $age;

		function __construct($name="",$sex="男",$age=1){
			$this->name =$name;
			$this->sex = $sex;
			$this->age =$age;
		}
		private function __get($propertyName){
			if($propertyName == "sex"){
				return "保密";
			}else if ($propertyName == "age"){
				if ($this->age > 30)
					return $this->age-10;
				else
					return $this->propertyName;
			} else{
				return $this->$propertyName;
			}
		}
	}

	$person1 = new Person("张三","男",40);

	echo "姓名:".$person1->name."<br>";
	echo "性别:".$person1->sex."<br>";
	echo "年龄:".$person1->age."<br>";