<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
  #blanket {
background-color:#111;
opacity: 0.65;
*background:none;
position:absolute;
z-index: 9001;
top:0px;
left:0px;
width:100%;
}

#popUpDiv {
position:absolute;
background:url(pop-back.jpg) no-repeat;
width:400px;
height:400px;
border:5px solid #000;
z-index: 9002;
} 


  </style>
</head>
<body>
 <div class="hoverWrapper">Show Div 1
 <div id="hoverShow1">1) this is shown only on hover</div>
</div>


<div id="blanket" style="display:none"></div>
<div id="popUpDiv" style="display:none">

<a href="#" onclick="popup('popUpDiv')" >Click to Close CSS Pop Up</a>
</div>
<a href="#" onclick="popup('popUpDiv')">Click to Open CSS Pop Up</a>

<body   onload="popup('popUpDiv')">

</body>
</html>