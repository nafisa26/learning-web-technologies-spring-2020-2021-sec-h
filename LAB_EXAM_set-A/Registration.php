<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$con_password = $_POST['cpass'];
        $id = $_POST['id'];
        $user_type = $_POST['utype'];
		$check =1;
		if ($name == "" || $password == "" || $id== "" || $con_password || $user_type)  {
			echo "null submission";
		} 
		elseif ($unlen < 2) {
			echo "User Name must contain at least 2 characters";
		}
		elseif ($plen < 4) {
			echo "Password must contain at least 8 characters";
		}
		elseif ($Password != $con_password) {
			echo "Confirm Password must match with the Password.";
		}
		else{
			$check =0;
		}

		$_SESSION['name'] = $name;
        $_SESSION['id'] = $id;
        $_SESSION['utype'] = $user_type;
        $_SESSION['pass'] = $password;
		if($check ==0;)
			{
				header('location: Login.php');
			}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset style="width:270px">
			<legend><strong>REGISTRATION</strong></legend>
			 	ID<br>
			 	<input type="text" name="id" value=""><br>
			 	Password<br>
			 	<input type="password" name="pass" value=""><br>
			 	Confirm Password<br>
			 	<input type="password" name="cpass" value=""><br>
				Name<br>
				<input type="text" name="name" value=""><br>
				User Type<br>
        		<input type='radio' name='utype' value='user'>User
       			<input type='radio' name='utype' value='admin'>Admin<br>
        <input type="submit" name= 'submit' value='Sign Up'>
        <a href="Login.php">Sign In</a>
		</fieldset>
	</form>

</body>
</html>