<?php
	$wage = array(
			"市场部"=> array(
				array(1,"高某","市场部经理",5000.00),
				array(2,"洛某","职员",3000.00),
				array(3,"峰某","职员",2400.00),
				),
			"产品部"=> array(
				array(1,"周某","产品部经理",51000.00),
				array(2,"张某","职员",2600.00),
				array(3,"刘某","职员",2300.00)
				),
			"财务部"=> array(
				array(1,"吴某","财务部经理",5200.00),
				array(2,"郑某","职员",2700.00),
				array(3,"王某","职员",2800.00)
				)
		);

	foreach($wage as $sector =>$table){
		echo '<table border="1" width="600" align="center">';
		echo '<caption><h1>'.$sector.'10月份工资表</h1></caption>';
		echo '<tr bgcolor="#dddddd"><th>编号</th><th>姓名</th><th>职务</th><th>工资</th>';
		foreach($table as $row){
			echo '<tr>';
			foreach($row as $col){
				echo '<td>'.$col.'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br>';
	}