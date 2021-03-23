<?php
session_start();
	require_once('../model/sqlmodel.php');

	if(isset($_POST['submit'])){
		$ID = $_POST['id'];
		$Password = $_POST['pass'];

		if($ID == "" || $Password == ""){
			echo "null submission...";
		}
		elseif(validateUser($ID, $Password))
		{
			header('location: ../view/home.php');

		}else{
				echo "invalid user";
			}
		}

?>