<?php 
/**
 * 评价 发送
 */
	header('content-type:text/html;charset=utf-8'); 
require'mysql_connect.php';
	require 'json.php';
	$sockername=str_replace(" ","",$_POST['sockername']);
 	$userphone=str_replace(" ","",$_POST['userphone']);
 	$appraise= $_POST['appraise'] ;
	$id =$_POST['id'] ;
$result = mysql_query("select * from screen_order where  static='已解决'||static='未解决'  ");
$n = 0;
   
while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'userphone' => $row['userphone'],'starttime' => $row['time'],
	'appraise' => $row['appraise'],'sockerphone' => $row['sockerphone'],'state' => $row['static'],
	'endtime' => $row['completetime'],'id' => $row['id']);

}
echo JSON($array);
if($userphone !=null){
$sql="update screen_order set appraise='$appraise'
		  where id='$id'";
	$result=mysql_query($sql);
	echo "success";
}
?>