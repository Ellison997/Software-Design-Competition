<?php
include_once('conn.php');               //连接数据库
//include("code.php");
$userphone=$_POST['username'];//接收客户端发来的username；
$userpassword=$_POST['userpassword'];//接收客户端发来的userpassword;
//$mdpassword=md5('$userpassword');

//if($_SESSION["yzm_code"]==$_POST['yzm_code']){
if($userphone!=null){
$sql="select * from administrator where  phone='$userphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;

if(is_array($rs)){
	$sqlw="select * from administrator where  phone='$userphone'";

$queryw=mysql_query($sqlw);
$rsw = mysql_fetch_array($queryw);
	if(is_array($rsw)){
if($userpassword==$rsw['password']){
	// header("Location: ../frame.php"); 
  header("Location: ../frame.html"); 

echo  "succeed";
}else{
		//echo "error";
		header("refresh:3;url=../login.html");
		
	}
}else{
	
echo "over";
}
}else{
	echo "不存在此用户";
}
 }
//}else{
//	header("refresh:3;url=../login.php");
//		echo "验证码错误！！3秒后跳转回登录页面！";
//}
?>