<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Task A</title>
</head>
<body>

	<form method="GET" action="#">
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="myname" value="<?php
	if(isset($_Get['myname']))
	{
		echo $_Get['myname'];
	}


?>
">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>