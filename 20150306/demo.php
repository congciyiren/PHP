<?php
	include "./libs/Smarty.class.php";

	$tpl=new Smarty;

	$title="this is a title";

	$content="this is body content";

	$tpl->assign("title",$title);
	$tpl->assign("content",$content);