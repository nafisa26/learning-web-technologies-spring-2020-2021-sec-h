<?php

	if(isset($_POST['gender']))
	{
		echo $_POST['gender'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Task B</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset style="width:250px">
			<legend>Gender</legend>
			<table>
				<tr>
					<td> 
						<input type="radio" name="gender" value="Male"> Male
						<input type="radio" name="gender" value="Female"> Female
						<input type="radio" name="gender" value="Other"> Other 
					</td>
				</tr>
			</table>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>