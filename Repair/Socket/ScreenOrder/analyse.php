<?php 
/**
 * 分析
 */
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
require 'json.php';
$result = mysql_query("select * from screen_order  ");
$n = 0;
  $count=select type,count(*)from screen_order group by bybe having count(*)>1;
  each '$count'
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'username' => $row['username'],
	'appraise' => $row['appraise'],'sockerphone' => $row['sockerphone'],'time' => $row['completetime'],'id' => $row['id']);

}

echo JSON($array);
?>