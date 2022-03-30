<?php
/**
 * 
 */
class fun 
{
	
	function alert($msg){
		echo "<script>alert('$msg');
			window.location.href='index.php'</script>";
	}
	function msg($msg,$url=''){
		echo "<script>alert('$msg');</script>";
		if($url !=''){
			echo "<script>window.location.href='$url';</script>";
		}
	}
	function history_msg($msg){
		echo "<script>alert('$msg');history.go(-1)</script>";
	}
	//確定我們要什麼
	//需要的有 目前的頁數 總共的頁數
	//
	function page($table,$per,$conn){
		//取出資料做筆數計算
		$sql = "SELECT * FROM ".$table." ORDER BY `sort`"; 
		$result = $conn->Query($sql);
		//主要目前是取得總頁數
		$data_nums = mysqli_num_rows($result); //計算總筆數 
    	$pages = ceil($data_nums/$per); //總頁數


		//我們等一下會用GET參數來做換頁的動作 所以這邊則是取得get的參數
		
		//如果url沒有頁數 則當前頁數預設為1
    	if (!isset($_GET["page"])){ 
    	    $page=1; //則在此設定起始頁數
    	} else {
    	    $page = intval($_GET["page"]); //確認頁數只能夠是INT
    	}



    	//當前頁數
    	$start = ($page-1)*$per; //每一頁開始的資料序號
    	$result = $conn->dql($sql.' LIMIT '.$start.','.$per);

    	$Data = array("pages" =>$pages,
    				"page" =>$page,
    				"Data"=>$result);
    	return $Data;
	}




}

?>