<?php
	$a = array("a"=>"Linux","b"=>"Apache");
	$b = array("a"=>"PHP","b"=>"MySQL","c"=>"web");

	$c = $a+$b;
	echo "合并后的 \$a 和 \$b: \n";
	print_r($c);

	$c = $b+$a;
	echo "合并后的 \$a 和 \$b: \n";
	print_r($c);