<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="../controller/loginCheck.php">
		<fieldset  style="width:200px">
			<legend><STORNG>Login</STORNG></legend>
			ID<br>
			<input type="text" name="id" value=""><br>
			Password<br>
			<input type="password" name="pass" value=""><br><br>
			<input type="checkbox" name="remember"> Remember me<hr>
			<input type="submit" name="submit" value="Login"> 
			<a href="registration.php">Register</a>
		</fieldset>
	</form>
</body>
</html>