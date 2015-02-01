<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");


	$sqls="select current_user();";
	$sqls.="desc shop;";
	$sqls.="select * from shop;";
	$sqls.="select current_date();";

	if($mysqli->multi_query($sqls)){
		echo "执行成功!<br>";

		do {

			$result=$mysqli->store_result();
			echo '<table align="center" border="1" width='.(100*$result->field_count).'>';
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

		if($mysqli->more_results()){
			echo '<p>--<p>--<p>';
		}


		}while($mysqli->next_result());
		
		


	}else{
		echo "ERROR:".$mysqli->errno."--".$mysqli->error;
	}
	$mysqli->close();