<html>
	<head>
		<meta http-equiv="Content" content="html/text;charset=utf-8">
		<title>《细说PHP》日历示例</title>
		<style>
			table{border: 1px solid #050;}
			.fontb {color:white; background: blue;}
			th {width: 30px;}
			td ,th{width: 30px;text-align: center;}
			form{margin: 0px;padding: 0px;}
		</style>
	</head>
	<body>
		<?php
			require "calendar.clase.php";
			echo new Calendar;
			?>
	</body>

</html>