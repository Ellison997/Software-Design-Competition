<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>
</head>
<body>
<?php
//session_start();
#接受提交过来的用户名及密码
//$username = $_POST['username'];//用户名
//$password = $_POST['password'];//密码

//$_Post获取其他参数省略
if($_SESSION["yzm_code"]==$_POST['yzm_code']){
#拿着提交过来的用户名和密码去数据库查找，看是否存在此用户名以及其密码 
//include("conn.php"); 
//$sql="select * from administrator";
//$query=mysql_query($sql);
//$rs = mysql_fetch_array($query);
//
//if(is_array($rs)){
//if('1215722711'==$username&&'123456789'==$password){
//	//重定向浏览器 
//	header("Location: ../frame.php"); 
//	exit;
//}else if('147258369'==$username&&'000000000'==$password){
//		header("Location: ../frame.php"); 
//		exit;
//		}
//		else {
//	header("refresh:3;url=../login.php");
//	echo "用户名或密码错误，3秒后跳转回登录页面！";
//	}
//}
//mysql_close();

include_once('conn.php');               //连接数据库
$userphone=str_replace(" ","",$_POST['username']);//接收客户端发来的userpassword；
$userpassword=str_replace(" ","",$_POST['password'']);//接收客户端发来的userphone;
if($userphone!=null){
$sql="select * from administrator where  phone=$userphone";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;

if(is_array($rs)){
	$sqlw="select * from administrator where  phone=$userphone";

$queryw=mysql_query($sqlw);
$rsw = mysql_fetch_array($queryw);
	if(is_array($rsw)){
if($userpassword==$rs['password']){
	 
echo  "succeed";
}else{
		echo "error";
	}
}else{
	
echo "over";
}
}else{
	echo "NOExit";
}
 }

}
else{
	header("refresh:3;url=../login.php");
		echo "验证码错误！！3秒后跳转回登录页面！";
}

?>
</body>
</html>
