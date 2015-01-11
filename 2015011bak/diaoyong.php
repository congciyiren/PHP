<?php
	function one($a,$b){
		return $a+$b;
	}
	function two($a,$b){
		return $a*$a+$b*$b;
	}
	function three($a,$b){
		return $a*$a*$a+$b*$b*$b;
	}
	//$result ="one";
	//$result ="two";
	$result ="three";

	echo"运算结果:".$result(2,3);