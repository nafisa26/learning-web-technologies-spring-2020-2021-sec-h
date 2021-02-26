<?php

if(isset($_POST['submit']))
	{
		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$reNewPass = $_POST['reNewPass'];

		if ($currentPass == "" || $newPass == "" || $reNewPass == "") {
			echo "Null Submission.";
		}
		elseif ($currentPass == $newPass) {
			echo "New Password should not be the same as the Current Password.";
		}
		elseif ($newPass != $reNewPass) {
			echo "New Password must match with the Retyped Password.";
		}
		elseif (($currentPass != $newPass) && ($newPass == $reNewPass)){
			echo "Password successfully changed!";
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM_1</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset style="width:350px">
			<legend><strong>CHANGE PASSSWORD</strong></legend>
			 <table>
			 	<tr>
			 		<td>Current Password</td> 
			 		<td>:<input type="password" name="currentPass" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td>New Password</td>
			 		<td>:<input type="password" name="newPass" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td>Retype New Password</td>
			 		<td>:<input type="password" name="reNewPass" value=""><br></td>
			 	</tr>
			 </table>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>