<?php
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
$sockername=str_replace(" ","",$_POST['sockername']);//接收客户端发来的姓名；
$sockerphone=str_replace(" ","",$_POST['sockerphone']);//接收客户端发来的手机号;
$time=$_POST['time'];//接收客户端发来的进入时间；
$username=$_POST['username']; 
$userphone=$_POST['userphone']; 
$question=$_POST['question']; 
$fromsource=$_POST['from']; 
if($question!=null){

$sql="INSERT INTO complain (sockername,sockerphone ,time,username,userphone,question,fromsource) VALUES
 ('$sockername','$sockerphone' ,'$time','$username','$userphone','$question','$fromsource')";
$result=mysql_query($sql);
echo "success";
}
?>
