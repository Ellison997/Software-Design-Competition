	<?php
	/**
	 * 已接单
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
 
$result = mysql_query("select * from screen_order where  static='已接单'||static='未接单'");
	 $n=0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('static' => $row['static'],'sockername' => $row['sockername'],'userphone' => $row['userphone'],'time' => $row['time'],'racetime' => $row['racetime']);
 }
echo JSON($array);
?>