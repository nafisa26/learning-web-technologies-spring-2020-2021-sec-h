<?php
session_start();
	require_once('../model/sqlmodel.php');

	if(isset($_POST['submit'])){

		$productName = $_POST['name'];
		$buyingPrice = $_POST['bprice'];
		$sellingPrice = $_POST['sprice'];

		if($productName == "" || $buyingPrice == "" || $sellingPrice == ""){
			echo "null submission...";
		}else{

			$product = [
					'name' => $productName,
					'bprice' => $buyingPrice,
					'sprice' => $sellingPrice
				];
			}

			$status = insertProduct($product);
			if($status){

				header('location: ../view/displayProduct.php');

			}else{
				echo "invalid product";
			}
		}
?>