<?php
/**
 * 注册 
 */
header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
$uploads_dir = 'img/';//记着要在你的项目文件里面创建这个文件夹
$sockername=str_replace(" ","",$_POST['username']);//接收客户端发来的姓名；
$sockerpassword=str_replace(" ","",$_POST['password']);//接收客户端发来的手机号;
$sockerphone=str_replace(" ","",$_POST['userphone']);;//接收客户端发来的进入时间；
$uploadname = $_FILES["image"]["name"];
$job=$_POST['job']; 
$picture=$_POST['picture']; 
$school=$_POST['schoolname']; 
$file=$_POST['title'];

if($sockerphone!=null){
$sql="select * from servicer where  phonenumber='$sockerphone'";
move_uploaded_file($_FILES['image']['tmp_name'], $uploads_dir.$uploadname);
$query=mysql_query($sql);
$rs = mysql_fetch_array($query);
if(!is_array($rs)){
	move_uploaded_file($_FILES['image']['tmp_name'], $uploads_dir.$uploadname);

 $uploadtitle = 'http://127.0.0.1/Repair/Users/img/'+$_POST["title"];
     $sql="INSERT INTO servicer (name,password,phonenumber,job,school,state,picture) VALUES
 ('$sockername','$sockerpassword' ,'$sockerphone','$job','$school','0','/Repair/Users/img/$picture')";
$result=mysql_query($sql);
 echo "注册成功";
	
}else {
	echo "注册失败";
}
}

//}
?>
