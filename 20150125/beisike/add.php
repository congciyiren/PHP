<?php
	error_reporting(E_ALL ^ E_WARNING);
	error_reporting(E_ALL &~E_NOTICE);
	session_start();
	include 'include/config.php';
	include 'include/para.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=gb2312">
<title>签写留言 - <?php echo $gb_name?></title>
<script language="JavaScript" type="text/title"
src = "include/checkform.js"></Script>
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<body onload="i=0">
<div id="main">
<?php include 'include/head.php';?>
<div id="submit">
<?php if(session_is_registered('timer')&& time() - $_SESSION['timer']<$timejg)
{?>
<div id= "alertmsg">
对不起，您不是刚留言过吗？请<?php echo $timejg;?>
<?php echo abs($timejg-(time()-$SESSION['timer']))?>秒<br>
<a href="javascript:history.back();"如果没有自动返回，请单击此处</a>
</div>
<?php
	echo "<meta http-equiv=\"refresh\"content=\"3;url=index.php\">";
}else{
	if(empty($_POST['ac'])){
		?>
		<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>"
		onSubmit="return FrontPage_Form1_Form1_Validator(this)">
		<p><img src="images/i1.gif"/><img src="images/add.gif"/></p><br>
		<label for="user">昵称:</label>
		<input type="text" id=username name="username" value=""/>*<br/>
		<label for="email">Email:</label>
		<input type="text" id=email name="email" value=""/><br/>
		<label for="comment">内容:</label>
		<textarea id=content name="content"></textarea>*<br/>
		<label for="comment"></label>
		<span>提交之前请先按Ctrl+C键保存您的留言内容，以免程序出错而丢失!</span>
		</form>
	}
}