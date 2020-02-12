<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>鲁班人－全国首创的土木工程业务一站式交易平台</title>
	<meta name="Keywords" content="" /> 
    <meta name="Description" content="" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/good.css" />



	</head>
	<body>
 <?php include("head.php");?>  
	   
  <div class="good-top">
	  
	   	<ul> 
          <li><input type="text" class="text" value="广东省" onclick="beginSelect(this);" /><span class="btn" onmousedown="beginSelect(this)"></span></li> 
              <li class="select"> 
              <p>北京市</p> 
              <p>重庆市</p> 
              <p>上海市</p> 
              <p>广东省</p> 
              </li> 
        </ul>
	    <div class="p_select"></div>
	    <ul class="ul"> 
          <li><input type="text" class="text" value="广州市" onclick="beginSelect(this);" /><span class="btn" onmousedown="beginSelect(this)"></span></li> 
              <li class="select"> 
              <p>广州市</p> 
              <p>深圳市</p> 
              </li> 
        </ul>
        <div class="p_select"></div>
	    <ul class="ul"> 
          <li><input type="text" class="text" value="广东省" onclick="beginSelect(this);" /><span class="btn" onmousedown="beginSelect(this)"></span></li> 
              <li class="select"> 
              <p>北京市</p> 
              <p>重庆市</p> 
              <p>上海市</p> 
              <p>广东省</p> 
              </li> 
        </ul>
 </div>
	   
	   
 <?php include("foot.php");?>  
	</body>

<script type="text/javascript">
function beginSelect(elem){ 
if(elem.className == "btn"){ 
elem.className = "btn btnhover" 
elem.onmouseup = function(){ 
this.className = "btn" 
} 
} 
var ul = elem.parentNode.parentNode; 
var li = ul.getElementsByTagName("li"); 
var selectArea = li[li.length-1]; 
if(selectArea.style.display == "block"){ 
selectArea.style.display = "none"; 
} 
else{ 
selectArea.style.display = "block"; 
mouseoverBg(selectArea); 
} 
} 
function mouseoverBg(elem1){ 
var input = elem1.parentNode.getElementsByTagName("input")[0]; 
var p = elem1.getElementsByTagName("p"); 
var pLength = p.length; 
for(var i = 0; i < pLength; i++){ 
p[i].onmouseover = showBg; 
p[i].onmouseout = showBg; 
p[i].onclick = postText; 
} 
function showBg(){ 
this.className == "hover"?this.className = " ":this.className = "hover"; 
} 
function postText(){ 
var selected = this.innerHTML; 
input.setAttribute("value",selected); 
elem1.style.display = "none"; 
} 
} 
</script> 
	
</html>
