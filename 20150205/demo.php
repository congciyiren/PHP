<?php
	$time=time()+3600;
	
	setCookie("one","11111111",$time);
	setCookie("two","22222222",$time);
	setCookie("three","3333333",$time);

	setCookie("four[0]","aaaaaaaaa",$time);
	setCookie("four[1]","bbbbbbbbb",$time);
	setCookie("four['aa']","ccccccccc",$time);
	echo "保存成功!"
?>
