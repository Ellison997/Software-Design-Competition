<?php
header('content-type:text/html;charset=utf-8');
require 'mysqlcon.php';
require 'json.php';
$result = mysql_query("select * from  onlineorder");
$n = 0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('name' => $row['name'], 'phone' => $row['phone'], 
	'intime' => $row['intime'], 'outtime' => $row['outtime']);

}
echo JSON($array);
?>