<html>
	<head>
		<title> <?php echo $this->tpl_vars["title"]; ?> </title>
	</head>
<body>

	
<table  align="center" width="500" cellpadding="3" cellspacing="0">
	<caption><h1> <?php echo $this->tpl_vars["tableName"]; ?> <h1></caption>
	<tr bgcolor="#cccccc">
		<th>编号</th><th>姓名</th><th>性别</th><th>年龄</th><th>电子邮件</th>
	</tr>
	
	<?php foreach($this->tpl_vars["users"] as $this->tpl_vars["user"]) { ?>
		<tr>	
			<?php foreach($this->tpl_vars["user"] as $this->tpl_vars["colKey"] => $this->tpl_vars["colValue"]) { ?>
				<?php if($this->tpl_vars["colKey"]== "sex") { ?>
					<?php if($this->tpl_vars["colValue"]=="男") { ?>
						<td bgColor="red"> <?php echo $this->tpl_vars["colValue"]; ?> </td>
					<?php } elseif($this->tpl_vars["colValue"]=="女") { ?>
						<td bgColor="green"> <?php echo $this->tpl_vars["colValue"]; ?> </td>
					<?php } else { ?>
						<td bgColor="blue"> 末知 </td>
					<?php } ?>
				<?php } else { ?>
					<td> <?php echo $this->tpl_vars["colValue"]; ?> </td>
				<?php } ?>
			<?php } ?>
		</tr>
	<?php } ?>	
</table>
<center>共查找到<b> <?php echo $this->tpl_vars["rowNum"]; ?> </b>条记录</center>

		<hr><center> ############### 作者：<?php echo $this->tpl_vars["author"]; ?> ############## </center>
	</body>
</html>

