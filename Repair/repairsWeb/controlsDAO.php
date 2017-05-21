<?php
$conn=mysql_connect("localhost","root","123456") or die("connect error");
mysql_select_db("repair") or die("db error");
mysql_query("set names utf8");
$cars=$_POST['cars'];

//if(isset($_POST['car01_1'])){

switch ($cars)
{
case 11:
$directions=$_POST['directions'];
if($directions==20){
	$sql="update control set direction='10' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();
}else if($directions==21){
    $sql="update control set direction='11' where name='cars'";
	echo $_POST['car01_1'];
    if (mysql_query($sql)) echo '一号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if ($directions==22){
    $sql="update control set direction='12' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if ($directions==23){
    $sql="update control set direction='13' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if ($directions==24){
    $sql="update control set direction='14' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
}
  break;
case 12:
  echo "Number 2";
  break;
case 13:
  echo "Number 3";
  break;
case 14:
  echo "Number 3";
  break;
case 15:
  echo "Number 3";
  break;
case 16:
  echo "Number 3";
  break;

default:
  echo "还没有选择小车！";
}
?>


?>