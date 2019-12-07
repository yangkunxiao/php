<?php
session_start();
// $_SESSION['view'] = 2;
if(isset($_SESSION['views'])){
	$_SESSION['views'] = $_SESSION['views'] + 1;
}else{
	$_SESSION['views'] = 1;
}

echo "浏览量：". $_SESSION['views'];
//销毁session 
// if(isset($_SESSION['views']))
// {
	   //session_destroy();
//     unset($_SESSION['views']);
// }


?>



