<?php
	require "fileupload.class.php";
	$up = new FileUpload;

	// $up ->set('path','./newpath/')
	// 	->set('size','1000000')
	// 	->set('allowtype',array('gif','jpg','png'))
	// 	->set('israndame',false);

	if ($up->upload('myfile')){
		print_r($up->getFileName());
	}else{
		print_r($up->getErrorMsg());
	}