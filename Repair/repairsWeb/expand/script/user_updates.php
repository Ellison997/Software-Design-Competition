<?php
include("../../tool/conn.php");						//包含conn.php文件
$user_name=$_POST['user_name'];
$user_phone=$_POST['user_phone'];                 //获取用户填入的信息
$school=$_POST['user_school'];
$work=$_POST['user_job'];
$password=$_POST['user_password'];	
$prestige=$_POST['user_prestige'];
$id=$_GET['id'];	


$update=mysql_query("update customer set name='$user_name',phone='$user_phone',password='$password',school='$school',job='$work',prestige='$prestige' where id='$id'",$conn);
	if($update){
		echo "<script>window.location.href='../../client_basic.php'</script>";	
	}else{
		echo "<script>alert('修改失败！');window.location.href='../user_update.php'</script>";
	
	}

?>