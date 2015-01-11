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

		public function getName(){
			return $this->name;
		}

		public function setSex($sex){
			if($sex=="男" || $sex=="女")
				$this->sex=$sex;
		}

		public function setAge($age){
			if($age>150 || $age<0)
				return;
				$this->age=$age;
		}

		public function getAge(){
			if($this->age >30)
				return $this->age -10;
			else
				return $this->age;
		}
		function say(){
			echo "我的名字: ".$this->name.", 性别: ".$this->sex.", 年龄:".$this->age."。<br>";
		}
	}

	$person1 = new Person("王五","男",40);

	echo $person1->getName()."<br>";
	$person1->setSex("女");
	$person1->setAge(200);
	echo $person1->getAge()."<br>";
	$person1->say();