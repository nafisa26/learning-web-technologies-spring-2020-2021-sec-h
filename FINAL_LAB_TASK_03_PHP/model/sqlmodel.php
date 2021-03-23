<?php
	
	require_once('database.php');

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users values ('{$user['id']}','{$user['password']}','{$user['name']}','{$user['email']}','{$user['utype']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>