<?php
	echo "用户添加的联系人信息如下:<br>";
	foreach($_POST as $key => $value) {
		echo $key.':'.$value.'<br>';
	}