<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>现场巡逻</title>
        <style type="text/css">
		
*{ margin:0px; padding:0px;} 
body{ font-size:24px; font:Arial, Helvetica, sans-serif; margin:25PX 0PX; background:#eee;} 
.botton{ color:#F00; cursor:pointer;} 
.mybody{width:600px; margin:0 auto; height:1500px; border:1px solid #ccc; padding:20px 25px; background:#fff} 
#cwxBg{ position:absolute; display:none; background:#000; width:100%; height:100%; left:0px; top:0px; z-index:1000;} 
#cwxWd{ position:absolute; display:none; border:10px solid #CCC; padding:10px;background:#FFF; z-index:1500;} 
#cwxCn{ background:#FFF; display:block;} 
.imgd{ width:400px; height:300px;}  

		
		
body {
	background-image:url('images/IMG_201611171.png');
	background-repeat:no-repeat;
}
#Layer1 {
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	width:50px;
	height:50px;
	z-index:10;
	left: -161px;
	top: 142px;
}

#Layer2 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: 78px;
	top: -112px;
}
#Layer3 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: 77px;
	top: 64px;
}

#Layer4 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: 342px;
	top: 64px;
}
#Layer5 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: 342px;
	top: 237px;
}

#Layer6 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: 77px;
	top: 239px;
}
#Layer7 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: -160px;
	top: 237px;
}
#Layer8 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:10;
	left: -161px;
	top: 65px;
}

#Layer9 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:11;
	left: 75px;
	top: 64px;
}

#Layer10 {
	position:absolute;
	margin-left:380px;
	margin-top:300px;
	width:50px;
	height:50px;
	z-index:11;
	left: 78px;
	top: -112px;
}

#Layer11 {
	position:absolute;
	margin-left:380px;
	margin-top:40px;
	width:50px;
	height:50px;
	z-index:11;
	left: -160px;
	top: 143px;
}

        </style>
<script type="text/javascript">
	   var NowImg=1;//表示当前显示的div
           var MaxImg=11;//表示div的个数
            function show(){
                for(var i=1;i<=MaxImg;i++){
                    if(NowImg==i)
                        document.getElementById("Layer"+NowImg).style.display='block';//当前显示的div
                    else{
                        document.getElementById("Layer"+i).style.display='none';
                      }
                      //  alert(i);
                }
		
                    NowImg++;//设置下一个显示的片
					
					
            }
			
// theTimer=setInterval("show()",1000);//设置定时器，显示下一个图片，10000表示每间隔10秒，可以改的
 
  //theTimers=setTimeout("show()",7900);//2
 theTimers=setTimeout("show()",8500); //3
 theTimers=setTimeout("show()",41500);//4
 //theTimers=setTimeout("show()",45900);//5
 theTimers=setTimeout("show()",43500);//6
 theTimers=setTimeout("show()",54500);//7
// theTimers=setTimeout("show()",55900);//8
 theTimers=setTimeout("show()",57500);//9
 theTimers=setTimeout("show()",64500);//10
 theTimers=setTimeout("show()",69500);//11
// theTimers=setTimeout("show()",71900);//12
 theTimers=setTimeout("show()",77500);//13
 theTimers=setTimeout("show()",79500);//14
 theTimers=setTimeout("show()",82500);//15
 


 //theTimers=setTimeout("show()",8000); //3
 //theTimers=setTimeout("show()",38000);//4
 //theTimers=setTimeout("show()",46000);//6
 //theTimers=setTimeout("show()",54000);//7
 //theTimers=setTimeout("show()",56000);//9
 //theTimers=setTimeout("show()",62000);//10
 //theTimers=setTimeout("show()",68000);//11
 //theTimers=setTimeout("show()",72000);//13
 //theTimers=setTimeout("show()",76000);//14
 //theTimers=setTimeout("show()",79000);//15

 
        </script>
     
        </head>

        <body  onload="show()">
<div id="Layer1"><img src="images\red1.png" /></div>
<div id="Layer2"><img src="images\red1.png" /> </div>
<div id="Layer3"><img src="images\red1.png" /> </div>
<div id="Layer4"><img src="images\red1.png" /> </div>
<div id="Layer5"><img src="images\red1.png" /> </div>
<div id="Layer6"><img src="images\red1.png" /> </div>
<div id="Layer7"><img src="images\red1.png" /> </div>
<div id="Layer8"><img src="images\red1.png" /> </div>
<div id="Layer9"><img src="images\red1.png" /> </div>
<div id="Layer10"><img src="images\red1.png" /> </div>
<div id="Layer11"><img src="images\red1.png" /> </div>
        <script type="text/javascript"> 
C$('Layer3').onclick = function(){ 
var neirong = '发现障碍物！'; 
cwxbox.box.show(neirong,3); 
} 
C$('Layer6').onclick = function(){ 
var neirong = '车牌：国A 123F5 '; 
cwxbox.box.show(neirong,3); 
} 
C$('Layer9').onclick = function(){ 
var neirong = '路灯异常！'; 
cwxbox.box.show(neirong,3); 
} 
C$('Layer10').onclick = function(){ 
var neirong = '前方施工，禁止通行！'; 
cwxbox.box.show(neirong,3); 
} 
function C$(id){return document.getElementById(id);} 
//定义窗体对象 
var cwxbox = {}; 

