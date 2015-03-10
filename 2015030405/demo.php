<?php
	
	require "init.inc.php";

	$title="this is a title";

	

	$content="this is body content";

	$tpl->assign("title",$title);
	$tpl->assign("content",$content);

	$tpl->display("default/test.tpl");