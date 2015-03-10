<?php
	header("Content-Type:text/html;charset=utf-8");
	require "page.class.php";

	$mysqli=new mysqli("localhost", "root", "89641551", "xsphpdb");
	
	$result=$mysqli->query("select id from shops");

	$page=new Page($result->num_rows,10);

	$sql="select id, name, price, num, desn from shops order by id {$page->limit}";

	$result=$mysqli->query($sql);

	echo '<table align="center" border="1" width=900>';
	echo '<caption><h1>商品列表</h1></caption>';
	echo '<tr><th>ID</th><th>NAME</th><th>Price</th><th>NUM</th><th>DESN</th></tr>';

	while($row=$result->fetch_assoc()){
		echo '<tr>';
		foreach($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
	}

	echo '<tr><td align="right" colspan="5">'.$page->fpage().'</td></tr>';
	echo '</table>';
