<?php
/**
 * 注册 
 */
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
$sockername=str_replace(" ","",$_POST['username']);//接收客户端发来的姓名；
$sockerpassword=str_replace(" ","",$_POST['userpassword']);//接收客户端发来的手机号;
$sockerphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的进入时间；
$job=$_POST['userwork']; 
$school=$_POST['userschool']; 
if($sockerphone!=null){
$sql="select * from customer where  phone='$sockerphone'";
$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
if(!is_array($rs)){
	
   $sqladd="INSERT INTO customer (name,password,phone,job,school,state) VALUES
 ('$sockername','$sockerpassword' ,'$sockerphone','$job','$school','0')";
$result=mysql_query($sqladd);
 echo "success";
	
}else {
	echo "over";
}
}

?>