<?php
/**
 * 紧急单填写
 */
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
$username=str_replace(" ","",$_POST['username']);//接收发来的客户姓名；
$userphone=str_replace(" ","",$_POST['userphone']);//接收发来的客户手机号;
$servephone=str_replace(" ","",$_POST['servephone']);//接收发来的服务人员手机号;
$servename=str_replace(" ","",$_POST['servename']);//接收发来的服务人员手机号;
$position=$_POST['position'];//接收维修类型;
$type=$_POST['type'];//接收维修类型;
$time=$_POST['time'];//接收时间；


if($username!=null){

$sql="INSERT INTO urgenyorder (username,userphone,servename,servephone,position,type,time) VALUES 
('$username','$userphone','$servename','$servephone','$position','$type','$time')";
$result=mysql_query($sql);
echo "提交成功";
}
?>