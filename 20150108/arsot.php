<?php
	$data = array("1"=>"Linux","a"=>"Apache","m"=>"MySQL","p"=>"php");

	asort($data);
	print_r($data);

	arsort($data);
	print_r($data);

	rsort($data);
	print_r($data);