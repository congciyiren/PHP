<html>
	<head><title>使用循环嵌套输出表格</title></head>
	<body>
		<table align="center" border="1" width="600">
			<caption><h1>使用while循环嵌套输出表格</h1></caption>
			<?php
				$out=0;
				while ( $out< 100) {
					$bgcolor = $out%2 == 0 ? "#FFFFFF" : "#DDDDDD";

					echo "<tr bgcolor=".$bgcolor.">";

					$in=0;
					while ( $in< 10) {
						echo "<td>".($out*10+$in)."</td>";
						$in++;
					}

					echo "</tr>";
					$out++;
				}
			?>
		</table>
	</body>
</html>