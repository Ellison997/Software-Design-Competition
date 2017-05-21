<?php
	require'mysql_connect.php';
	require 'json.php';
$result = mysql_query("select * from urgenyorder where time like('%03:%')||time like('%04:%')");
$n = 0;
 	while ($row = mysql_fetch_array($result)) {
 $n=$n+1;
}
	//echo '3-4',$n," ";
$result = mysql_query("select * from urgenyorder where time like('% 01:%')||time like('% 02:%')");
$a = 0;
 	while ($row = mysql_fetch_array($result)) {
 $a=$a+1;
}
	//echo '1-2小时 ',$a," ";
	$result = mysql_query("select * from urgenyorder where time like('% 05:%')||time like('% 06:%')");
$b = 0;
 	while ($row = mysql_fetch_array($result)) {
 $b=$b+1;
}
	//echo '5-6小时 ',$b," ";
	$result = mysql_query("select * from urgenyorder where time like('% 07:%')||time like('% 08:%')");
	$c = 0;
 	while ($row = mysql_fetch_array($result)) {
 $c=$c+1;
}
	//echo '7-8小时 ',$c," ";
			$result = mysql_query("select * from urgenyorder where time like('% 09:%')||time like('% 10:%')");
	$d = 0;
 	while ($row = mysql_fetch_array($result)) {
 $d=$d+1;
}
	//echo '9-10小时 ',$d," ";
	$result = mysql_query("select * from urgenyorder where time like('% 11:%')||time like('% 12:%')");
	$e = 0;
 	while ($row = mysql_fetch_array($result)) {
 $e=$e+1;
}
	//echo '11-12小时 ',$e," ";
		$result = mysql_query("select * from urgenyorder where time like('% 13:%')||time like('% 14:%')");
	$f = 0;
 	while ($row = mysql_fetch_array($result)) {
 $f=$f+1;
}
	//echo '13-14小时 ',$f," ";
			$result = mysql_query("select * from urgenyorder where time like('% 15:%')||time like('% 16:%')");
	$g = 0;
 	while ($row = mysql_fetch_array($result)) {
 $g=$g+1;
}
	//echo '15-16小时 ',$g," ";
			$result = mysql_query("select * from urgenyorder where time like('% 17:%')||time like('% 18:%')");
	$h = 0;
 	while ($row = mysql_fetch_array($result)) {
 $h=$h+1;
}
	//echo '17-18小时 ',$h," ";
				$result = mysql_query("select * from urgenyorder where time like('% 19:%')||time like('% 20:%')");
	$j = 0;
 	while ($row = mysql_fetch_array($result)) {
 $j=$j+1;
}
	//echo '19-20小时 ',$j," ";
					$result = mysql_query("select * from urgenyorder where time like('% 21:%')||time like('% 22:%')");
	$k = 0;
 	while ($row = mysql_fetch_array($result)) {
 $k=$k+1;
}
	//echo '21-22小时 ',$k," ";
						$result = mysql_query("select * from urgenyorder where time like('% 23:%')||time like('% 24:%')");
	$l = 0;
 	while ($row = mysql_fetch_array($result)) {
 $l=$l+1;
}
	//echo '23-24小时 ',$l," ";
	ob_clean();
	header("Content-Type:image/png");  
    $width = 700;			//定义画布宽度
    $height= 260;   		       //定义画布高度
    $right = 20;			//定义坐标系距画布右侧距离
    $left  = 20;			//定义坐标系距画布左侧距离
    $top   = 70;			//定义坐标系距画布上侧距离
    $buttom= 20;			//定义坐标系距画布下侧距离
    $up=79;                             //上基准线的值
    $down=3;                           //下基准线的值
    $target=20;                         //标准线的值
    $x = array();			//定义x坐标空数组
    $y = array();			//定义y坐标空数组
    $sum=$a+$b+$n+$c+$d+$e+$f+$g+$h+$j+$k+$l;
   $data = array($a,$n,$b,$c,$d,$e,$f,$g,$h,$j,$k,$l,$sum);			//定义所绘制数据数组
    $num=array($n,$a,$b,$c,$d);
	$resulot=0;
	for($is=0;$is<2;$is++){
		
		if(ord($num[$is])>=ord($is)){
			$resulot=$data[$is];
		}
	}
 
   $name = array('2:00','4:00','6:00','8:00','10:00','12:00','14:00','16:00','18:00','20:00','22:00','24:00','sum');		//定义横坐标的坐标标签

    foreach($data as $k=>$v){                                       //获取$data中最大值
   if( $k== 0  && $v !='' ){
      $min = $v;
      $max = $v;
   }elseif( $v !='' )  {
      $min = min($min,$v);
      $max = max($max,$v);
   }
   if($v == ''){
   $kong = $k;
   }
}

    $image = imagecreatetruecolor($width, $height);       //---------------------//
    $white = imagecolorallocate($image, 255, 255, 255);    //定义真彩画布及颜色值//
    $black = imagecolorallocate($image, 10, 10, 10);
    $blue  = imagecolorallocate($image, 0, 0, 255);
    $red  =	 imagecolorallocate($image, 255, 0, 0); 	//---------------------//
    $yellow  =	 imagecolorallocate($image, 255, 170, 0);
    $green=  imagecolorallocate($image, 79, 144, 30);
    imagefill($image, 0, 0, $white);					    //用白色填充画布

     //画横坐标
    imageline($image, $left,$height-$buttom, $width-$right, $height-$buttom, $black);


      //画纵坐标
    imageline($image, $left, $top , $left, $height-$buttom, $black);

      //画箭头
    imageline($image,$width-$right, $height-$buttom, ($width-$right)-8,$height-$buttom-3,  $black);
    imageline($image,$width-$right, $height-$buttom, ($width-$right)-8,$height-$buttom+3,  $black);

    imageline($image, $left-3, $top+5, $left, $top, $black);
    imageline($image, $left, $top, $left+3, $top+5, $black);

