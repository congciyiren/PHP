<?php
	$patten = '/(https? | ftps?) : \/\/(www)\.([^\.\/]+)\.(com|net|org)(\/[\w-\.\/\?\%\&\=]*)?/i';

	$subject = "网址为http://www.lampbrother.net/index.php的位置是LAMP兄弟连";

	if(preg_match($pattern,$subject,$matches)){
		echo "搜索到的URL为: ".$matches[0]."<br>";
		echo "URL中的协议为: ".$matches[1]."<br>";
		echo "URL中的主机为: ".$matches[2]."<br>";
		echo "URL中的域名为: ".$matches[3]."<br>";
		echo "URL中的顶域为: ".$matches[4]."<br>";
	} else {
		echo "搜索失败";
	}