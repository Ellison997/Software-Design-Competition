<html>
<meta charset="UTF-8" />
<head>
<title>后台控制小车运动</title>
<style type="text/css">
body{
	
	font-size:20px;
	font-weight:bold;
	}

.btn {
	background-image:url(images/control/button.png);
	color:#FFF;
	font-size:18px;
	height:26px;
	width:70px;
	border:none;
}
.btn1 {
	background-image:url(images/control/button.png);
	color:#FFF;
	font-size:14px
	height:26px;
	width:70px;
	border:none;
}
.btn2 {
	background-image:url(images/control/button.png);
	color:#FFF;
	font-size:12px;
	height:26px;
	width:70px;
	border:none;
}
</style>
</head>
<body >
<form action =" control.php" method="post">
  <h1> 智能小车远程控制 </h1>
  <div id="dvCBs">
    <div align="left">
     一号小车：&nbsp
      <input type = "submit" class="btn" value = "前进" name = "car01_1"/>
      <input type = "submit" class="btn" value = "后退" name = "car01_2"/>
      <input type = "submit" class="btn" value = "左转" name = "car01_3"/>
      <input type = "submit" class="btn" value = "右转" name = "car01_4"/>
      <input type = "submit" class="btn"value = "停止" name = "car01_0"/>
      <input type = "submit" class="btn"value = "循迹" name = "car01_5"/>
      <input type = "submit"class="btn" value = "路线" name = "car01_6"/>
      <Br/>
      <Br/>
      二号小车：&nbsp
      <input type = "submit"class="btn" value = "前进" name = "car02_1"/>
      <input type = "submit" class="btn"value = "后退" name = "car02_2"/>
      <input type = "submit"class="btn" value = "左转" name = "car02_3"/>
      <input type = "submit" class="btn"value = "右转" name = "car02_4"/>
      <input type = "submit"class="btn" value = "停止" name = "car02_0"/>
      <input type = "submit" class="btn"value = "循迹" name = "car02_5"/>
      <input type = "submit" class="btn"value = "路线" name = "car02_6"/>
      <Br/>
      <Br/>
      三号小车：&nbsp
      <input type = "submit"class="btn" value = "前进" name = "car03_1"/>
      <input type = "submit" class="btn"value = "后退" name = "car03_2"/>
      <input type = "submit"class="btn" value = "左转" name = "car03_3"/>
      <input type = "submit"class="btn" value = "右转" name = "car03_4"/>
      <input type = "submit"class="btn" value = "停止" name = "car03_0"/>
      <input type = "submit" class="btn"value = "循迹" name = "car03_5"/>
      <input type = "submit" class="btn"value = "路线" name = "car03_6"/>
      <Br/>
      <Br/>
      四号小车：&nbsp
      <input type = "submit"class="btn" value = "前进" name = "car04_1"/>
      <input type = "submit"class="btn" value = "后退" name = "car04_2"/>
      <input type = "submit" class="btn"value = "左转" name = "car04_3"/>
      <input type = "submit"class="btn" value = "右转" name = "car04_4"/>
      <input type = "submit" class="btn"value = "停止" name = "car04_0"/>
      <input type = "submit"class="btn" value = "循迹" name = "car04_5"/>
      <input type = "submit" class="btn"value = "路线" name = "car04_6"/>
      <Br/>
      <Br/>
      五号小车：&nbsp
      <input type = "submit" class="btn"value = "前进" name = "car05_1"/>
      <input type = "submit" class="btn"value = "后退" name = "car05_2"/>
      <input type = "submit" class="btn"value = "左转" name = "car05_3"/>
      <input type = "submit" class="btn"value = "右转" name = "car05_4"/>
      <input type = "submit" class="btn"value = "停止" name = "car05_0"/>
      <input type = "submit" class="btn"value = "循迹" name = "car05_5"/>
      <input type = "submit" class="btn"value = "路线" name = "car05_6"/>
      <!--input type = "checkbox" name = "car[]" value = "'car05'"/-->
      <Br/>
      <Br/>
      六号小车：&nbsp
      <input type = "submit" class="btn"value = "前进" name = "car06_1"/>
      <input type = "submit"class="btn" value = "后退" name = "car06_2"/>
      <input type = "submit" class="btn"value = "左转" name = "car06_3"/>
      <input type = "submit" class="btn"value = "右转" name = "car06_4"/>
      <input type = "submit" class="btn"value = "停止" name = "car06_0"/>
      <input type = "submit" class="btn"value = "循迹" name = "car06_5"/>
      <input type = "submit" class="btn"value = "路线" name = "car06_6"/>

      <Br/>
      <Br/>
       &nbsp&nbsp&nbsp&nbsp
      <input type = "submit"class="btn2" value = "全部前进" name = "car_all_advance"/>
      <input type = "submit" class="btn2"value = "全部后退" name = "car_all_back"/>
      <input type = "submit" class="btn2"value = "全部左转" name = "car_all_left"/>
      <input type = "submit" class="btn2"value = "全部右转" name = "car_all_right"/>
      <input type = "submit"class="btn2" value = "全部停止" name = "car_all_stop"/>
      <input type = "submit"class="btn2" value = "全部循迹" name = "car_all_tracking"/>
      <input type = "submit" class="btn2"value = "全部路线" name = "car_all_path"/>
		<Br/>
      <Br/>
      <input type = "submit" class="btn1"value = "动作一" name = "action_1"/>
      <input type = "submit" class="btn1"value = "动作二" name = "action_2"/>
      <input type = "submit"class="btn1" value = "动作三" name = "action_3"/>
      <input type = "submit" class="btn1"value = "动作四" name = "action_4"/>
      <input type = "submit"class="btn1" value = "动作五" name = "action_5"/>
      &nbsp&nbsp&nbsp <Br/>
      <Br/>
    </div>
  </div>
  <script>
