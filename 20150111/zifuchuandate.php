<?php
	$pattern = "/(\d{2})\/(\d{2})\/(\d{4})/";
	$text="今年国庆节放假日期为10/01/2012到10/07/2012共7天。";
	echo preg_replace($pattern,"\\3-\\1-\\2",$text);
	echo preg_replace($pattern,"\${3}-\${1}-\${2}",$text);