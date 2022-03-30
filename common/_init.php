<?php 
include '../../connect/conn.php';
include '../../common/fun.php';
$conn = new conn();
$fun = new fun();
if(!session_id()){
	session_start();
}
if($_SESSION['category'] ==''){
	$sql  = "SELECT * FROM `category`";
	$category = $conn->dql($sql);
	if(count($category) >= 1){
		$_SESSION['category'] = $category;
	}else{
		$fun->msg('類別列表獲取失敗 請重新登入!');
	}
}
$tmp= explode('/', $_SERVER['PHP_SELF']);
$url = end($tmp);


?>
