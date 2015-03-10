<?php
	require "init.inc.php";


	$tpl->register_function("hello","demo");

	demo(array("num"=>10,"color"=>"blue","content"=>"33333333"));

	function demo(args){
		$html="";
		for($i=0;$i<$args["num"];$i++){
			$html.='<font size="'.$args["size"].'"color="'.$args["color"].'">'.$args["content"]."</font><br>"; 
		}
		return $html;
	}

	$tpl->display("test.tpl");