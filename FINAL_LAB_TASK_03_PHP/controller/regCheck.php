<?php
session_start();
	require_once('../model/sqlmodel.php');

	if(isset($_POST['submit'])){

		$ID = $_POST['id'];
		$Password = $_POST['pass'];
		$ConfirmPassword = $_POST['cpass'];
		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$UserType = $_POST['utype'];

		if($ID == "" || $Password == "" || $ConfirmPassword == "" || $Name == "" || $Email == "" || $UserType == ""){
			echo "null submission...";
		}
		elseif($Password != $ConfirmPassword)
		{
			echo "Password and ConfirmPassword must match with each other!";

		}else{

			$user = [
					'id' => $ID,
					'password' => $Password,
					//'confirmPassword' => $ConfirmPassword,
					'name' => $Name,
					'email' => $Email,
					'utype' => $UserType
				];

			}

			$status = insertUser($user);
			if($status){

				header('location: ../view/login.php');

			}else{
				echo "invalid user";
			}
		}
?>