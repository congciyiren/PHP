<?php
	function myfun1($v){
		if ($v === "MySQL"){
			return "Oracle";
		}
		return $v;
	}

	$lamp = array("Linux","Apache","MySQL","PHP");

	print_r(array_map("myfun1",$lamp));

	function myfun2($v1,$v2){
		if ($v1 == $v2){
			return "same";
		}
		return "different";
	}

	$a1 = array("Linux","PHP","MySQL");
	$a2 = array("Unix","PHP","Oracle");

	$a1 = array("Linux","Apache");
	$a2 = array("MySQL","PHP");

	print_r (array_map(null, $a1,$a2));