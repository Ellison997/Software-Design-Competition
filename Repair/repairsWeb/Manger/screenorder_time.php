<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>现场单的时间段事故分析</title>
<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
<script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">

<!-- 引导程序，字体，主题界面-->
</head>

<body>
<?php
	/**
	 * 现场单的时间段事故分析
	 */
	 
require'mysql_connect.php';
	require 'json.php';
$result = mysql_query("select * from screen_order where time like('%03:%')||time like('%04:%')");
$n = 0;
 	while ($row = mysql_fetch_array($result)) {
 $n=$n+1;
}
	//echo '3-4',$n," ";
$result = mysql_query("select * from screen_order where time like('%01:%')||time like('%02:%')");
$a = 0;
 	while ($row = mysql_fetch_array($result)) {
 $a=$a+1;
}
	//echo '1-2小时 ',$a," ";
	$result = mysql_query("select * from screen_order where time like('%05:%')||time like('%06:%')");
$b = 0;
 	while ($row = mysql_fetch_array($result)) {
 $b=$b+1;
}
	//echo '5-6小时 ',$b," ";
	$result = mysql_query("select * from screen_order where time like('%07:%')||time like('%08:%')");
	$c = 0;
 	while ($row = mysql_fetch_array($result)) {
 $c=$c+1;
}
	//echo '7-8小时 ',$c," ";
			$result = mysql_query("select * from screen_order where time like('%09:%')||time like('%10:%')");
	$d = 0;
 	while ($row = mysql_fetch_array($result)) {
 $d=$d+1;
}
	//echo '9-10小时 ',$d," ";
	$result = mysql_query("select * from screen_order where time like('%11:%')||time like('%12:%')");
	$e = 0;
 	while ($row = mysql_fetch_array($result)) {
 $e=$e+1;
}
	//echo '11-12小时 ',$e," ";
		$result = mysql_query("select * from screen_order where time like('%13:%')||time like('%14:%')");
	$f = 0;
 	while ($row = mysql_fetch_array($result)) {
 $f=$f+1;
}
	//echo '13-14小时 ',$f," ";
			$result = mysql_query("select * from screen_order where time like('%15:%')||time like('%16:%')");
	$g = 0;
 	while ($row = mysql_fetch_array($result)) {
 $g=$g+1;
}
	//echo '15-16小时 ',$g," ";
			$result = mysql_query("select * from screen_order where time like('%17:%')||time like('%18:%')");
	$h = 0;
 	while ($row = mysql_fetch_array($result)) {
 $h=$h+1;
}
	//echo '17-18小时 ',$h," ";
				$result = mysql_query("select * from screen_order where time like('%19:%')||time like('%20:%')");
	$j = 0;
 	while ($row = mysql_fetch_array($result)) {
 $j=$j+1;
}
	//echo '19-20小时 ',$j," ";
					$result = mysql_query("select * from screen_order where time like('%21:%')||time like('%22:%')");
	$k = 0;
 	while ($row = mysql_fetch_array($result)) {
 $k=$k+1;
}
	//echo '21-22小时 ',$k," ";
						$result = mysql_query("select * from screen_order where time like('%23:%')||time like('%24:%')");
	$l = 0;
 	while ($row = mysql_fetch_array($result)) {
 $l=$l+1;
}
	//echo '23-24小时 ',$l," ";

echo "<table class='table'><thead><tr>";
		echo "
		<th>时间</th>
		<th>1~2小时</th>
		<th>3~4小时</th>
		<th>5~6小时</th>
		<th>7~8小时</th>
		<th>9~10小时</th>
		<th>11~12小时</th>
		<th>13~14小时</th>
		<th>15~16小时</th>
		<th>17~18小时</th>
		<th>19~20小时</th>
		<th>11~22小时</th>
		<th>23~24小时</th>
		";
		echo "<th style=' width='3.5em''></th></tr></thead>";
		echo "<tbody>";
            echo "<tr>
			<td>事故次数</td>
			<td>".$a."</td>
			<td>".$n."</td>
			<td>".$b."</td>
			<td>".$c."</td>
			<td>".$d."</td>
			<td>".$e."</td>
			<td>".$f."</td>
			<td>".$g."</td>
			<td>".$h."</td>
			<td>".$j."</td>
			<td>".$k."</td>
			<td>".$l."</td>";
			echo "</tr>";
        echo "</tbody></table>";
							
	?>
	</body>
    </html>