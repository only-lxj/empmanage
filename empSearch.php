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
#search{
	position:absolute;
	top:270px;
	left:600px;
}
#form1{
	font-size:24px;
}
#form1 input{
	font-size:18px;
}
#result{
	font-size:24px;
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

<div id="search">

    <form id="form1" method="post" action="">
        name:&nbsp;<input type="text" name="search">
        <input type="submit" name="submit" value="查询">
    </form>
	   
    <div id="result">
		<?php
        
        //判断是否是提交过来的
        if(isset($_POST['submit'])&&$_POST['submit']=='查询')
        {
            $search = $_POST['search'];
            if($search!=null||$search!='')
            {
                $conn=mysql_connect('localhost','root','');
                if(!$conn)
                {
                    die("连接失败".mysql_errno());
                }
                mysql_query("set names utf8",$conn) or die(mysql_errno());
                mysql_select_db("empmanage",$conn) or die(mysql_errno());
                
                $sql="select * from emp where name='$search'";
                $res=mysql_query($sql,$conn);
                $arr = array();
                //吧结果存入数组 并记录数组长度
                $count = 0;
                while($row=mysql_fetch_assoc($res))
                {
                    $arr[$count] = $row;
                    $count++;
                    
                }	
                if($arr==null)
                {
                    echo "该员工不存在";
                }	
                //关闭资源
                mysql_free_result($res);
                mysql_close($conn);
                
            }
        }
        
        
        //打印结果
        if(isset($arr)&&$arr != null)
        {
            for($i = 0; $i < $count; $i++){
                foreach($arr[$i] as $key => $value)
                {
                    echo $key.":".$value;
                    echo "<br/>";
                }
                echo "<br>";
            }
        }
    
        ?>   
    </div>
    
</div>


<script type="text/javascript">

function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]); return null;
}

var returnA=document.getElementById("returnA");
function back()
{
	window.location.href="empMain.php?name=" + getQueryString("name");
}

document.getElementById("form1").action="empSearch.php?name=" + getQueryString("name");


</script>

</body>
</html>
