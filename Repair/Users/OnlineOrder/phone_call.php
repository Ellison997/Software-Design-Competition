 <?php
	/**
	 * 拨打电话
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
 
$result = mysql_query("select * from servicer where  job='维修员'");
	 $n=0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('name' => $row['name'],'phone' => $row['phonenumber']);

 
 }
echo JSON($array);
?>