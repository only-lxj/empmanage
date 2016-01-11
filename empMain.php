<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>empMain</title>
<style>
body{
	margin:0;
	padding:0 150px;
	font-size:16px;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	background:#505658;
	color:#fff;
}
#main{
	position:relative;
}
#logo{
	position:absolute;
	left:50px;
	top:20px;
}
#hexagon {
	width: 80px; 
	height: 45px; 
	background: #b8c4cb;
	position: relative;
	text-align:center;
	color:white;
	font-size:18px;
	line-height:45px;
} 
#hexagon:before { 
	content: ""; 
	position: absolute; 
	top: -20px; 
	left: 0; 
	width: 0; 
	height: 0; 
	border-left: 40px solid transparent; 
	border-right: 40px solid transparent; 
	border-bottom: 20px solid #b8c4cb; 
} 
#hexagon:after { 
	content: ""; 
	position: absolute; 
	bottom: -20px; 
	left: 0; 
	width: 0; 
	height: 0; 
	border-left: 40px solid transparent; 
	border-right: 40px solid transparent; 
	border-top: 20px solid #b8c4cb; 
}
#info{
	position:absolute;
	top:50px;
	left:160px;
}
#system{
	position:absolute;
	top:350px;
	left:30px;
}
#system a{
	font-size:36px;
	text-decoration:none;
	color:#000;
	line-height:100px;
	color:#FFF;
}
#system a:hover{
	color:#000;
}
#system li{
	float:left;
	list-style:none;
	margin-left:130px;
	text-align:center;
	border-radius:20px;
	-moz-border-radius:20px;
	-webkit-border-radius:20px;
	background:#00a789;
}
#system div{
	width:200px;
	height:100px;
}
#info{
	color:#fff;
}
#back{
	position:absolute;
	top:50px;
	right:50px;
}
#back a{
	color:#fff;
	text-decoration:none;
}
#manageA{
	cursor:pointer;
}
#addA{
	cursor:pointer;
}
#searchA{
	cursor:pointer;
}
</style>

</head>

<body>

<div id="main">
    <div id="logo"> 
        <div id="hexagon">
            <p>LOGO</p>
        </div>
	</div>
    
    <div id="info">
    	<?php
    
		echo "欢迎您,&nbsp; ".$_GET['name']." ！";
		
		?>
    </div>  
    <div id="back">
    	<a href='login.php'>退出登录</a>
    </div>
    <div id="system">
    	<ul>
            <li><a id="manageA" onClick="a1();"><div>管理员工</div></a></li>
            <li><a id="addA" onClick="a2();"><div>添加员工</div></a></li>
            <li><a id="searchA" onClick="a3();"><div>查询员工</div></a></li>
        </ul>
    </div>
</div>



<script type="text/javascript">

function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]); return null;
}

var manageA=document.getElementById("manageA");
function a1()
{
	window.location.href="empManage.php?name=" + getQueryString("name");
}

var addA=document.getElementById("addA");
function a2()
{
	window.location.href="empAdd.php?name=" + getQueryString("name");
}

var searchA=document.getElementById("searchA");
function a3()
{
	window.location.href="empSearch.php?name=" + getQueryString("name");
}


</script>

</body>
</html>
