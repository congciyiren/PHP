<?php
	class Person{
		private $name;
		private $sex;
		private $age;

		function __construct($name="",$sex="男",$age=1){
			$this->name = $name;
			$this->sex = $sex;
			$this->age = $age;
		}

		private function __set($propertyName,$propertyValue){
			if($propertyName == "sex"){
				if(!($propertyValue == "男" || $propertyValue == "女"))
					return;
			}

			if($propertyName == "age"){
				if($propertyValue > 150 || $propertyValue<0 )
					return;
			}
			$this->$propertyName =$propertyValue;
		}
		public function say(){
			echo "我的名字: ".$this->name."，性别: ".$this->sex."， 年龄: ".$this->age."。<br>";
		}
	}

	$person1 = new person("张三","男",20);
	$person1-> name= "李四";
	$person1-> sex = "女";
	$person1-> age = 80;

	$person1-> sex = "保密";
	$person1-> age  = 800;

	$person1->say();
	
