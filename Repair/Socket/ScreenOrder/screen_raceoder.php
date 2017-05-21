<?php
/**
 * 现场单 （派送单）发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
$result = mysql_query("select * from screen_order where static='已接单'");
$n = 0;
/**
$upid=str_replace(" ","",$_POST['upid']);//接收客户端发来的数据;
$schedule=str_replace(" ","",$_POST['sta']); 
 $sockerphone=str_replace(" ","",$_POST['sockerphone']); 
$time=$_POST['time'];
*/
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockerphone' => $row['sockerphone'],'username' => $row['username'], 'userphone' => $row['userphone'], 
	'time' => $row['time'], 'question' => $row['question'],'position' => $row['position'],
	'positionlocation' => $row['positionlocation'],'picture' => $row['picture'],'type' => $row['type'],'id' => $row['id']);

}
echo JSON($array);
/**
if($upid!=null){
$sql="select * from screen_order where  id='$upid'&&static='已接单'";
$query=mysql_query($sql);
$rs = mysql_fetch_array($query);

if(is_array($rs)){
	
		$sql="update screen_order set static='$schedule',completetime='$time'  where id='$upid'";
$query=mysql_query($sql);
}
	}
	*/
	?>