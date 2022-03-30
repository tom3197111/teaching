<?php 






if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['type'] =='ins'){
	$title = "'".$_POST['title']."'";
	$state = $_POST['state'];
	$sort = $_POST['sort'];
	$ctur = "'".$_SESSION['username']."'";
	if($state ==''){
		$sort =1;
	}
	//新增分類
	$sql = "INSERT INTO `category` (title,sort,state,ctdt,ctur) VALUES($title,$sort,$state,NOW(),$ctur)";
	if($conn->dml($sql) == 1){
		$fun->msg('新增功能成功!');
	}else{
		$fun->msg('新增功能失敗!');
	}
}elseif($_GET['type'] =='list'){

	$list = $fun->page('category',1,$conn);
	// print_r($list['Data']);
	if(count($list['Data']) == 0){
		$fun->history_msg('取得資料失敗! 或無新增該資料');
	}

}elseif($_GET['type'] == 'show' && isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM `category` WHERE id =".$id;
	$data = $conn->dql($sql);

}elseif($_GET['type'] == 'upda'){
	$id = $_POST['id'];
	$title = "'".$_POST['title']."'";
	$upur = "'".$_SESSION['username']."'";
	$state = $_POST['state'];
	$sort = $_POST['sort'];
	$sql ="UPDATE  `category` SET  title = $title ,state = $state ,sort = $sort ,updt=now(),upur =$upur WHERE id =$id";
	if($conn->dml($sql) == 1){
		$fun->msg('修改成功!','?type=list');
	}else{
		$fun->msg('修改失敗!');
	}

}elseif($_GET['type'] == 'del' && isset($_GET['id'])){
	$sql="DELETE FROM `category` WHERE id =".$_GET['id'];
	if($conn->dml($sql) == 1){
		$fun->msg('刪除成功!','?type=list');
	}else{
		$fun->msg('刪除失敗!');
	}
}

?>