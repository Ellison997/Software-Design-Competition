<?php
 /**
 * 现场单 写入
 */
header("Content-Type: text/html; charset=UTF-8");
$uploads_dir = 'img/';//记着要在你的项目文件里面创建这个文件夹
 include_once('mysql_connect.php');               //连接数据库
$uploadname = $_FILES["image"]["name"];
$userphone=str_replace(" ","",$_POST['userphone']);//接收客户端发来的userpassword；
$username=str_replace(" ","",$_POST['username']);//接收客户端发来的userphone;
 $question=str_replace(" ","",$_POST['question']);
 $position=$_POST['selfposition'];
 $positionlocation=str_replace(" ","",$_POST['position']);
 $time=$_POST['time'];
 $stype=$_POST['stype'];
$file=$_POST['title'];
 if($username!=null){
//$uploadtitle = 'http://127.0.0.1/Repair/Users/img/$dd'; //这些是接收传递参数的
move_uploaded_file($_FILES['image']['tmp_name'], $uploads_dir.$uploadname);
file_put_contents($uploads_dir.'juhl.txt', print_r($file, true));
 $uploadtitle = 'http://127.0.0.1/Repair/Users/img/'+$_POST["title"];
 

$result= mysql_query("INSERT INTO screen_order(type,username,userphone,question,position,positionlocation,time,static,picture) 
VALUES('$stype','$username','$userphone','$question','$position','$positionlocation','$time','未接单','/Repair/Users/img/$file' )");//插入数据库  如果只上传图片  这些都可以省略
 echo "1";
 }
 
?>