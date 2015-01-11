<?php
	function myFun($var){
		if($var % 2 ==0)
			return ture;
	}

	$array = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);

	print_r(array_filter($array,"myFun"));