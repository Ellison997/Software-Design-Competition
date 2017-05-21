<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加员工</title>
<link rel="stylesheet" href="../lib/reserve/bootstrap.css">
<link rel="stylesheet" href="../lib/reserve/theme.css">
</head>

<body id="body" class="body">
<ul class="breadcrumb">
  <li><a href="../frame.php"> 系统管理 </a> <span class="divider">/</span></li>
  <li><a href="../service_basic.php"> 服务端用户信息 </a> <span class="divider">/</span></li>
  <li class="active">新建员工</li>
</ul>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="bb-alert alert alert-info" style="display: none;"> <span>操作成功</span> </div>
    <!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
    
    <div class="well">
      <ul class="nav nav-tabs">
        <li class="active"><a href="http://www.baidu.com" data-toggle="tab">请填写账号资料</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
          <form id="tab" method="post" action="script/staff_adds.php" autocomplete="off">
            <label>员工姓名</label>
            <input type="text" name="user_name" value="" class="input-xlarge" autofocus="true" required="true" >
            <label>密码</label>
            <input type="password" name="user_password" value="" class="input-xlarge" required="true" >
            <label>手机号</label>
            <input type="text" name="user_phone" value="" class="input-xlarge" required pattern="\d{11}">
            <label>学校</label>
            <input type="text" name="user_school" value="" class="input-xlarge" autofocus="true" required="true" >
            <label>职务</label>
            <input type="text" name="user_job" value="" class="input-xlarge" autofocus="true" required="true" >
            
            <div class="btn-toolbar">
              <button type="submit" class="btn btn-primary"><strong>添加</strong></button>
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