var dv = document.getElementById('dvCBs'), cbs = dv.getElementsByTagName('input');
dv.lick = function (e) {
    e = e || window.event;
    var o = e.target || e.srcElement;
    if (o.type == 'checkbox') {
        var vs = '';
        for (var i = 0; i < cbs.length; i++)
            if (cbs[i].checked) vs += ',' + cbs[i].value;
        document.cookie = 'vs=' + vs.substring(1);//存储选中的checkbook的值
    }
}
var m = /(^| |;)vs=([^;]+)/.exec(document.cookie);
if (m) {//cookie中有值，初始化勾选状态
    var arr = m[2].split(',');
    for(var j=0;j<arr.length;j++){
        for(var i=0;i<cbs.length;i++){
            if (cbs[i].value == arr[j]) { cbs[i].checked = true; break;}
			}
		}
}
</script>
</form>
</body>
</html>
<?php
// mysql_query("SET name 'GB2312'");
//error_reporting(E_ALL &~E_NOTICE &~E_DEPRECATED &~E_WARNING);

$host = '127.0.0.1';
$username = 'root';
$password = '123456';
//$conn = mysql_connect($host,$username,$password);
$conn=mysql_connect("localhost","root","123456") or die("connect error");
mysql_select_db("repair") or die("db error");
mysql_query("set names utf8");
if(isset($_POST['car01_1'])){
    $sql="update control set direction='11' where name='cars'";
	echo $_POST['car01_1'];
    if (mysql_query($sql)) echo '一号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car01_2'])){
    $sql="update control set direction='12' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car01_3'])){
    $sql="update control set direction='13' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car01_4'])){
    $sql="update control set direction='14' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car01_0'])){
    $sql="update control set direction='10' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car01_5'])){
    $sql="update control set direction='15' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car01_6'])){
    $sql="update control set direction='16' where name='cars'";
    if (mysql_query($sql)) echo '一号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car02_1'])){
    $sql="update control set direction='21' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car02_2'])){
    $sql="update control set direction='22' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car02_3'])){
    $sql="update control set direction='23' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car02_4'])){
    $sql="update control set direction='24' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car02_0'])){
    $sql="update control set direction='20' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car02_5'])){
    $sql="update control set direction='25' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car02_6'])){
    $sql="update control set direction='26' where name='cars'";
    if (mysql_query($sql)) echo '二号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();


} else if (isset($_POST['car03_1'])){
    $sql="update control set direction='31' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car03_2'])){
    $sql="update control set direction='32' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car03_3'])){
    $sql="update control set direction='33' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car03_4'])){
    $sql="update control set direction='34' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car03_0'])){
    $sql="update control set direction='30' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car03_5'])){
    $sql="update control set direction='35' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car03_6'])){
    $sql="update control set direction='36' where name='cars'";
    if (mysql_query($sql)) echo '三号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car04_1'])){
    $sql="update control set direction='41' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_2'])){
    $sql="update control set direction='42' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_3'])){
    $sql="update control set direction='43' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_4'])){
    $sql="update control set direction='44' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_0'])){
    $sql="update control set direction='40' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_5'])){
    $sql="update control set direction='45' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car04_6'])){
    $sql="update control set direction='46' where name='cars'";
    if (mysql_query($sql)) echo '四号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car05_1'])){
    $sql="update control set direction='51' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_2'])){
    $sql="update control set direction='52' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_3'])){
    $sql="update control set direction='53' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_4'])){
    $sql="update control set direction='54' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_0'])){
    $sql="update control set direction='50' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_5'])){
    $sql="update control set direction='55' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car05_6'])){
    $sql="update control set direction='56' where name='cars'";
    if (mysql_query($sql)) echo '五号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();

} else if (isset($_POST['car06_1'])){
    $sql="update control set direction='61' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_2'])){
    $sql="update control set direction='62' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_3'])){
    $sql="update control set direction='63' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_4'])){
    $sql="update control set direction='64' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_0'])){
    $sql="update control set direction='60' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功停止';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_5'])){
    $sql="update control set direction='65' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car06_6'])){
    $sql="update control set direction='66' where name='cars'";
    if (mysql_query($sql)) echo '六号小车成功运行路线';
    else echo "控制失败，SQL:".mysql_error();


} else if (isset($_POST['car_all_stop'])){
   // $sql="update control set direction='100' where name='car01'OR name='car02'OR name='car03'OR name='car04'OR name='car05'OR name='car06'";
   $sql="update control set direction='100' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功停止';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car_all_advance'])){
   $sql="update control set direction='101' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功前进';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car_all_back'])){
   $sql="update control set direction='102' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功后退';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car_all_left'])){
   $sql="update control set direction='103' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功左转';
    else echo "控制失败，SQL:".mysql_error();
}else if (isset($_POST['car_all_right'])){
   $sql="update control set direction='104' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功右转';
    else echo "控制失败，SQL:".mysql_error();
}else if (isset($_POST['car_all_tracking'])){
   $sql="update control set direction='105' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功循迹';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['car_all_path'])){
   $sql="update control set direction='106' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功按路线行驶';
    else echo "控制失败，SQL:".mysql_error();
}else if (isset($_POST['action_1'])){
   $sql="update control set direction='71' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功执行动作一';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['action_2'])){
   $sql="update control set direction='72' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功执行动作二';
    else echo "控制失败，SQL:".mysql_error();
}else if (isset($_POST['action_3'])){
   $sql="update control set direction='73' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功执行动作三';
    else echo "控制失败，SQL:".mysql_error();
}else if (isset($_POST['action_4'])){
   $sql="update control set direction='74' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功执行动作四';
    else echo "控制失败，SQL:".mysql_error();
} else if (isset($_POST['action_5'])){
   $sql="update control set direction='75' where name='cars'";
    if (mysql_query($sql)) echo '选中小车成功执行动作五';
    else echo "控制失败，SQL:".mysql_error();
} 
mysql_close();

?>
<div>

<!--?

$host = 'localhost';
$username = 'root';
$password = 123456;

$conn = mysql_connect($host,$username,$password);

//选择一个数据库
mysql_select_db("repair");
$table_name2="control";
 $mysql_command="select * from ".$table_name2;
   $result=mysql_query($mysql_command) or die ("数据表：$table_name 查找记录失败！".mysql_error());
   echo "成功查找数据表：".$table_name2."的记录。"; 
   echo "<br>";
   $i=0; 
   while( $record=mysql_fetch_row($result))
   { 
   $i=$i+1;
   echo  "距离 $i ：$record[0]";
   
   echo "<br>";
   }

?-->