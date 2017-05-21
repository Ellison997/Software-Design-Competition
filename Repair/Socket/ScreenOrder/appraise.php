<?php 
/**
 * 评价 发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
$result = mysql_query("select * from screen_order where  static='已解决'||static='未解决'  ");
$n = 0;
 
  
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'username' => $row['username'],
	'appraise' => $row['appraise'],'appraise' => $row['appraise'],'sockerphone' => $row['sockerphone'],'time' => $row['completetime'],'id' => $row['id']);

}

echo JSON($array);
?>