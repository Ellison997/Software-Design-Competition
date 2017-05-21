
	<?php
	/**
	 * 修改密码
	 */
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
 $userpassword='str_replace(" ","",$_POST['userpassword'])';//接收客户端发来的姓名；
  $password=Md5($userpassword);
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的手机号;
$result = mysql_query("select * from   where customer phone='$userphone'");
$sql="select * from customer  where  phone='$userphone'";

$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
if(is_array($rs)){ //判断是否存在该手机号
if($userphone !=null){
$sql="update customer set password='$password',state='0'
		  where phone='$userphone'";
	$result=mysql_query($sql);
	echo "success";
}}else{
	echo "false";
}
?>