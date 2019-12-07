<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "myDB";
//创建连接
$con = new mysqli($servername,$username,$password,$dbName);

//检测连接
if($con->connect_error){
    die('连接失败:'.$con->connect_error);
};
//创建数据库
//$sql = 'CREATE DATABASE IF NOT EXISTS myDB';


//创建数据库表
//$sql = "CREATE TABLE IF NOT EXISTS student ( `sNo` INT NOT NULL AUTO_INCREMENT COMMENT '自动增加' , `sName` VARCHAR(100) NOT NULL , `sAge` INT NOT NULL , `sSex` VARCHAR(50) NOT NULL , PRIMARY KEY (`sNo`)) ENGINE = InnoDB;";

//插入
//$sql = "INSERT INTO student (`sName`, `sAge`, `sSex`) VALUES ('杨坤晓',19,'男');";
//$sql .= "INSERT INTO student (`sName`, `sAge`, `sSex`) VALUES ('杨坤晓',20,'男');";
$sql = "INSERT INTO student (sName, sAge, sSex)
VALUES ('杨坤晓',19,'男');";
$sql.="INSERT INTO student (sName, sAge, sSex)
VALUES ('杨坤晓',20,'男');";
$sql.="INSERT INTO student (sName, sAge, sSex)
VALUES ('杨坤晓',21,'男');";

//设置数据库编码格式为utf-8
$con->query("set names utf8");

if($con->multi_query($sql) === TRUE){
//    echo "创建数据表:: successfully";
    echo "插入数据成功";
}else{
//    echo "创建数据表错误:: ".$con->error;
    echo "插入数据失败::".$con->error;
}

?>