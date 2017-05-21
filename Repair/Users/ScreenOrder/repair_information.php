 	<?php
	/**
	 *所有完成单
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
 
$result = mysql_query("select * from screen_order where  static='已解决'||static='未解决'");
	 $n=0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('static' => $row['static'],'sockername' => $row['sockername'],
	'userphone' => $row['userphone'],'intime' => $row['racetime'],'type' => $row['type'],
	'appraise' => $row['appraise'],'id' => $row['id'],'question' => $row['question'],'position' => $row['position'],
	'outtime' => $row['completetime']);


 }
 echo JSON($array);
?>