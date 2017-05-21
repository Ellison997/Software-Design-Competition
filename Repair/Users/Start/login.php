<?php
include_once('mysql_connect.php');               //连接数据库
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的userpassword；
$userpassword=str_replace(" ","",$_POST['userpassword']);//接收客户端发来的userphone;
//$mdpassword=md5('$userpassword');
 if($userphone!=null){
$sql="select * from customer where  phone=$userphone";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;


if(is_array($rs)){
	$sqlw="select * from customer where  state='0'&&phone='$userphone'";

$queryw=mysql_query($sqlw);
$rsw = mysql_fetch_array($queryw);
	if(is_array($rsw)){
if($userpassword==$rsw['password']){
	 $sqls="update customer set state='1'   where phone='$userphone'";
$result=mysql_query($sqls);

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
?>