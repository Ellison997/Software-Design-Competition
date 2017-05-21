<?php
	/**
	 * 拨打电话
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
/* $name=str_replace(" ","",$_POST['username']);//接收客户端发来的姓名；
$phone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的手机号;
$position=$_POST['position'];
$question=$_POST['question'];
$time=$_POST['time'];
*/
$result = mysql_query("select * from notification  ");
	 $n=0;
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('id' => $row['id'],'username' => $row['username'],'position' => $row['position'],'question' => $row['question'],
	'userphone' => $row['userphone'],'time' => $row['time']);

 
 }
echo JSON($array);
/*
if($name!=null){

$sql="INSERT INTO  notification (username,userphone,position,question,time) VALUES ('$name','$phone','$position','$question','$time')";
$result=mysql_query($sql);
echo "success";
}
*/
?>