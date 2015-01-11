<?php
	function test($i,$j){
		$sum=0;
		$sum=$i*$i+$j*$j;
		return $sum;
	}
	echo test(2,5);