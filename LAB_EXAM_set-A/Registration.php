<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$con_password = $_POST['cpass'];
        $id = $_POST['id'];
		
		if ($name == "" || $password == "" || $mail == "" || $uname== "" || $con_password )  {
			echo "null submission";
		} 

        if ($checkn == 0 && $checkp == 0 && $checkm == 0 && $checkun == 0) {
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