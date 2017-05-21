<?php
include_once('mysql_connect.php');               //连接数据库
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的userpassword；
$userpassword=str_replace(" ","",$_POST['userpassword']);//接收客户端发来的userphone;

 if($userphone!=null){
$sql="select * from servicer where  phonenumber='$userphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;

 
if(is_array($rs)){

	 $sqls="update servicer set state='1'   where phonenumber='$userphone'";
$result=mysql_query($sqls);
	//echo JSON($rs);
echo  "succeed";
}
 }
?>