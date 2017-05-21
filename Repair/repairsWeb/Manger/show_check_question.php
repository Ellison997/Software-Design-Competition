<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示定期的问题风险</title>
<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
<script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">

<!-- 引导程序，字体，主题界面-->
</head>

<body>
<?php 
/**
 * 显示定期的问题风险
 */
require'mysql_connect.php';
require 'json.php';
	//header('content-type:text/html;charset=utf-8'); 
 
    $result = mysql_query("select * from checkorder where hosty>=1");  
    
  $n = 0;


echo "<table class='table'><thead><tr>";
		echo "
		<th>维修员</th>
		<th>检查时间</th>
		<th>维修员手机号</th>
		<th>地点</th>
		<th>状态</th>
		<th>问题</th>
		<th>流水号</th>
		<th>次数</th>
		";
		echo "<th style=' width='3.5em''></th></tr></thead>";
		echo "<tbody>";
		
  while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'time' => $row['time'],'sockerphone' => $row['sockerphone'],
	'position' => $row['position'],'show' => $row['showdir'],'question' => $row['question'], 'id' => $row['id'],'hosty' => $row['hosty']);

            echo "<tr>
			<td>".$row['sockername']."</td>
			<td>".$row['time']."</td>
			<td>".$row['sockerphone']."</td>
			<td>".$row['position']."</td>
			<td>".$row['showdir']."</td>
			<td>".$row['question']."</td>
			<td>".$row['id']."</td>
			<td>".$row['hosty']."</td>"
			;


            echo "</tr>";
        }
        echo "</tbody></table>";


//echo JSON($array);

?>
</body>
</html>