<?php
	/**
	 * 定期检查   
	 */
	header('content-type:text/html;charset=utf-8'); 
    require'mysql_connect.php';
	require 'json.php';
  /*	$sockername=str_replace(" ","",$_POST['sockername']);
 	$sockerphone=str_replace(" ","",$_POST['sockerphone']);
	$time= $_POST['time'] ;
	$show= $_POST['show'] ;
	$id= $_POST['id'] ;
	$hosty= $_POST['hosty'] ;*/
    $result = mysql_query("select * from checkorder ");  
    
  $n = 0;
  while ($row = mysql_fetch_array($result)) {
	$array[$n++] = array('sockername' => $row['sockername'],'time' => $row['time'],'sockerphone' => $row['sockerphone'],
	'position' => $row['position'],'show' => $row['showdir'],'question' => $row['question'], 'id' => $row['id'],'hosty' => $row['hosty']);

}

echo JSON($array);
/*
if($id!=null){
   
   if($hosty!=null){
   	$sql="update checkorder set sockername='$sockername',sockerphone='$sockerphone',
		time='$time',hosty='$hosty',showdir='$show'
		  where id='$id'";
       $query=mysql_query($sql);
   }else{
		$sql="update checkorder set sockername='$sockername',sockerphone='$sockerphone',
		time='$time',showdir='$show'
		  where id='$id'";
       $query=mysql_query($sql);
   }
	}
 */




	?>