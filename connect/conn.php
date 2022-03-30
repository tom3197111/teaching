<?php 
/**
 * 
 */
class conn  
{
	 private $CONN;
	 private $DBNAME = 'website';
	 private $DBUSER = 'root';
	 private $DBPASSWORD = '';
	 private $DBHOST ='localhost';
	function __construct()
	{
		//連線
		$this->CONN = mysqli_connect($this->DBHOST,$this->DBUSER,$this->DBPASSWORD,$this->DBNAME);
		//防止亂碼 
		mysqli_query($this->CONN,"SET CHARACTER SET UTF-8");
		if(!$this->CONN){
			die("連線失敗".mysqli_error($this->CONN));
		}else{
			// echo "連線成功";
		}
	}

	//dql 
	//資料庫的查詢
	//負責進行查詢的動作 不會對資料本身做任何的修改
	//返回數組
	function dql($sql){

		$arr = array();
		$res = $this->Query($sql);
		$i = 0;
		while($row = mysqli_fetch_assoc($res)){
			$arr[$i++] =$row;
		}

		return $arr;

	}

	//dml
	//資料操作語言
	//用來處理資料表的資料

	function dml($sql){
		$res = $this->Query($sql);
		if(!$res){
			//執行失敗
			return 0;
		}else{
			if(mysqli_affected_rows($this->CONN)>0){
				//執行成功
				return 1;
			}else{
				//執行成功 但是沒有受到影響
				return 2;
			}
		}
	}

	function Query($sql){
		$res = mysqli_query($this->CONN,$sql) or die(mysqli_error($this->CONN));
		return $res;
	}
}

?>