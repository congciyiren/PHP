<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");


	$sql="insert into shop(name,price,num,desn) values(?,?,?,?)";

	$stmt=$mysqli->prepare($sql);

	$stmt->bind_param("sdis",$name,$price,$num,$desn);

	$name="iverson";
	$price=33.33;
	$num=33;
	$desn="good";

	$stmt->execute();

	$name="leborn";
	$price=23.23;
	$num=23;
	$desn="very good";

	$stmt->execute();

	$name="james";
	$price=77.77;
	$num=77;
	$desn="very good good";

	$stmt->execute();

	$name="kobe";
	$price=88.88;
	$num=88;
	$desn="very good good good";

	$stmt->execute();

	echo "最后ID".$stmt->insert_id."<br>";
	echo "影响了".$stmt->affected_rows."行<br>";

	$stmt->close();
