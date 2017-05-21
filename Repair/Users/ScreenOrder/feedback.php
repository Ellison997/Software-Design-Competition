<?php
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
$username=str_replace(" ","",$_POST['username']);//接收客户端发来的姓名；
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的手机号;
$time=$_POST['time'];//接收客户端发来的进入时间；
 $question=$_POST['question']; 

if($question!=null){

$sql="INSERT INTO feedback (time,username,userphone,question) VALUES
 ('$time','$username','$userphone','$question')";
$result=mysql_query($sql);
echo "success";
}
?>