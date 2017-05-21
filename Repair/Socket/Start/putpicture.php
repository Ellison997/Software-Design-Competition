<?php
/**
 * 发送头像信息
 */
include_once('mysql_connect.php');               //连接数据库
 require 'json.php';
 
 
$result = mysql_query("select * from servicer ");
$n = 0;
 while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockerphone' => $row['phonenumber'],'picture' => $row['picture'],'name' => $row['name'],
	'job' => $row['job'],'school' => $row['school']
	);
 }
 echo JSON($array); 
 
?>