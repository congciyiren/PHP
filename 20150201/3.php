<?php
	$mysqli=new mysqli("localhost","root","89641551","xsphp");


	$sql="update shop set name=?,price=?,num=?,desn=? where id=?";

	$stmt=$mysqli->prepare($sql);

	$stmt->bind_param("sdisi",$name,$price,$num,$desn,$id);

	$name="allen";
	$price=33.31;
	$num=31;
	$desn="good1";
	$id=2579;

	$stmt->execute();

	$name="leborn1";
	$price=23.213;
	$num=213;
	$desn="very goo1d";
	$id=2580;

	$stmt->execute();

	$name="jame1s";
	$price=717.77;
	$num=717;
	$desn="very good g1ood";
	$id=2581;

	$stmt->execute();

	$name="k1be";
	$price=88.188;
	$num=818;
	$desn="very good1 good good";
	$id=2582;

	$stmt->execute();

	echo "最后ID".$stmt->insert_id."<br>";
	echo "影响了".$stmt->affected_rows."行<br>";

	$stmt->close();
