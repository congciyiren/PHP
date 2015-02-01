<?php
	class Person{
		private $name;
		private $sex;
		private $age;

		function __construst($name="",$sex="男",$age=1){
			$this->name =$name;
			$this->sex = $sex;
			$this->age =$age;
		}

		function run(){
			echo $this->name."在走路时".$this->leftLeg()."再".$this->rightLeg()."<br>";

		}

		private function leftLeg(){
			return "迈左腿";
		}

		private function rightLeg(){
			return "迈右腿";
		}
	}

	$person1 = new Person();
	$person1 ->run();
	$person1 ->name = "李四";
	echo $person1->age;
	$person1->leftLag();
	