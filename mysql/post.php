<?php
header("Content-type:text/html;charset:utf8");
// require_once 'optMysql.php';

//__autoload函数 会在试图使用尚未定义的类时 自动调用
function __autoload($classname){
    require_once $classname.'.php';
}

$serverName = 'localhost';
$serverRoot = 'root';
$passWord = '';
$dataBase = 'myDB';


//连接数据库
$conn = new OptMysql($serverName,$serverRoot,$passWord,$dataBase);
//连接失败
//if($conn->connect_error){
//    die('连接失败：'.$conn->connect_error);
//}

//从http请求中获取数据
$sName = $_REQUEST["sName"];
$sAge = $_REQUEST["sAge"];
$sSex = $_REQUEST['sSex'];

//echo $sName;
//echo $sAge;
//echo $sSex;

$sql = "INSERT INTO `student` (`sName`, `sAge`, `sSex`) VALUES ('杨坤晓',19,'男');";

//插入数据库sql
// $sql = "INSERT INTO student (`sName`, `sAge`, `sSex`) VALUES ('".$sName."','".$sAge."','".$sSex."');";

// $sql = "SELECT sNo,sName, sAge, sSex FROM student";
$result = $conn->query($sql);
// echo json_encode($result,JSON_UNESCAPED_UNICODE);

//设置编码格式
//$conn->query("set names utf8");



if($conn->query($sql) === TRUE){
   echo '插入数据库成功' ;
}else {
   echo '插入数据库成功:'.$conn->error ;
}


?>