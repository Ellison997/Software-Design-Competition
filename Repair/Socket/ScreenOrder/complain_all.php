<?php 
/**
 * 投诉发送
 */
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
require 'json.php';
$result = mysql_query("select * from complain  ");
$n = 0;
 while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'username' => $row['username'],'userphone' => $row['userphone'],
	'question' => $row['question'],'fromsource' => $row['fromsource'],'sockerphone' => $row['sockerphone'],'time' => $row['time'],'id' => $row['id']);
 }
 echo JSON($array);
?>