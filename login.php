<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>empmanage</title>
<style>
body{
	margin:0;
	padding:0;
	background: -ms-linear-gradient(top, #b8c4cb, #f6f6f8);
	background:-moz-linear-gradient(top,#b8c4cb,#f6f6f8);
	background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#b8c4cb), to(#f6f6f8));
	background:-webkit-linear-gradient(top, #b8c4cb, #f6f6f8);
	font-size:16px;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
#login{
	margin:0 auto;
	width:280px;
	padding-top:200px;
}
#login h1{
	font-size:40px;
}
#logo{
	margin-left:80px;
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
#formTable td{
	font-size:20px;
}
#formTable input{
	font-size:18px;
}
#btn input{
	margin-left:50px;
	font-size:16px;
}

</style>
</head>

<body>
<div id="login" >
	<div id="logo"> 
    	<div id="hexagon">
        	<p>LOGO</p>
        </div>
    </div>
    <br/>
    <h1>公司管理系统</h1>
    <form action="loginProcess.php" method="post">
        <table id="formTable">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" /></td>
            </tr>
            <tr>
                <td>密码&nbsp;&nbsp;</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr><td><br/></td></tr>
        </table>
        <div id="btn">
            <input type="submit" value="登录" />
            <input type="reset" value="重置" />
        </div>
    </form>
    
    <?php

	//接收errno
	if(!empty($_GET['errno'])){
		//接收错误编号
		$errno=$_GET['errno'];
		if($errno==1)
		{
			echo "<br/><font color='#FF0000' size='3'>你的密码错误</font>";
		}
		if($errno==2)
		{
			echo "<br/><font color='#FF0000' size='3'>id不存在</font>";
		}
	}

	?>
</div>

<script type="text/javascript">
var main=document.getElementById("login");
main.style.height=document.documentElement.clientHeight-200+'px';
</script>
</body>
</html>
