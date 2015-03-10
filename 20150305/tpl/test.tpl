<{config_load file="view.conf" section="one"}>

当前服务器时间<{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}><br>

<{$page}>  <br>
<{$smarty.get.page>  <{*就和PHP中$_GET["page"]*}>
<{$smarty.session.username1}><br>

这是模版中的内容:<br>

使用从PHP中分配过来的动态数据:<br>

<{$name}> <br>

<{$arr1[0]}><br>
<{$arr1[1]}><br>
<{$arr1[2]}><br>

<{$arr2[0][0]}><br>
<{$arr2[0][1]}><br>
<{$arr2[1][0]}><br>
<{$arr2[1][1]}><br>

<{$arr3.one}><br>
<{$arr3.two}><br>


<{$arr4.one.two}><br>


<{$arr5.one[0]}><br>
<{$arr5[0].two}><br>

<{$ren->name}><br>
<{$ren->age}><br>

<{$ren->say()}><br>

<{$num1}><br>
<{$num2}><br>
<{$num1+$num2}><br>
<{$num1+$num2*$num1+$num2+44}><br>


<table border="<{$smarty.config.border}>" width="<{  #tabwidth# }>" bordercolor="<{#tabborder#}>">
		<tr bgcolor="<{$smarty.config.bgcor}>">
				<td>aaaa</td>
				<td>aaaa</td>
				<td>aaaa</td>
				<td>aaaa</td>
		</tr>
		<tr>
				<td>aaaa</td>
				<td>aaaa</td>
				<td>aaaa</td>
				<td>aaaa</td>
		</tr>
</table>


<{#aa#}><br>
<{#bb#}><br>
<{#cc#}><br>
<{#dd#}><br>
<{#ee#}><br>
<{#ff#}><br>