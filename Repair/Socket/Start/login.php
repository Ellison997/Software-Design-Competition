<?php
include_once('mysql_connect.php');               //连接数据库
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的userpassword；
$userpassword=str_replace(" ","",$_POST['userpassword']);//接收客户端发来的userphone;

 if($userphone!=null){
$sql="select * from servicer where  phonenumber='$userphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;

include_once('json.php');  
if(is_array($rs)){
if($userpassword==$rs['password']){
	$sqlw="select * from servicer where  state='0'&&phonenumber='$userphone'";

$queryw=mysql_query($sqlw);
$rsw = mysql_fetch_array($queryw);
	if(is_array($rsw)){
	 $sqls="update servicer set state='1'   where phonenumber='$userphone'";
$result=mysql_query($sqls);
	//echo JSON($rs);
echo  "succeed";
	}else{
		echo "over";
	}
}else{
	
echo "error";
}
}else{
	echo "NOExit";
}
 }
?>