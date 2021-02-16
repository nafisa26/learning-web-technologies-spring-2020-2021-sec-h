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
			<legend>EMAIL</legend>
			EMAIL: <input type="text" name="mymail" value="<?php
	if(isset($_POST['mymail']))
	{
		echo $_POST['mymail'];
	}


?>
">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>