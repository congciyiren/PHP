<?php
	include "mysql.class.php";

	$tpl=new Mytpl("./templates/","./templates_c");

	$title="这是从数据库中获取的标题";
	$content="这是从数据库中获取的文章内容";

	$tpl->assign("title",$title);
	$tpl->assign("content",$content);

	$tpl->display("tpl.html");