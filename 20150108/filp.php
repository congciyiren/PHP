<?php 
	$lamp=array("OS"=>"Linux","Webserver"=>"Apache","Database"=>"MySql","Language"=>"PHP");

	print_r(array_flip($lamp));

	$trans = array("a"=>1,"b"=>1,"c"=>2);
	print_r(array_flip($trans));