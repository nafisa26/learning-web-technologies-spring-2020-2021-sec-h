<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Task C</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			<table>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="mydob" value="<?php
	if(isset($_POST['mydob']))
	{
		echo $_POST['mydob'];
	}?>" placeholder="dob" /></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>