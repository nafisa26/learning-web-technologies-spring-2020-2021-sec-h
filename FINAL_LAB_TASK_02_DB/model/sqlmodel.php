<?php
	
	require_once('database.php');

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into final_lt2 (productName,buyingPrice,sellingPrice) values('{$product['name']}','{$product['bprice']}', '{$product['sprice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>