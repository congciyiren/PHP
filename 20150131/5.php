<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");


	$sqls="select current_user();";
	$sqls.="desc shop;";
	$sqls.="select * from shop";
	if($mysqli->multi_query($sqls)){
		echo "执行成功!<br>";

		$result=$mysqli->store_result();
		echo '<table align="center" border="1" width=600>';
		echo '<tr>';
		while($field=$result->fetch_field()){
			echo '<th>'.$field->name.'</th>';
		}
		echo '</tr>';

		while ($row=$result->fetch_assoc()){
			echo '<tr>';
			foreach($row as $col){
				echo '<td>'.$col.'</td>';
			}
			echo '</tr>';
		}

		echo '</table>';


		$mysqli->next_result();
		$result=$mysqli->store_result();
		echo '<table align="center" border="1" width=600>';
		echo '<tr>';
		while($field=$result->fetch_field()){
			echo '<th>'.$field->name.'</th>';
		}
		echo '</tr>';

		while ($row=$result->fetch_assoc()){
			echo '<tr>';
			foreach($row as $col){
				echo '<td>'.$col.'&nbsp;</td>';
			}
			echo '</tr>';
		}

		echo '</table>';


	}else{
		echo "ERROR:".$mysqli->errno."--".$mysqli->error;
	}
	$mysqli->close();