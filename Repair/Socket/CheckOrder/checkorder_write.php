<?php 
/**
 * 添加定期检查项
 */
    include_once('mysql_connect.php');
 	$sockername=str_replace(" ","",$_POST['sockername']);
 	$sockerphone=str_replace(" ","",$_POST['sockerphone']);
	$time= $_POST['time'] ;
	$question= $_POST['question'] ;
	$position=str_replace(" ","",$_POST['position']);
	$show=str_replace(" ","",$_POST['show']);
if($position!=null){
	$sql="INSERT INTO checkorder (sockername,sockerphone,position,question,showdir,time)
	 VALUES ('$sockername','$sockerphone','$position','$question','$show','$time')";
	$result=mysql_query($sql);
	echo "success";
}
 
?>