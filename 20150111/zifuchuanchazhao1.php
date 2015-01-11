<?php
	$pattern = '/(https?|ftps?):\/\/(www|bbs)\.([^\.\/]+)\.(com|net|org)(\/[\w-\.\/\?\%\&\=]*)?/i';

	$subject = "网址为http://bbs.lampborther.net/index.php的位置是LAMP兄弟连,
				网址为http://www.baidu.com/index.php的位置是百度,
				网址为http://www.google.com/index.php的位置是谷歌。";

	$i = 1;

	if(preg_match_all($pattern, $subject,$matches,PREG_SET_ORDER)){
		foreach($matches as $urls){
			echo "搜索到第".$i."个URL为: ".$urls[0]."<br>";
			echo "第".$i."个URL中的协议为: ".$urls[1]."<br>";
			echo "第".$i."个URL中的主机为: ".$urls[2]."<br>";
			echo "第".$i."个URL中的域名为: ".$urls[3]."<br>";
			echo "第".$i."个URL中的顶域为: ".$urls[4]."<br>";
			echo "第".$i."个URL中的文件为: ".$urls[5]."<br>";

			$i++;
		}
	}	else {
		echo "搜索失败！";
	}