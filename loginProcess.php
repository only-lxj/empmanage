<?php
//接收用户数据
//1.id
$id=$_POST['id'];
//2.密码
$password=$_POST['password'];

/*
//简单验证test（不到数据库）
if($id=="1"&&$password=="123")
{
	//合法，跳转到empMain.php
	header("Location: empMain.php");
	exit();
}
else
{
	//非法用户
	header("Location: login.php?errno=1");
}
*/

//到数据库验证

//1.得到连接
$conn=mysql_connect('localhost','root','');
if(!$conn)
{
	die("连接失败".mysql_errno());
}

//设置访问数据库的编码
mysql_query("set names utf8",$conn) or die(mysql_errno());

//选择数据库
mysql_select_db("empmanage",$conn) or die(mysql_errno());

//发送sql语句，验证

//$sql="select * from admin where id=$id and password='$password'";
//防止sql注入攻击
//解决办法：变化验证逻辑

$sql="select password,name from admin where id=$id";
//1.通过输入的id来获取数据库的密码，然后再和输入的密码比对
$res=mysql_query($sql,$conn);
if($row=mysql_fetch_assoc($res))
{
	//2.取出数据库的密码
	if($row['password']==md5($password))
	{
		//合法，跳转到empMain.php
		//取出用户名
		$name=$row['name'];
		header("Location: empMain.php?name=$name");
		exit();
	}
	else
	{
		header("Location: login.php?errno=1");
		exit();
	}
}
else
{
	header("Location: login.php?errno=2");
	exit();
}

//关闭资源
mysql_free_result($res);
mysql_close($conn);

?> 
