<?php
include("../../tool/conn.php");						//包含conn.php文件
$id=$_GET['id'];
if(isset($_GET['id'])){								//判断id是否存在
$delete=mysql_query("delete from screen_order where id='".$_GET['id']."'",$conn);
	if($delete){
		echo "<script>alert('删除成功！');window.location.href='../../client_assess.php'</script>";	
	}else{
		echo "<script>alert('删除失败！');window.location.href='../../client_assess.php'</script>";
	}
}
?>
