<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>empList</title>
</head>

<body>

<?php

//显示所有用户的信息
//查询数据库
$conn=mysql_connect('localhost','root','') or die(mysql_error());

mysql_query("set names utf8",$conn);
mysql_select_db("empmanage",$conn);

//分页
$pageSize=3;    //每页信息数目
$rowCount=0;    //总信息条数，从数据库获取
$pageNow=1;     //用户指定，变量
//根据用户的点击修改pageNow
//判断是否有pageNow,没有默认第一页
if(!empty($_GET['pageNow']))
{
	$pageNow=$_GET['pageNow'];
}

$pageCount=0;   //总页数，计算

//$pageSize=3,显示第二页
//$sql="select * from emp limit 3,3";

$sql="select count(id) from emp";
$res1=mysql_query($sql);
//取出行数
if($row=mysql_fetch_row($res1))
{
	$rowCount=$row[0];
}
//计算总页数
$pageCount=ceil($rowCount/$pageSize);

$sql="select * from emp limit ".($pageNow-1)*$pageSize.",$pageSize";
$res2=mysql_query($sql,$conn);
echo "<table border='1' bordercolor='#000' cellspacing='0' width='600px'";
echo "<tr>
		<th>id</th>
		<th>name</th>
		<th>grade</th>
		<th>email</th>
		<th>salary</th>
		<th>operate</th>
	</tr>";
//循环显示信息
while($row=mysql_fetch_assoc($res2))
{
	echo "<tr>
			<td>{$row['id']}</td>
			<td>{$row['name']}</td>
			<td>{$row['garde']}</td>
			<td>{$row['email']}</td>
			<td>{$row['salary']}</td>
			<td><a href='#'>删除用户</a>&nbsp;&nbsp;&nbsp;<a href='#'>修改信息</a></td>
		</tr>";
}
echo "<h1>雇员信息列表</h1>";
echo "</table>";

//显示上一页
if($pageNow>1)
{
	$prePage=$pageNow-1;
	echo "<a href='empList.php?pageNow=$prePage'>上一页</a>&nbsp;&nbsp;";
}
//打印出页码超链接
for($i=1;$i<=$pageCount;$i++)
{
	echo "<a href='empList.php?pageNow=$i'>$i</a>&nbsp;";
}
//显示下一页
if($pageNow<$pageCount)
{
	$nextPage=$pageNow+1;
	echo "&nbsp;&nbsp;<a href='empList.php?pageNow=$nextPage'>下一页</a>";
}
//显示当前页，总页数
echo "&nbsp;&nbsp;当前页{$pageNow}/共{$pageCount}页";
//指定跳转某页
echo "<br/>";

?>

<form action="empList.php">
跳转到：<input type="text" name="pageNow" />
<input type="submit" value="GO" />
</form>

<?php
mysql_free_result($res2);
mysql_close($conn);

?>


</body>
</html>
