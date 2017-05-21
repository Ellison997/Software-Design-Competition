<?php
	
	$con=mysql_connect("localhost","root","root");
	mysql_query("SET NAME 'utf-8'");
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET CHARACTER_SET_RESULT=utf8");
	if(!$con){
		die(mysql_error());
	}
	mysql_select_db("repair",$con);
	

?>