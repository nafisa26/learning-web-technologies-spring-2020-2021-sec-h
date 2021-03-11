<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['loguname'];
		$password = $_POST['password'];
		if ($uname == "" || $password == "") {
			echo "null submission";
		}
		elseif($uname == $_SESSION['uname'] && $password == $_SESSION['pass'])
		{
			header('location: Dashboard.php');
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
	<title>LOGIN</title>
</head>
<body>
		<table cellpadding= "22px" border = "2px" align="center" width="90%">
		<tr>
			<td width="50%">
				<img src="logo.png" alt="Logo of the Company" align="Left" >
			</td>
			<td align="right"> 
				<a href="#">Home</a>
				<a href="Login.php">Login</a>
				<a href="Registration.php">Registration</a> 
			</td>
		</tr>
		<tr height="400px">
			<td colspan="2" align="center">
					<form method="POST" action="#">
						<fieldset style="width:350px" >
							<legend><strong>LOGIN</strong></legend>
							 <table>
							 	<tr>
							 		<td>User Name:</td> 
							 		<td><input type="text" name="loguname" value=""><br></td>
							 	</tr>
							 	<tr>
							 		<td>Password:</td>
							 		<td><input type="password" name="password" value=""><br></td>
							 	</tr>
							</table>
							<br><input type="checkbox" name=""> Remember Me<br><br>
							<input type="submit" name="submit" value="Submit">
							<a href="Forgot_Password.php">Forget Passsword?</a><br>
						</fieldset>
					</form>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				Copyright©2017
			</td>
		</tr>
	</table>
</body>
</html>