cwxbox.box = function(){ 
var bg,wd,cn,ow,oh,o = true,time = null; 
return { 
show:function(c,t,w,h){ 
if(o){ 
bg = document.createElement('div'); bg.id = 'cwxBg'; 
wd = document.createElement('div'); wd.id = 'cwxWd'; 
cn = document.createElement('div'); cn.id = 'cwxCn'; 
document.body.appendChild(bg); 
document.body.appendChild(wd); 
wd.appendChild(cn); 
bg.onclick = cwxbox.box.hide; 
window.onresize = this.init; 
window.onscroll = this.scrolls; 
o = false; 
} 
if(w && h){ 
var inhtml = '<iframe src="'+ c +'" width="'+ w +'" height="'+ h +'" frameborder="0"></iframe>'; 
}else{ 
var inhtml = c; 
} 
cn.innerHTML = inhtml; 
oh = this.getCss(wd,'offsetHeight'); 
ow = this.getCss(wd,'offsetWidth'); 
this.init(); 
this.alpha(bg,50,1); 
this.drag(wd); 
if(t){ 
time = setTimeout(function(){cwxbox.box.hide()},t*1000); 
} 
}, 
hide:function(){ 
cwxbox.box.alpha(wd,0,-1); 
clearTimeout(time); 
}, 
init:function(){ 
bg.style.height = cwxbox.page.total(1)+'px'; 
bg.style.width = ''; 
bg.style.width = cwxbox.page.total(0)+'px'; 
var h = (cwxbox.page.height() - oh) /2; 
wd.style.top=(h+cwxbox.page.top())+'px'; 
wd.style.left=(cwxbox.page.width() - ow)/2+'px'; 
}, 
scrolls:function(){ 
var h = (cwxbox.page.height() - oh) /2; 
wd.style.top=(h+cwxbox.page.top())+'px'; 
}, 
alpha:function(e,a,d){ 
clearInterval(e.ai); 
if(d==1){ 
e.style.opacity=0; 
e.style.filter='alpha(opacity=0)'; 
e.style.display = 'block'; 
} 
e.ai = setInterval(function(){cwxbox.box.ta(e,a,d)},40); 
}, 
ta:function(e,a,d){ 
var anum = Math.round(e.style.opacity*100); 
if(anum == a){ 
clearInterval(e.ai); 
if(d == -1){ 
e.style.display = 'none'; 
if(e == wd){ 
this.alpha(bg,0,-1); 
} 
}else{ 
if(e == bg){ 
this.alpha(wd,100,1); 
} 
} 
}else{ 
var n = Math.ceil((anum+((a-anum)*.5))); 
n = n == 1 ? 0 : n; 
e.style.opacity=n/100; 
e.style.filter='alpha(opacity='+n+')'; 
} 
}, 
getCss:function(e,n){ 
var e_style = e.currentStyle ? e.currentStyle : window.getComputedStyle(e,null); 
if(e_style.display === 'none'){ 
var clonDom = e.cloneNode(true); 
clonDom.style.cssText = 'position:absolute; display:block; top:-3000px;'; 
document.body.appendChild(clonDom); 
var wh = clonDom[n]; 
clonDom.parentNode.removeChild(clonDom); 
return wh; 
} 
return e[n]; 
}, 
drag:function(e){ 
var startX,startY,mouse; 
mouse = { 
mouseup:function(){ 
if(e.releaseCapture) 
{ 
e.onmousemove=null; 
e.onmouseup=null; 
e.releaseCapture(); 
}else{ 
document.removeEventListener("mousemove",mouse.mousemove,true); 
document.removeEventListener("mouseup",mouse.mouseup,true); 
} 
}, 
mousemove:function(ev){ 
var oEvent = ev||event; 
e.style.left = oEvent.clientX - startX + "px"; 
e.style.top = oEvent.clientY - startY + "px"; 
} 
} 
e.onmousedown = function(ev){ 
var oEvent = ev||event; 
startX = oEvent.clientX - this.offsetLeft; 
startY = oEvent.clientY - this.offsetTop; 
if(e.setCapture) 
{ 
e.onmousemove= mouse.mousemove; 
e.onmouseup= mouse.mouseup; 
e.setCapture(); 
}else{ 
document.addEventListener("mousemove",mouse.mousemove,true); 
document.addEventListener("mouseup",mouse.mouseup,true); 
} 
} 

} 
} 
}() 

cwxbox.page = function(){ 
return{ 
top:function(){return document.documentElement.scrollTop||document.body.scrollTop}, 
width:function(){return self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth}, 
height:function(){return self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight}, 
total:function(d){ 
var b=document.body, e=document.documentElement; 
return d?Math.max(Math.max(b.scrollHeight,e.scrollHeight),Math.max(b.clientHeight,e.clientHeight)): 
Math.max(Math.max(b.scrollWidth,e.scrollWidth),Math.max(b.clientWidth,e.clientWidth)) 
} 
} 
}() 
</script> 

</body>
</body>
</html>


