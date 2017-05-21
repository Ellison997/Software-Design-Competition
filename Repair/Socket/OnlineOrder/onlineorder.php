<?php
header('content-type:text/html;charset=utf-8'); 
require'mysqlcon.php';
$name=str_replace(" ","",$_POST['name']);//接收客户端发来的姓名；
$phone=str_replace(" ","",$_POST['phone']);//接收客户端发来的手机号;
$intime=$_POST['intime'];//接收客户端发来的进入时间；
$outtime=$_POST['outtime'];//接收客户端发来的退出时间;
if($name!=null){

$sql="INSERT INTO onlineorder (name,phone,intime,outtime) VALUES ('$name','$phone','$intime','$outtime')";
$result=mysql_query($sql);
echo "success";
}
?>