<?php
include("../../tool/conn.php");						//包含conn.php文件
$user_name=$_POST['user_name'];
$user_phone=$_POST['user_phone'];                 //获取用户填入的信息
$school=$_POST['user_school'];
$work=$_POST['user_job'];
$password=$_POST['user_password'];	
$id=$_GET['id'];	


$update=mysql_query("update servicer set name='$user_name',phonenumber='$user_phone',password='$password',school='$school',job='$work' where id='$id'",$conn);
	if($update){
		echo "<script>window.location.href='../../service_basic.php'</script>";	
	}else{
		echo "<script>alert('修改失败！');window.location.href='../staff_update.php'</script>";
	
	}

?>