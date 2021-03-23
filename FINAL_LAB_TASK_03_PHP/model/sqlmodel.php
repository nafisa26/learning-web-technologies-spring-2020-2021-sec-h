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

	function validateUser($id, $password)
    {
        $conn = getConnection();
        $sql = "select * from users WHERE id = '{$id}' AND password = '{$password}'";
        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($result);
        if(!empty($result))
        {
            $_SESSION['flag'] = true;
            $_SESSION['id'] = $result['id'];
            return true;
        }
        else
        {
            return false;
        }
    }
?>