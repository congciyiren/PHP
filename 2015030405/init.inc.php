<?php
		
		echo $_SERVER["SCRIPT_FILE"];


	include "./libs/Smarty.class.php";

	$tpl=new Smarty;
	$tpl->template_dir="./tpl/";
	$tpl->compile_dir="./com";
	$tpl->left_delimiter="<{";
	$tpl->right_delimiter="}>";
