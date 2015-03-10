<table align="center" border="1" width="800">
	<caption><h1>SHOPS</h1></caption>
	<tr>
		<th>编号</th>
		<th>名称</th>
		<th>价格</th>
		<th>数量</th>
		<th>介绍</th>
	</tr>
	<{section loop=$data name="ls"}>
		<tr>
			<td><{data[ls].id}></td>
			<td><{data[ls].name}></td>
			<td><{data[ls].price}></td>
			<td><{data[ls].num}></td>
			<td><{data[ls].desn}></td>
		</tr>
	<{sectionelse}>

	<{/section}>	
</table>