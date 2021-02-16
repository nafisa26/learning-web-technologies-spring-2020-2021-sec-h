<?php

	if(isset($_POST['mydob']))
	{
		echo $_POST['mydob'];
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Task B</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			<table>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="mydob" value="" placeholder="dob" /></td>
				</tr>
			</table>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>