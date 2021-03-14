<?php
	session_start();
	if(isset($_POST['submit_in']))
	{
		$id = $_POST['logid'];
		$password = $_POST['logpassword'];
		if ($uname == "" || $password == "") {
			echo "null submission";
		}
		elseif($uname == $_SESSION['id'] && $password == $_SESSION['pass'])
		{
			if($_SESSION['utype'] == 'user')
			{
				header('location: User's_Home_Page.php');
			}
			else
			{
				header('location: Admin's_Home_Page.php');
			}
			
		}
		else
		{
			echo "Invalid User";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset style="width:270px">
			<legend><strong>LOGIN</strong></legend>
			 	User ID<br>
			 	<input type="text" name="id" value=""><br>
			 	Password<br>
			 	<input type="password" name="pass" value=""><br>
        <input type="submit" name = 'submit_in' value='Login'>
        <a href="Registration.php">Register</a>
		</fieldset>
	</form>

</body>
</html>