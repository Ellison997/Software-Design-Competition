<?php
	/**
	 * 定期检查
	 */
require'mysql_connect.php';
require 'json.php';
	header('content-type:text/html;charset=utf-8'); 
 
$result = mysql_query("select * from checkorder ");  
 $n = 0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'sockerphone' => $row['sockerphone'],'time' => $row['time'],
	'position' => $row['position'],'question' => $row['question'],'show' => $row['showdir'], 'id' => $row['id']);

}

echo JSON($array);
	?>