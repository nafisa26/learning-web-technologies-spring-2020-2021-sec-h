<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$mail = $_POST['mail'];
		$uname = $_POST['uname'];
		$con_password = $_POST['cpass'];
/*		$gender = $_POST['gender'];
		$date = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];*/

		$unlen = strlen($uname);
		$plen = strlen($password);
		$checkun =1;
		$checkn =1;
		$checkp =1;
		$checkm = 1;
		if ($name == "" || $password == "" || $mail == "" || $uname== "" || $con_password == "" /*||  $gender == "" ||$month == "" || $year == "" || $day == ""*/)  {
			echo "null submission";
		}
		elseif ($unlen < 2) {
			echo "User Name must contain at least 2 characters";
		}
		elseif ($plen < 8) {
			echo "Password must contain at least 8 characters";
		}
		elseif ($unlen > 1 || $plen > 7) {
			for ($i=0; $i < strlen($uname) ; $i++) { 
				if((ord($uname[$i]) >= 97 && ord($uname[$i]) <= 122) || (ord($uname[$i]) >= 65 && ord($uname[$i]) <= 90) || (ord($uname[$i]) >= 48 && ord($uname[$i]) <= 57) || ($uname[$i] == '.') || ($uname[$i] == '-') || ($uname[$i] == '_'))
            		{
            			if ($i == strlen($uname)-1) {
            				$checkun = 0;
            			}
           			}
           			else
           			{
           				break;
           			}
			}
			if ($checkun == 1) {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only";
			}
			if (strpos($password, '@') == true || strpos($password, '#') == true || strpos($password, '$') == true || strpos($password, '%') == true) {
				$checkp = 0;
			}
			elseif ($checkp == 1) {
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}
			for ($i=0; $i < strlen($name) ; $i++) { 
				if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90 || strpos($name, ' ') == true))
            		{
            			if ($i == strlen($name)-1) {
            				$checkn = 0;
            			}
           			}
           			else
           			{
           				break;
           			}
			}
			if ($checkn == 1) {
				echo "Name only can contain alphabets";
			}
			if (strpos($mail, '@') == true && strpos($mail, '.') == true) {
				$checkm = 0;
			}
			elseif ($checkm == 1) {
				echo "Email must contain '@'' and '.')";
			}
		}
		elseif ($Password != $con_password) {
			echo "Confirm Password must match with the Password.";
		}
		$_SESSION['name'] = $name;
        $_SESSION['mail'] = $mail;
        $_SESSION['uname'] = $uname;
        $_SESSION['pass'] = $password;
/*      $_SESSION['gender'] = $gender;
        $_SESSION['day'] = $day;
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year; */

        if ($checkn == 0 && $checkp == 0 && $checkm == 0 && $checkun == 0) {
				header('location: Login.php');
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
			 		<td colspan="2">
			 			<form>
			 				<fieldset>
			 				<legend>Gender</legend>
								<input type="radio" name="gender"> Male
								<input type="radio" name="gender"> Female
								<input type="radio" name="gender"> Other 
			 				</fieldset>
			 			</form>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td colspan="2">
			 			<form>
			 				<fieldset>
			 				<legend>Date Of Birth</legend>
								<input type="texfield" size="1" name="day">/
	    						<input type="texfield" size="1" name="month">/
	    						<input type="texfield" size="1" name="year"> (dd/mm/yyyy)
			 				</fieldset>
			 			</form>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td colspan="2"><input type="submit" name="submit" value="Submit">
			 		<input type="button" name="reset" value="Reset"></td>
			 	</tr>
			 </table>
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