<?php
	date_default_timezone_set("Etc/GMT-8");
	echo "当前时间".date("Y-m-d H:i:s",time())." ";

	$hour =date("H");

	if($hour < 6 ){
		echo "凌晨好!";
	} elseif($hour < 9 ){
		echo "早上好!";
	} elseif($hour < 12 ){
		echo "上午好!";
	} elseif ($hour < 14){
		echo "中午好!";
	} elseif ($hour < 17){
		echo "下午好!";
	} elseif ($hour < 19){
		echo "傍晚好!";
	} elseif ($hour < 22){
		echo "晚上好!";
	} else {
		echo "夜里好";
	}