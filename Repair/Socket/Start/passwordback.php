<?php
include_once('mysql_connect.php');               //连接数据库
$userphone=str_replace(" ","",$_POST['sockerphone']);//接收客户端发来的userpassword；
$userpassword=str_replace(" ","",$_POST['sockerpassword']);//接收客户端发来的userphone;

 if($userphone!=null){
$sql="select * from servicer where  phonenumber=$userphone";
 
 $query=mysql_query($sql);
$rs = mysql_fetch_array($query);

if(is_array($rs)){
	
		$sql="update screen_order set password='$userpassword'   where phonenumber='$userphone'";
$query=mysql_query($sql);
echo "succeed";
}else{
	echo "error";
}
	 
 }
?>