<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户端基本信息</title>
<link rel="stylesheet" href="../lib/reserve/bootstrap.css">
<link rel="stylesheet" href="../lib/reserve/theme.css">
</head>

<body id="body" class="body">
<ul class="breadcrumb">
  <li><a href="../frame.php"> 系统管理 </a> <span class="divider">/</span></li>
  <li><a href="../client_basic.php"> 客户端用户信息 </a> <span class="divider">/</span></li>
  <li class="active">修改用户信息</li>
</ul>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="bb-alert alert alert-info" style="display: none;"> <span>操作成功</span> </div>
    <!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
    
    <div class="well">
      <ul class="nav nav-tabs">
        <li class="active"><a href="http://www.baidu.com" data-toggle="tab">请填写要修改的账号资料</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
          <?php
	include("../tool/conn.php");	
	$id=$_GET['id'];															//包含conn.php文件
	$select=mysql_query("select * from customer where id={$id}");		//定义查询语句
	$row=mysql_fetch_array($select);												//循环输出查询内容
	

     echo " <form id='tab' method='post' action='script/user_updates.php?id=$id' autocomplete='off'>"
?>
          <label>用户名</label>
          <input type="text" name="user_name" value="<?php echo $row['name'];?>" class="input-xlarge" autofocus="true" required="true" >
          <label>密码</label>
          <input type="password" name="user_password" value="<?php echo $row['password'];?>" class="input-xlarge" required="true" >
          <label>手机号</label>
          <input type="text" name="user_phone" value="<?php echo $row['phone'];?>" class="input-xlarge" required pattern="\d{11}">
          <label>学校</label>
          <input type="text" name="user_school" value="<?php echo $row['school'];?>" class="input-xlarge" autofocus="true" required="true" >
          <label>职务</label>
          <input type="text" name="user_job" value="<?php echo $row['job'];?>" class="input-xlarge" autofocus="true" required="true" >
          <label>信用等级</label>
          <input type="text" name="user_prestige" value="<?php echo $row['prestige'];?>" class="input-xlarge" autofocus="true" required="true" >
          <div class="btn-toolbar">
            <button type="submit" class="btn btn-primary"><strong>修改</strong></button>
            <div class="btn-group"></div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
