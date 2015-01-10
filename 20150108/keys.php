<?php
	$lamp = array("a"=>"linux","b"=>"Apache","c"=>"MySql","d"=>"PHP");
	print_r(array_keys($lamp));
	print_r(array_keys($lamp,"Apache"));

	$a = array(10,20,30,"10");
	print_r(array_keys($a,"10",false));

	$a = array(10,20,30,"10");
	print_r(array_keys($a,"10",ture));