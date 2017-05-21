<?php 
/**
 * 所有紧急订单  发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
$resultur = mysql_query("select * from urgenyorder ");  
$n = 0;
  while ($rows = mysql_fetch_array($resultur)) {
	$arrayur[$n++] = array('sockerphone' => $rows['servephone'],'sockername' => $rows['servename'], 'userphone' => $rows['userphone'], 
	'outtime' => $rows['time'],'username' => $rows['username'],'position' => $rows['position'],'type' => $rows['type'],
'sta' => '紧急单',
	'appraise' => '无','title' => '紧急单','id' => $rows['id']);

}
  echo JSON($arrayur); 
?>