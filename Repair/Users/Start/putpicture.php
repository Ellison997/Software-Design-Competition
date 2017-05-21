<?php
/**
 * 发送头像信息
 */
include_once('mysql_connect.php');               //连接数据库
 require 'json.php';
 
 
$result = mysql_query("select * from customer ");
$n = 0;
 while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('userphone' => $row['phone'],'picture' => $row['picture'],'name' => $row['name'],
	'job' => $row['job'],'school' => $row['school'],'prestige' => $row['prestige']
	);
 }
 echo JSON($array); 
 
?>