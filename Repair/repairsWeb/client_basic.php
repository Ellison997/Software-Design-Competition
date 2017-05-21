<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>客户端基本信息</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico">
<link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css?v=4.1.0" rel="stylesheet">

<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
<style type="text/css">
#cent {
	width: 95%;
	height: 800px;
	position: absolute;
	left: 35px;
	top: 185px;
}
</style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="col-sm-8">
    <div class="ibox">
      <div class="ibox-content">
        <h2>用户管理</h2>
        <p> 请输入要搜索的用户姓名 </p>
        <form action="client_basicV2.php" method="post">
          <div class="input-group">
            <input type="text" name="lod" class="input form-control" size="100" placeholder="查找用户">
            <span class="input-group-btn">
            <button type="submit" class="btn btn btn-primary"> <i class="fa fa-search"></i> 搜索</button>
            </span> </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="cent">
  <div class="btn-toolbar list-toolbar"> <button class="btn btn-primary" onclick="javascript:window.location.href='expand/user_add.php';"
      <i class="fa fa-plus"></i> 添加学生
    </button>
    <div class="btn-group"> </div>
  </div>
  <br/>
  <div class="row">
    <?php
	//在表格中显示表的数据
    function ShowTable(){
       	include "tool/conn.php";
	 $sql="select * from customer";				//在这里添加、更换数据表
        $res=mysql_query($sql,$conn);
        $rows=mysql_affected_rows($conn);//获取行数
		//$colums=mysql_num_fields($res);//获取列数
		
		$pagesize=9;  //设计每个页要显示的记录
	      $totalpages;
		  if($rows%$pagesize==0)
		   {  
		    $totalpages=(int)($rows/$pagesize); 	//正好几页
			}
			else { 
			  $totalpages=(int)($rows/$pagesize)+1;		//多一页
			   }  //看用户是选择了哪个
			    if(isset($_GET['page']))
			    {  
				 $p=(int)$_GET['page']; 
				 } else 
				 {  $p=1; }  //计算出起始记
				 //计算记录偏移量
				  $start=$pagesize*($p-1); 
				  $queryj=mysql_query("$sql limit $start,$pagesize"); 
				  
				  $serial=1;
		//for($serial=1;$serial<=$pagesize;$serial++){
			//	}
        while($row=mysql_fetch_array($queryj)){  
        echo "
            <div class='col-sm-4'>
                <div class='contact-box'>
                    <a href='profile.html'>
                        <div class='col-sm-4'>
                            <div class='text-center'>                            
                                <img alt='image' class='img-circle m-t-xs img-responsive' src='".$row['picture']."'>
                             <div class='m-t-xs font-bold'>".$row['phone']."
							 </div>
                            </div>
                        </div>
                        <div class='col-sm-8'>
                            <h3><strong>".$row['name']."</strong></h3>
                            <p><i class='fa fa-map-marker'></i>".$row['school']."</p>
                            <address>
                            <strong>职位：".$row['job']."</strong><br>
                            状态：".$row['state']."
                            <br>
                            信用等级：".$row['prestige']."<br>
                            <abbr >联系电话:</abbr>".$row['phone']."
							<br />";
							$id=$row[0];					//php mysql 编辑一条信息 源码
							echo "<a href='expand/user_update.php?id=$id'><i class='fa fa-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='expand/script/user_delete.php?id=$id' role='button' data-toggle='modal'><i class='fa fa-trash-o'></i></a>";
                        echo "</address>
						                     
                        </div>
                        <div class='clearfix'></div>
                    </a>
                </div>
            </div>";			
	
		}
		 echo "</div>";
				//分页按钮
		echo "<ul class='pagination'>";
		if($totalpages>1){
		for($x=1;$x<= $totalpages;$x++){
				echo "<li><a href='?page=$x'>$x</a></li>";	
					}
		echo "<li><a href='?page=$x'>第 $p 页</a></li>";
		echo "</ul>";
		}
	}
                            ShowTable();

 
?>
</div>


<!-- 
	<div id="cent">
		<div class="row J_mainContent" id="content-main">
			<iframe id="J_iframe" width="100%" height="100%" src="clients.html"
				frameborder="0" data-id="www.baidu.com" seamless></iframe>
		</div>

	</div>
	 --> 
<!--
           

--> 

 <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>
	    <script>
        $(document).ready(function () {
            $('.contact-box').each(function () {
                animationHover(this, 'pulse');
            });
        });
    </script>

</body>
</html>