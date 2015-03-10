<?php
	$mem= new Memcache;
	$mem->connect("localhost",11211);

	$sql="select * from shops";
	$key=substr(md5($sql),10,8);
	$data=$mem->get($key);

	if(!$data){
		
		$mysqli=new mysqli("localhost","root","89641551","xsphpdb");
		$result=$mysqli->query($sql);
		$data=array();
		while($row=$result->Fetch_assoc()){
			$data[]=$row;
		}
		$result->free();
		$mysqli->close();

		$mem->set($key,$data,MEMCACHE_COMPRESSED,3600);
		echo $sql;
	}
	echo '<pre>';
	print_r($data);
	echo '</pre>';

	$mem->close();