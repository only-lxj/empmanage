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
#info{
	color:#fff;
}
#back{
	position:absolute;
	top:50px;
	right:160px;
}
#back a{
	color:#fff;
	text-decoration:none;
}
#return{
	position:absolute;
	top:150px;
	left:160px;
}
#return a{
	font-size:24px;
	color:#fff;
	text-decoration:none;
	cursor:pointer;
}
#return a span{
	font-size:36px;
}
#add{
	position:absolute;
	top:200px;
	left:650px;
}
#addForm td{
	font-size:24px;
}
#addForm input{
	line-height:150%;
}
#btn input{
	font-size:18px;
	margin-left:30px;
	margin-top:20px;
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
    <div id="return">
    	<a id="returnA" onClick="back();"><span>&laquo;</span>返回</a>
    </div>
</div>
<div id="add">
	<h1>添加新员工信息</h1>
	<form id="addForm" action="add.php" method="post" target="id_iframe" onsubmit="return CheckForm(this);">
    	<table>
        	<tr>
            	<td>name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
            	<td>grade:</td>
                <td><input type="text" name="garde" /></td>
            </tr>
            <tr>
            	<td>email:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
            	<td>salary:</td>
                <td><input type="text" name="salary" /></td>
            </tr
        ></table>
        <div id="btn">
            <input type="submit" name="submit" value="添加" />
            <input type="reset" value="重置" />
        </div>
	</form> 
    <iframe id="id_iframe" name="id_iframe" style="display:none;"></iframe> 
</div>






<script type="text/javascript">

function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]); return null;
}
var hidden=document.getElementById("hidden");
hidden.value=getQueryString("name");

var returnA=document.getElementById("returnA");
function back()
{
	window.location.href="empMain.php?name=" + getQueryString("name");
}

function CheckForm(form) 
{
	if(form.name.value == "") 
	{
		alert('请添加name！');
		form.name.focus();
		return false;
	}
	else if(form.garde.value == "")
	{
		alert('请添加grade！');
		form.garde.focus();
		return false;
	}
	else if(form.email.value == "")
	{
		alert('请添加email！');
		form.email.focus();
		return false;
	}
	else if(form.salary.value == "")
	{
		alert('请添加salary！');
		form.salary.focus();
		return false;
	}
	else
	{
		alert("提交成功");
		return true;
	}
}

</script>

</body>
</html>
