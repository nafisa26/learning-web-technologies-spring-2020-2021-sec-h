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
			<legend>Gender</legend>
			<table>
				<tr>
					<td> 
						<input type="radio" name="gender" value="<?php
	if(isset($_POST['gender']))
	{
		echo $_POST['gender'];
	}?>"> Male
						<input type="radio" name="gender" value="<?php
	if(isset($_POST['gender']))
	{
		echo $_POST['gender'];
	}?>"> Female
						<input type="radio" name="gender" value="<?php
	if(isset($_POST['gender']))
	{
		echo $_POST['gender'];
	}?>"> Other 
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>