//计算$data数组中每个元素的坐标
       $unit  =($width-$left-$right)/count($data);  //定义x轴刻度间隔
    for ($i = 0;$i < count($data);$i++){
    	$x[$i] = $left+$i*$unit;

		$y[$i] = $top+round($height-$top-$buttom)*(1-$data[$i]/$max);
    }

//画出横坐标
    for ($i = 0;$i<count($data);$i++){

    	imageline($image, $left+$i*$unit, $height-$buttom, $left+$i*$unit, $height-$buttom-8, $black);
    	imagestring($image, 10, $left+$i*$unit, $height-$buttom, $name[$i], $black);
    }
   //画出纵坐标



    for($i = 0;$i<count($data);$i++){
    	imageline($image, $left, $top+($height-$top-$buttom)*$i/count($data), $left+5, $top+($height-$top-$buttom)*$i/count($data), $black);
    	imagestring($image, 10, $left/4, $top+($height-$top-$buttom)*$i/count($data), round($max*(count($data)-$i)/(count($data))), $black);
    }

   //绘制数据折线图

   for ($i=0;$i<count($data);$i++){
    	if ($i+1!=count($data)){
        imageline($image, $x[$i], $y[$i], $x[$i+1], $y[$i+1], $blue);  //画线条
   		if ($data[$i]>$up||$data[$i]<$down){

    	imagefilledarc($image, $x[$i], $y[$i], 5, 5, 0, 360, $red, IMG_ARC_PIE);//画点
    }
    else{
    	imagefilledarc($image, $x[$i], $y[$i], 5, 5, 0, 360, $blue, IMG_ARC_PIE);//画点

    }

    	}
if ($data[$i]>$up||$data[$i]<$down){

    	imagefilledarc($image, $x[count($data)-1],$y[count($data)-1], 5, 5, 0, 360, $red,IMG_ARC_PIE);//画点
    }
    else{
    	imagefilledarc($image, $x[count($data)-1],$y[count($data)-1], 5, 5, 0, 360, $blue,IMG_ARC_PIE);//画点

    }
   }



    	//绘制折点标签值
    	 for ($i=0;$i<count($data);$i++){
    		if ($data[$i]>$up||$data[$i]<$down){

    	imagestring($image, 10, $x[$i]+5, $y[$i]+5, $data[$i], $red);
    }
    else{
    	imagestring($image, 10, $x[$i]+5, $y[$i]+5, $data[$i], $blue);

    }
}
//画上基准线的值


    $upl=$top+round($height-$top-$buttom)*(1-$up/$max);
    imageline($image, $left,$upl, $width-$right, $upl, $yellow );
    imagestring($image, 5, $width-$right-57,$upl+2, "attention="."$up", $yellow );

//画下基准线的值

     $downl=$top+round($height-$top-$buttom)*(1-$down/$max);
     imageline($image, $left,$downl, $width-$right, $downl,$yellow );
     imagestring($image, 5, $width-$right-57,$downl+2, "danger="."$down", $yellow );

//画标准线的值

     $targetl=$top+round($height-$top-$buttom)*(1-$target/$max);
     imageline($image, $left,$targetl, $width-$right, $targetl, $green );
     imagestring($image, 5, $width-$right-57,$targetl+2, "tall="."$target",  $green);


     //输出图形
    imagepng($image);

   //销毁图形资源
    imagedestroy($image);
    echo '13-14小时 ';

?>