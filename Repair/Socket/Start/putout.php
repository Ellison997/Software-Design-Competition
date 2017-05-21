
	<?php
	/**
	 * 离线通知
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
$userphone=str_replace(" ","",$_POST['phone']);//接收客户端发来的手机号；


 if($userphone!=null){
$sql="select * from servicer where  phonenumber='$userphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);

 
if(is_array($rs)){
$sql="update servicer set state='0'   where phonenumber='$userphone'";
$query=mysql_query($sql);
}else{
	echo "NOExit";
}
 }
?>