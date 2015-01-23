<?php
	$sum = 0;
	$dirname = 'phpMyAdmin';
	$dir_handle = opebdir($dirname);

	echo '<table border = "0" align ="center" width="600" cellapcing="0" cellpadding="0">';
	echo '<caption><h2>目录'.$dirname.'下面的内容</h2></caption>';
	echo '<tr align="left" bgcolor="#cccccc">';
	echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';


	while($file = readdir($dir_handle)){
		$dirFile = $dirname."/".$file;

		$bgcolor = $sum++%2==0 ? '#FFFFFF':'#cccccc';
		echo '<tr bgcolor='.$bgcolor.'>';
		echo '<td>'.$file.'</td>';
			echo '<td>'.filesize($dirFile).'</td>';
			echo '<td>'.filetype($dirFile).'</td>';
			echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';
	}

	echo '</table>';
	closedir($dir_handle);

	echo '在<b>'.$dirname.'目录下的子目录和文件夹共有<b>'.$num.'</b>个';