<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");

	if(mysqli_connect_errno()){
		echo "错误:" .mysqli_connect_error();
		exit;
	}

	$sql="select id cid,name shopname,price shopprice,num shopnum,desn shopdesn from shop ";
	$result=$mysqli->query($sql);

	$rows=$result->num_rows;
	$cols=$result->field_count;
	echo "表中{$rows}行，{$cols}列";

	//纪录信息

	echo '<table border=1 align="center" width=900>';
	echo '<tr>';
	while($field=$result->fetch_field()){
		echo '<th>'.$result->current_field.'['.$field->orgname.']'.$field->name.'('.$field->max_length.')</th>';
	}
	echo '</tr>';
	// $result->data_seek(50);
	while($row=$result->fetch_assoc()){
		echo '</tr>';
		foreach($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	$result->close();
	$mysqli->close();