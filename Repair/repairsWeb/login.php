<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="lib/reserve/bootstrap.css">
<link rel="stylesheet" href="lib/reserve/theme.css">
<title>系统登录-管理后台</title>
<script type="text/javascript">  
        function reImg(){  
            var img = document.getElementById("code");  
            img.src = "tool/code.php?rnd=" + Math.random();  
        }  
    </script>  
<!-- Demo page code -->

<style type="text/css">
#line-chart {
	height:300px;
	width:800px;
	margin: 0px auto;
	margin-top: 1em;
}
.brand {
	font-family: georgia, serif;
	color:#FFF;
}
.brand .first {
	color: #ccc;
	font-style: italic;
}
.brand .second {
	color: #fff;
	font-weight: bold;
}
</style>
</head>

<body  class="simple_body">
<!--<![endif]-->

<div class="navbar">
  <div class="navbar-inner">
    <ul class="nav pull-right">
    </ul>
    <span class="brand"><span class="second">维修管理系统</span></span> </div>
</div>
<div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="dialog">
        <div class="block">
          <p class="block-heading">登录</p>
          <div class="block-body">
            <form id="long" name="long" method="post" action="tool/login_start.php">
              <label>用户名</label>
              <input name="username"  id="username" type="text" class="span12" required="true" autofocus="true" />
              <label>密码</label>
              <input name="userpassword" class="span12" id="userpassword" type="password" required="true" />
              <label>验证码</label>
              <input type="text" name="yzm_code" class="span4" placeholder="输入验证码" id="srand" maxlength="4" autocomplete="off" required="required">
              <img title="验证码" id="code" src="tool/code.php" style="vertical-align:top" onclick="reImg()">
              <div class="clearfix">
                <input type="submit" class="btn btn-primary pull-right" name="loginSubmit" value="登录"/>
              </div>
            </form>
          </div>
        </div>
        <p class="pull-right" style=""><a href="http://osadmin.org" target="blank"></a></p>
      </div>
      <footer>
        <hr>
        <p class="pull-right"><a href="http://www.baidu.com" target="_blank">维修管理系统 </a><a href="http://www.baidu.com" target="_blank">用心为你服务</a></p>
        <p>© 2016 <a href="http://www.baidu.com" target="_blank">小花儿</a></p>
      </footer>
    </div>
  </div>
</div>

</script>
</body>
</html>
