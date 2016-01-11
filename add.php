<html>  
<head>  
</head>  
<body>  
<?php  
$connect=mysql_connect("localhost","root","");  
if($connect)  
    echo "connect databade successfully!"."<br />";  
else  
    echo "connect databade failure!"."<br />";  
$select=mysql_select_db("empmanage",$connect);  
if($select)  
{  
    echo "select databade successfully!"."<br />";  
    $res="insert into emp(name,garde,email,salary) values('$_POST[name]','$_POST[garde]','$_POST[email]','$_POST[salary]')";  
    if(mysql_query($res,$connect))  
        echo "insert data successfully!"."<br />";  
    else  
        echo "insert data error!"."<br />";  
}  
else{  
    /*$create="create database Family";  
    if(mysql_query($create,$connect))  
    {  
    echo "create database successfully!"."<br />";  
    mysql_select_db("Family",$connect);  
    $table="create table f(name varchar(20),born int,age int)";  
    mysql_query($table,$connect);  
    $insert="insert into f(name,born,age) values('$_POST[name]','$_POST[born]','$_POST[age]')";  
    if(mysql_query($insert,$connect))  
        echo "insert data successfully!"."<br />";  
    else  
        echo "insert data error!"."<br />";  
    }  
    else{  
    echo "create database failure!"."<br />";   
    } */ 
}  

?>  
</body>  
</html> 
