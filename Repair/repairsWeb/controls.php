<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>智能小车远程控制</title>
<style type="text/css">
.btn1{
	width:119px;
	height:48px;
	}
.btn2{
	width:156px;
	height:96px;
	}
.btn3{
	width:96px;
	height:156px;
	}
.btn4{
	width:150px;
	height:150px;
	}
	
#phps{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:2;
	left: -369px;
	top: 619px;
	}
#hh1{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -366px;
	top: -28px;
	width: 304px;
}
#buttons1_1{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -365px;
	top: 15px;
}
#buttons1_2{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -241px;
	top: 17px;
	width: 123px;
}
#buttons1_3{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -114px;
	top: 16px;
}
#buttons1_4{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -365px;
	top: 68px;
}
#buttons1_5{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -238px;
	top: 68px;
}
#buttons1_6{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -113px;
	top: 68px;
}

#buttons2_1{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -273px;
	top: 191px;
}
#buttons2_2{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -272px;
	top: 444px;
}
#buttons2_3{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -367px;
	top: 288px;
}
#buttons2_4{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -116px;
	top: 289px;
}
#buttons2_5{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: -270px;
	top: 289px;
}

#buttons3_1{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: 21px;
	top: 201px;
}
#buttons3_2{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: 21px;
	top: 254px;
}
#buttons3_3{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: 21px;
	top: 305px;
}
#buttons3_4{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: 22px;
	top: 358px;
}
#buttons3_5{
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	z-index:1;
	left: 23px;
	top: 407px;
}


</style>

</head>

<body>
<h1  id="hh1">智能小车远程控制</h1>
<form action =" controls.php" method="post" target="del">
<div id="buttons1_1"><input type="image" class="btn1" src="images/control/car_1.png"  value="11" name = "cars"/></div>
<div id="buttons1_2"><input type="image" class="btn1" src="images/control/car_2.png"  value="12"  name = "cars"/></div>
<div id="buttons1_3"><input type="image" class="btn1" src="images/control/car_3.png"  value="13" name = "cars"/></div>
<div id="buttons1_4"><input type="image" class="btn1" src="images/control/car_4.png"  value="14" name = "cars"/></div>
<div id="buttons1_5"><input type="image" class="btn1" src="images/control/car_5.png"  value="15" name = "cars"/></div>
<div id="buttons1_6"><input type="image" class="btn1" src="images/control/car_6.png"  value="16" name = "cars"/></div>
<div id="buttons2_1"><input type="image" class="btn2"  src="images/control/direction_up.png" value="21" name = "directions"/></div>
<div id="buttons2_2"><input type="image" class="btn2"  src="images/control/direction_next.png" value="22" name = "directions"/></div>
<div id="buttons2_3"><input type="image" class="btn3"  src="images/control/direction_left.png" value="23" name = "directions"/></div>
<div id="buttons2_4"><input type="image" class="btn3"  src="images/control/direction_right.png" value="24" name = "directions"/></div>
<div id="buttons2_5"><input type="image" class="btn4"  src="images/control/direction_stop.png" value="20" name = "directions"/></div>
<div id="buttons3_1"><input type="image" class="btn1"  src="images/control/action_one.png" name = "car03_1"/></div>
<div id="buttons3_2"><input type="image" class="btn1"  src="images/control/action_two.png" name = "car03_2"/></div>
<div id="buttons3_3"><input type="image" class="btn1"  src="images/control/action_there.png" name = "car03_3"/></div>
<div id="buttons3_4"><input type="image" class="btn1"  src="images/control/action_for.png" name = "car03_4"/></div>
<div id="buttons3_5"><input type="image" class="btn1"  src="images/control/action_five.png" name = "car03_5"/></div>
</form>

<iframe id="del" name="del" frameborder="0" width="1" height="1"></iframe>



</body>
</html>
<div id="phps">
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
</div>