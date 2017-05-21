<?php

include("../../tool/conn.php");	

$user_name=$_POST['user_name'];
$user_phone=$_POST['user_phone'];                 //获取用户填入的信息
$school=$_POST['user_school'];
$work=$_POST['user_job'];
$password=$_POST['user_password'];	

$sql="insert into servicer (id,name,phonenumber,password,school,job)
 values('{null}','{$user_name}','{$user_phone}','{$password}','{$school}','{$work}')";               //向数据库填入数据
 $insert=mysql_query($sql);
 
 if($sql){
		echo "<script>window.location.href='../../service_basic.php'</script>";	
	}else{
		echo "<script>alert('添加失败！');window.location.href='../staff_add.php'</script>";
	
	}
 
 
//header("Location: ../../client_basic.php"); 
//exit;		
 		?>
