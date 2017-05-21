<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易发地点</title>
<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
<script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">

<!-- 引导程序，字体，主题界面-->
</head>

<body>

<?php
/**
 * 显示紧急单易发生的地点
 */
 
include_once('mysql_connect.php');               //连接数据库
require 'json.php';
   
   
	 $n = 0;
$result = mysql_query("select * from urgenyorder where position like('%教学楼A%')");
	 $n = 0;
  while ($row = mysql_fetch_array($result)) {
  	$n=$n+1;
 }
  	//echo '教学楼A',$n;
		 $a = 0;
$result = mysql_query("select * from urgenyorder where position like('%教学楼B%')");
   while ($row = mysql_fetch_array($result)) {
  	$a=$a+1;
 }
  	//echo '教学楼B',$a;
  $b = 0;
$result = mysql_query("select * from urgenyorder where position like('%教学楼C%')");
   while ($row = mysql_fetch_array($result)) {
  	$b=$b+1;
 }
  	//echo '教学楼C',$b;
	
 $result = mysql_query("select * from urgenyorder where position like('%教学楼D%')");
	 $c = 0;
  while ($row = mysql_fetch_array($result)) {
  	$c=$c+1;
 }
  	//echo '教学楼D',$c;
 $d = 0;
$result = mysql_query("select * from urgenyorder where position like('%教学楼E%')");
   while ($row = mysql_fetch_array($result)) {
  	$d=$d+1;
 }
  	//echo '教学楼E',$d;
 $e = 0;
$result = mysql_query("select * from urgenyorder where position like('%教学楼F%')");
   while ($row = mysql_fetch_array($result)) {
  	$e=$e+1;
 }
  	//echo '教学楼F',$e;
	 $f = 0;
$result = mysql_query("select * from urgenyorder where position like('%实验楼%')");
   while ($row = mysql_fetch_array($result)) {
  	$f=$f+1;
 }
  	//echo '实验楼',$f;
	$g=0;
$result = mysql_query("select * from urgenyorder where position like('%办公楼%')");
   while ($row = mysql_fetch_array($result)) {
  	$g=$g+1;
 }
  	//echo '办公楼 ',$g;
	
echo "<table class='table'><thead><tr>";
		echo "
		<th>地点</th>
		<th>教学楼A</th>
		<th>教学楼B</th>
		<th>教学楼C</th>
		<th>教学楼D</th>
		<th>教学楼E</th>
		<th>教学楼F</th>
		<th>实验楼</th>
		<th>办公楼</th>
		";
		echo "<th style=' width='3.5em''></th></tr></thead>";
		echo "<tbody>";
            echo "<tr>
			<td>事故次数</td>
			<td>".$n."</td>
			<td>".$a."</td>
			<td>".$b."</td>
			<td>".$c."</td>
			<td>".$d."</td>
			<td>".$e."</td>
			<td>".$f."</td>
			<td>".$g."</td>
			";
			echo "</tr>";
        echo "</tbody></table>";
							
	?>
    
    </body>
    </html>


