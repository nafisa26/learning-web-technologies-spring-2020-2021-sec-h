<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
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
		<legend>Blood Group</legend>
			<select name="bloodgroup">
							<option value="">B+</option>
							<option value="">B-</option>
							<option selected value="">O+</option>
							<option value="">0-</option>
							<option value="">AB+</option>
							<option value="">AB-</option>
						</select> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>