<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示库存预测</title>
<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
<script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">

<!-- 引导程序，字体，主题界面-->
</head>

<body>
<?php
	/**
	 * 显示库存预测
	 */
include_once('mysql_connect.php');               //连接数据库
require 'json.php';
  /**
   * 
   */
   
	 $n = 0;
$result = mysql_query("select * from screen_order where type='教室风扇'");
	 $n = 0;
  while ($row = mysql_fetch_array($result)) {
  	$n=$n+1;
 }
  	//echo '教室风扇',$n;
		 $a = 0;
$result = mysql_query("select * from screen_order where type='宿舍水管'");
   while ($row = mysql_fetch_array($result)) {
  	$a=$a+1;
 }
  	//echo '宿舍水管',$a;
  $b = 0;
$result = mysql_query("select * from screen_order where type='教学楼水管'");
   while ($row = mysql_fetch_array($result)) {
  	$b=$b+1;
 }
  	//echo '宿舍水管',$b;
	
 $result = mysql_query("select * from screen_order where type='教室多媒体'");
	 $c = 0;
  while ($row = mysql_fetch_array($result)) {
  	$c=$c+1;
 }
  	//echo '教室多媒体',$c;
 $d = 0;
$result = mysql_query("select * from screen_order where type='机房电脑'");
   while ($row = mysql_fetch_array($result)) {
  	$d=$d+1;
 }
  	//echo '机房电脑',$d;
 $e = 0;
$result = mysql_query("select * from screen_order where type='网络'");
   while ($row = mysql_fetch_array($result)) {
  	$e=$e+1;
 }
  	//echo '网络',$e;
	 $f = 0;
$result = mysql_query("select * from screen_order where type='教室玻璃'");
   while ($row = mysql_fetch_array($result)) {
  	$f=$f+1;
 }
  	//echo '教室玻璃',$f;
		 $g = 0;
$result = mysql_query("select * from screen_order where type='办公室设备'");
   while ($row = mysql_fetch_array($result)) {
  	$g=$g+1;
 }
  	//echo '办公室设备',$g;
	$h=0;
	$result = mysql_query("select * from screen_order where type='办公室玻璃'");
   while ($row = mysql_fetch_array($result)) {
  	$h=$h+1;
 }
  	//echo '办公室玻璃',$h;
	
		$j=0;
	$result = mysql_query("select * from screen_order where type='宿舍门窗'");
   while ($row = mysql_fetch_array($result)) {
  	$j=$j+1;
 }
  	//echo '宿舍门窗',$j;
	$k=0;
	$result = mysql_query("select * from screen_order where type='教室门窗'");
   while ($row = mysql_fetch_array($result)) {
  	$k=$k+1;
 }
  	//echo '教室门窗',$k;	
	$l=0;
	$result = mysql_query("select * from screen_order where type='宿舍基础设施'");
   while ($row = mysql_fetch_array($result)) {
  	$l=$l+1;
 }
  	//echo '宿舍基础设施',$l;
	$m=0;
	$result = mysql_query("select * from screen_order where type='教学楼厕所'");
   while ($row = mysql_fetch_array($result)) {
  	$m=$m+1;
 }
  	//echo '教学楼厕所',$m;
		$o=0;
	$result = mysql_query("select * from screen_order where type='宿舍楼厕所'");
   while ($row = mysql_fetch_array($result)) {
  	$o=$o+1;
 }
  	//echo '宿舍楼厕所',$o;
		$p=0;
	$result = mysql_query("select * from screen_order where type='体育馆设施'");
   while ($row = mysql_fetch_array($result)) {
  	$p=$p+1;
 }
  	//echo '体育馆设施',$p;
			$q=0;
	$result = mysql_query("select * from screen_order where type='校园路面基础设施'");
   while ($row = mysql_fetch_array($result)) {
  	$q=$q+1;
 }
  	//echo '校园路面基础设施',$q;
				$r=0;
	$result = mysql_query("select * from screen_order where type='教学楼灯设备'");
   while ($row = mysql_fetch_array($result)) {
  	$r=$r+1;
 }
  	//echo '教学楼灯设备',$r;
				$s=0;
	$result = mysql_query("select * from screen_order where type='教学楼电问题'");
   while ($row = mysql_fetch_array($result)) {
  	$s=$s+1;
 }
  	//echo '教学楼电问题',$s;
				$t=0;
	$result = mysql_query("select * from screen_order where type='宿舍电问题'");
   while ($row = mysql_fetch_array($result)) {
  	$t=$t+1;
 }
  	//echo '宿舍电问题',$t;
				$x=0;
	$result = mysql_query("select * from screen_order where type='教室电灯'");
   while ($row = mysql_fetch_array($result)) {
  	$x=$x+1;
 }
  	//echo '教室电灯',$x;
					$y=0;
	$result = mysql_query("select * from screen_order where type='教室空调'");
   while ($row = mysql_fetch_array($result)) {
  	$y=$y+1;
 }
  	//echo '教室空调',$y;
						$z=0;
	$result = mysql_query("select * from screen_order where type='教室风扇'");
   while ($row = mysql_fetch_array($result)) {
  	$z=$z+1;
 }
  	//echo '教室风扇', $z;
	$num=array($n,$a,$b,$c,$d);
	$resulot=0;
	for($is=0;$is<2;$is++){
		
		if(ord($num[$is])>=ord($is)){
			$resulot=$num[$is];
		}
	}
	//echo '最高输出量',$resulot;
	
		
	echo "<table class='table'><thead><tr>";
		echo "
		<th>库存类</th>
		<th>维修次数</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>库存类</th>
		<th>维修次数</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>库存类</th>
		<th>维修次数</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>库存类</th>
		<th>维修次数</th>
		";
		echo "<th style=' width='3.5em''></th></tr></thead>";
		echo "<tbody>";
            echo "<tr>
			<td>教室风扇</td>
			<td>".$n."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>宿舍水管</td>
			<td>".$a."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教学楼水管</td>
			<td>".$b."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教室多媒体</td>
			<td>".$c."</td>
	
			";
			echo "</tr>";
			
			echo "<tr>
			<td>机房电脑</td>
			<td>".$d."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>网络</td>
			<td>".$e."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教室玻璃</td>
			<td>".$f."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>办公室设备</td>
			<td>".$g."</td>
			
			";
			echo "</tr>";
			
			echo "<tr>
			<td>办公室玻璃</td>
			<td>".$h."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>宿舍门窗</td>
			<td>".$j."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教室门窗</td>
			<td>".$k."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>宿舍基础设施</td>
			<td>".$l."</td>
			
			";
			echo "</tr>";
			
			echo "<tr>
			<td>教学楼厕所</td>
			<td>".$m."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>宿舍楼厕所</td>
			<td>".$o."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>体育馆设施</td>
			<td>".$p."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>校园路面基础设施</td>
			<td>".$q."</td>
			
			";
			echo "</tr>";
			
			
			echo "<tr>
			<td>教学楼灯设备</td>
			<td>".$r."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教学楼电问题</td>
			<td>".$s."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>宿舍电问题</td>
			<td>".$t."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教室电灯</td>
			<td>".$x."</td>
			
			";
			echo "</tr>";
			
			
			echo "<tr>
			<td>教室空调</td>
			<td>".$y."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>教室风扇</td>
			<td>".$z."</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>最高输出量</td>
			<td>".$resulot."</td>
			";
			echo "</tr>";
			
			
        echo "</tbody></table>";

	
	?>
	 
	