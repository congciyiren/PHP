<html>
	<head>
		<title> <?php echo $this->tpl_vars["title"]; ?> </title>
	</head>
<body>

	
<table  align="center" width="500" cellpadding="3" cellspacing="0">
	<caption><h1> <?php echo $this->tpl_vars["tableName"]; ?> <h1></caption>
	<tr bgcolor="#cccccc">
		<th>���</th><th>����</th><th>�Ա�</th><th>����</th><th>�����ʼ�</th>
	</tr>
	
	<?php foreach($this->tpl_vars["users"] as $this->tpl_vars["user"]) { ?>
		<tr>	
			<?php foreach($this->tpl_vars["user"] as $this->tpl_vars["colKey"] => $this->tpl_vars["colValue"]) { ?>
				<?php if($this->tpl_vars["colKey"]== "sex") { ?>
					<?php if($this->tpl_vars["colValue"]=="��") { ?>
						<td bgColor="red"> <?php echo $this->tpl_vars["colValue"]; ?> </td>
					<?php } elseif($this->tpl_vars["colValue"]=="Ů") { ?>
						<td bgColor="green"> <?php echo $this->tpl_vars["colValue"]; ?> </td>
					<?php } else { ?>
						<td bgColor="blue"> ĩ֪ </td>
					<?php } ?>
				<?php } else { ?>
					<td> <?php echo $this->tpl_vars["colValue"]; ?> </td>
				<?php } ?>
			<?php } ?>
		</tr>
	<?php } ?>	
</table>
<center>�����ҵ�<b> <?php echo $this->tpl_vars["rowNum"]; ?> </b>����¼</center>

		<hr><center> ############### ���ߣ�<?php echo $this->tpl_vars["author"]; ?> ############## </center>
	</body>
</html>

