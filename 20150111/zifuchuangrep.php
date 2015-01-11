<?php
	$array = array("Linxu RedHat9.0","Apache2.2.9","MySQL5.0.51","PHP5.2.6","LAMP","100");

	$version = preg_grep("/^[a-zA-Z]+(\d|\.)+$/",$array);

	print_r($version);