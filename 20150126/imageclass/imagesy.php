<?php
	include "image.class.php";

	$img = new Image();

	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 1 , 'wa1_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 2 , 'wa2_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 3 , 'wa3_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 4 , 'wa4_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 5 , 'wa5_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 6 , 'wa6_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 7 , 'wa7_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 8 , 'wa8_');
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 9 , 'wa9_');

	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 0 );
	echo $img -> watermark('brophp.jpg' , ' ./image/logo.gif' , 0 , '' );
	echo $img -> watermark('brophp.jpg' , ' logo.gif' , 0 , 'wa0_' );