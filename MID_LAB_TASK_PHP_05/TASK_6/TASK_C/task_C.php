<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Task C</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset style="width:250px">
		<legend>Blood Group</legend>
			<select name="bloodgroup">
							<option value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">B+</option>
							<option value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">B-</option>
							<option selected value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">O+</option>
							<option value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">0-</option>
							<option value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">AB+</option>
							<option value="<?php

	if(isset($_POST['bloodgroup']))
	{
		echo $_POST['bloodgroup'];
	}
?>">AB-</option>
						</select> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>