<?php 
/**
 * 现场报修 （主管权限）发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
$result = mysql_query("select * from screen_order where static='已接单'||static='已解决'||static='未解决'");
$n = 0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockerphone' => $row['sockerphone'],'sockername' => $row['sockername'], 'userphone' => $row['userphone'], 
	'time' => $row['time'],'username' => $row['username'], 'question' => $row['question'],'position' => $row['position'],
	'positionlocation' => $row['positionlocation'],'intime' => $row['racetime'],'appraise' => $row['appraise'],'outtime' => $row['completetime'],'id' => $row['id']);
echo JSON($array);
}

?>