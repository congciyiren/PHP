<?php
	function getFileName($url){
		$location = strrpos($url,"/")+1;
		$fileName = substr($url, $location);
		return $fileName;
	}

	echo getFileName("http://bbs.lampborther.net/index.php");
	echo getFileName("http://bbs.lampborther.com/images/Sharp/logo.gif");
	echo getFileName("file:///c:/WINDOWS/php.ini");