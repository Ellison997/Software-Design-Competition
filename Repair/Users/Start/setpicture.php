<?php
 /**
 * 设置头像
 */
header("Content-Type: text/html; charset=UTF-8");
$uploads_dir = 'img/';//记着要在你的项目文件里面创建这个文件夹
 include_once('mysql_connect.php');               //连接数据库
$uploadname = $_FILES["image"]["name"];
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的userpassword；
$file=$_POST['title'];
 if($userphone!=null){

move_uploaded_file($_FILES['image']['tmp_name'], $uploads_dir.$uploadname);
file_put_contents($uploads_dir.'juhl.txt', print_r($file, true));
 $uploadtitle = 'http://127.0.0.1/Repair/Users/Start/img/'+$_POST["title"];
 
 $sqls="update customer set picture='/Repair/Users/Start/img/$file'   where phone='$userphone'";
$result=mysql_query($sqls);

}
 
?>