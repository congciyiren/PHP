<?php
	include "page.class.php";
	$mysqli=new mysqli("localhost","root","89641551","xsphp");

	if(mysqli_connect_errno()){
		echo "错误:" .mysqli_connect_error();
		exit;
	}

	$result=$mysqli->query("select * from shop");
	$page=new Page($result->num_rows);
	$sql="select id cid,name shopname,price shopprice,num shopnum,desn shopdesn from shop{$page->limit} ";
	

	$result=$mysqli->query($sql);

	//纪录信息

	echo '<table border=1 align="center" width=900>';
	echo '<tr>';
	while($field=$result->fetch_field()){
		echo '<th>'.$result->current_field.'_['.$field->orgname.']'.$field->name.'('.$field->max_length.')</th>';
	}
	echo '</tr>';
	// $result->data_seek(50);
	while($row=$result->fetch_assoc()){
		echo '<tr>';
		foreach($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
	}
	echo '<tr><td align="center" colspan="5">'.$page->fpage().'</td></tr>';
	echo '</table>';
	$result->free(); 
	$mysqli->close();