<?php
	$contact = array(
			array(1,'高某','A公司','北京市','987544511','gm@mail.com'),
			array(2,'洛某','B公司','南京市','915944511','lm@mail.com'),
			array(3,'峰某','C公司','上海市','965454451','fm@mail.com'),
			array(4,'书某','D公司','武汉市','456554451','sm@mail.com')
		);
	echo '<table border="1" width="600" align="center">';
	echo '<caption><h1>联系人列表</h1></caption>';

	echo '<tr bgcolor="#DDDDDD">';
	echo '<th>编号</th><th>姓名</th><th>公司</th><th>地址</th><th>电话</th><th>邮箱</th>';
	echo '</tr>';

	for($row=0;$row < count($contact); $row++){
		echo "<tr>";

		for($col=0;$col< count ($contact[$row]);$col++){
			echo '<td>'.$contact[$row][$col].'</td>';
		}
		echo '</td>';
	}
	echo '</table>';