 <?php
	/**
	 * 离线通知
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
$sockerphone=str_replace(" ","",$_POST['phone']);//接收客户端发来的手机号；
$state=str_replace(" ","",$_POST['state']);//接收客户端发来的离线通知;

 if($sockerphone!=null){
$sql="select * from customer where  phone='$sockerphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
$n=0;
 
if(is_array($rs)){
$sql="update customer set state='0'   where phone='$sockerphone'";
$query=mysql_query($sql);
}else{
	echo "NOExit";
}
 }
?>