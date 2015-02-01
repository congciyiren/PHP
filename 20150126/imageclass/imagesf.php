<?php
	include "image.class.php";
	$img = new Image('./image');
	$filename = $img ->thumb($filename,80,80,'icon_');
	echo $filename.'<br>';
	echo $midname.'<br>';
	echo $icon.'<br>';