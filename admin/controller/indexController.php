<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	//檢查帳密是否正確
	$check = "SELECT * FROM `admin` WHERE `account` ='".$username."' AND `password` = '".$password."'";
	if(mysqli_num_rows($conn->Query($check))==0){
		$fun->alert('帳號密碼錯誤 請衝新輸入!');
	}else{
		$_SESSION['username'] = $username;
		$_SESSION['login_time'] = date('Y/m/d H:i:s');
		$_SESSION['login_ip'] = $_SERVER['REMOTE_ADDR'];
		header("Location:system.php?type=welcom");
	}
}

?>