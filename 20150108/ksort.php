<?php
	$data = array(5=>"five",8=>"eight",1=>"one",7=>"seven",8=>"two");

	ksort($data);
	print_r($data);

	krsort($data);
	print_r($data);