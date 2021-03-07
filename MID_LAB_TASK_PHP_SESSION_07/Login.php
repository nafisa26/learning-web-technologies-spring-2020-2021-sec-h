<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];

		$nlen = strlen($name);
		$plen = strlen($password);
		$checkn =1;
		$checkp =1;
		if ($name == "" || $password == "") {
			echo "null submission";
		}
		elseif ($nlen < 2) {
			echo "User Name must contain at least 2 characters";
		}
		elseif ($plen < 8) {
			echo "Password must contain at least 8 characters";
		}
		elseif ($nlen > 1 || $plen > 7) {
			for ($i=0; $i < strlen($name) ; $i++) { 
				if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
            		{
            			if ($i == strlen($name)-1) {
            				# code...
            				$checkn = 0;
            			}
            		
           			}
			}
			
			if ($checkn == 1) {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only";
			}
			elseif (strpos($password, '@') == true || strpos($password, '#') == true || strpos($password, '$') == true || strpos($password, '%') == true) {
				$checkp = 0;
			}
			elseif ($checkp == 1) {
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}
		}

		if ($checkn == 0 && $checkp == 0) {
				echo "Successful";
			}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>
<body>
		<table cellpadding= "22px" border = "2px" align="center" width="90%">
		<tr>
			<td width="50%">
				<img src="logo.png" alt="Logo of the Company" align="Left" >
			</td>
			<td align="right"> 
				<a href="#">Home</a> |
				<a href="Login.php">Login</a> |
				<a href="Registration.php">Registration</a> 
			</td>
		</tr>
		<tr height="400px">
			<td colspan="2" align="center">
					<form method="POST" action="#" style="width:350px">
						<fieldset >
							<legend><strong>LOGIN</strong></legend>
							 <table>
							 	<tr>
							 		<td>User Name:</td> 
							 		<td><input type="text" name="name" value=""><br></td>
							 	</tr>
							 	<tr>
							 		<td>Password:</td>
							 		<td><input type="password" name="password" value=""><br></td>
							 	</tr>
							</table>
							<br><input type="checkbox" name=""> Remember Me<br><br>
							<input type="submit" name="submit" value="Submit">
							<a href="Form_Validation_Form2_Password.php">Forget Passsword?</a><br>
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