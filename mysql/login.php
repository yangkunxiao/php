<?php
header("Content-type:text/html;charset:utf8");

//链接数据库
$serverName = 'localhost';
$serverRoot = 'root';
$passWord = '';
$dataBase = 'myDB';

$con = new mysqli($serverName,$serverRoot,$passWord,$dataBase);

//检测连接
if($con->connect_error){
    die('连接失败:'.$con->connect_error);
};

//从请求中获取数据
$name = $_REQUEST['sName'];
$age = $_REQUEST['sAge'];
$sex = $_REQUEST['sSex'];

//设置数据库编码格式为utf-8
$con->query("set names utf8");

//插入数据
$sql = "INSERT INTO `student` (`sName`,`sAge`,`sSex`) VALUES ('".$name."','".$age."','".$sex."')";
// $sql = "INSERT INTO `student` (`sName`, `sAge`, `sSex`) VALUES ('杨坤晓',19,'男');";
if($con -> query($sql) === TRUE){
    echo "登录成功";
}else{
    echo "登录失败:".$con->error;
}


?>