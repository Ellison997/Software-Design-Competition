<?php
/**
 * 发送维修人数分布
 */
include_once('mysql_connect.php');               //连接数据库
 require 'json.php';
 
 
$result = mysql_query("select * from servicer where job='主管'");
$resultes = mysql_query("select * from servicer where job='维修员'");
$n = 0;
$h=0;
 while ($row = mysql_fetch_array($result)) {
 $n=$n+1;
 }
  while ($row = mysql_fetch_array($resultes)) {
 $h=$h+1;
 }
   $c=print_r($n);//主管人数
  $o=print_r($h);//维修人员人数
   
$result = mysql_query("select * from customer where job='老师'");
$resultes = mysql_query("select * from customer where job='学生'");
$n = 0;
$h=0;
 while ($row = mysql_fetch_array($result)) {
 $n=$n+1;
 }
  while ($row = mysql_fetch_array($resultes)) {
 $h=$h+1;
 }
   $c=print_r($n);//老师人数
  $o=print_r($h);//学生人数
  
?>