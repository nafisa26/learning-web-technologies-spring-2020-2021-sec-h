<?php
	session_start();
	require_once "../model/connection.php";
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$mail = $_POST['mail'];
		$uname = $_POST['uname'];
		$con_password = $_POST['cpass'];

		if ($name == "" || $password == "" || $mail == "" || $uname== "" || $con_password == "")  {
			echo "null submission";
		}
		if ($Password == $con_password) {
			$user = [	
							'name'=>$name, 
							'password'=>$password, 
							'mail'=> $mail,
							'uname' => $uname
						];

				$_SESSION['current_user'] = $user;

				header('location: login.php');
		}

		else{
			echo "Confirm Password must match with the Password.";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
		<table cellpadding= "22px" border = "2px" align="center" width="90%">
<!-- 		<tr>
			<td width="50%">
				<img src="logo.png" alt="Logo of the Company" align="Left" >
			</td>
			<td align="right"> 
				<a href="#">Home</a>
				<a href="Login.php">Login</a>
				<a href="Registration.php">Registration</a> 
			</td>
		</tr> -->
		<tr height="400px">
			<td colspan="2" align="center">
					<form method="POST" action="#">
		<fieldset style="width:315px">
			<legend><strong>REGISTRATION</strong></legend>
			 <table>
			 	<tr>
			 		<td>Name</td>
			 		<td>:<input type="text" name="name" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td>Email</td>
			 		<td>:<input type="email" name="mail" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td> User Name</td>
			 		<td>:<input type="text" name="uname" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td>Password</td>
			 		<td>:<input type="password" name="pass" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td>Confirm Password</td>
			 		<td>:<input type="password" name="cpass" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
			 	</tr>
			 </table>
		</fieldset>
	</form>
		<tr>
			<td colspan="2" align="center">
				Copyright©2017
			</td>
		</tr>
	</table>
</body>
</html>