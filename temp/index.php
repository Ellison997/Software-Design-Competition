<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数组</title>
</head>

<body>
<?php
header("Content-Type:text/html; charset=utf-8");
$cars=array("Volvo","BMW","SAAB");
echo "I like".$cars[0].",".$cars[1]."and".$cars[2].".";
echo "<br>".count($cars);
echo "<br>";
for($x=0;$x<count($cars);$x++){
	echo $cars[$x];
	echo "<br>";
	}
//php关联数组
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
echo "peter is" .$age['Peter']."years old.";

foreach($age as $x=>$x_value){
	echo "Key".$x.", Value".$x_value.".";
	echo "<br>";
	
	}
	
//PHP 数组排序
/*
sort()-以升序对数组排序
rsort()-以降序对数组排列
asort() -根据值，以升序对关联数组进行排序
ksort() -根据键，对数组进行升序排列
arsort() -根据值，以降序对关联数组进行排列
kraort() -很具键，以降序对关联数组进行排列
*/
$carss=array("Volvo","BMV","SAAB");
sort($carss);

foreach($carss as $y){
	
	}

echo "智者联盟棒棒哒！";


?>

</body>
</html>