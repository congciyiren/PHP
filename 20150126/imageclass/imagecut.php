<?php
	include "image.class.php";
	$img = new Image('./image/');
	$img ->cut("brophp.jpg",50,50,120,120);
	$img ->cut("brophp.jpg",50,50,120,120,'user_');
	$img ->cut("brophp.jpg",50,50,120,120,'');