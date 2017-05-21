<?php 
/**
 * 所有普通现场单订单  发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
$resultur = mysql_query("select * from urgenyorder ");  
$result = mysql_query("select * from screen_order where  static='已解决'||static='未解决'  ");
$n = 0;
 
  
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockerphone' => $row['sockerphone'],'sockername' => $row['sockername'], 'userphone' => $row['userphone'], 
	'time' => $row['time'],'username' => $row['username'], 'question' => $row['question'],'position' => $row['position'],'type' => $row['type'],
	'positionlocation' => $row['positionlocation'],'intime' => $row['racetime'],'sta' => $row['static'],
	'appraise' => $row['appraise'],'title' => '现场单','outtime' => $row['completetime'],'id' => $row['id']);

}

echo JSON($array);
?>