<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示现场单维修速度</title>
<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
<script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">

<!-- 引导程序，字体，主题界面-->
</head>

<body>
<?php
	/**
	 * 显示现场单维修速度
	 */
 
include_once('mysql_connect.php');   
include_once('json.php');              //连接数据库
 
$result = mysql_query("select * from screen_order where  static='已解决'");
	 $n=0;
	
echo "<table class='table'><thead><tr>";
		echo "
		<th>状态</th>
		<th>客户名</th>
		<th>客户手机号</th>
		<th>完成时间</th>
		<th>接单时间</th>
		<th>维修时长(小时)</th>
		
		";
		echo "<th style=' width='3.5em''></th></tr></thead>";
		echo "<tbody>";
while ($row = mysql_fetch_array($result)) {
	
	$array[$n++] = array('static' => $row['static'],'sockername' => $row['sockername'],'userphone' => $row['userphone'],'completetime' => $row['completetime'],'racetime' => $row['racetime'],'asd'=>ceil(ceil(strtotime($row['completetime'])-strtotime($row['racetime']))/60));
 //最后显示的是一共花多少小时
 
            echo "<tr>
			<td>".$row['static']."</td>
			<td>".$row['sockername']."</td>
			<td>".$row['userphone']."</td>
			<td>".$row['completetime']."</td>
			<td>".$row['racetime']."</td>
			<td>".ceil(ceil(strtotime($row['completetime'])-strtotime($row['racetime']))/60/60)."</td>"
			;

   echo "</tr>";
        }
        echo "</tbody></table>";
 
//echo JSON($array);

?>
</body>
</html>
