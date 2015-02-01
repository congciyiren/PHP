<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphpdb2");


	$sql="select * from stuc  order by phpc";

	$result=$mysqli->query($sql);

	echo '<table align="center" border="1" width="800">';
	echo '<caption><h1>mysqli view demo</h1></caption>';

	while($row=$result->fetch_assoc()){
		echo '<tr>';
		foreach($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

	$mysqli->close();