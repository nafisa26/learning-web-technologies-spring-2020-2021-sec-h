<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
		<fieldset  style="width:200px">
			<legend><STORNG>Registration</STORNG></legend>
			ID<br>
			<input type="text" name="id" value=""><br>
			Password<br>
			<input type="password" name="pass" value=""><br>
			Confirm Password<br>
			<input type="password" name="cpass" value=""><br>
			Name<br>
			<input type="text" name="name" value=""><br>
			Email<br>
			<input type="email" name="email" value=""><br>
			User Type <i>[User/Admin]</i><br>
			<select name="utype">
				<option value="">User</option>
				<option value="">Admin</option>
			</select> <hr>

			<input type="submit" name="submit" value="Register"> 
			<a href="login.php">Login</a>
		</fieldset>
	</form>
</body>
</html>