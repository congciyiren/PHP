<html>
	<head><title>测试错误报告</title></head>
	<meta http-equiv="Content" content="html/text;charset=utf-8">
	<body>
		<h2>测试错误报告</h2>
		<?php
			ini_set('display_errors', 1);
			error_reporting(E_ALL&~(E_WARNING|E_NOTICE));
			gettype($var);
			gettype();
			get_Type();
		?>
	</body>
</html>