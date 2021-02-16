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
		<legend>Degree</legend>
			<table>
				<tr>
					<td> 
						<input type="checkbox" value="<?php
	if(isset($_POST['items[]']))
	{
		echo $_POST['items[]'];
	}?>" name="items[]"> SSC
						<input type="checkbox" value="<?php
	if(isset($_POST['items[]']))
	{
		echo $_POST['items[]'];
	}?>" name="items[]"> HSC
						<input type="checkbox" value="<?php
	if(isset($_POST['items[]']))
	{
		echo $_POST['items[]'];
	}?>" name="items[]"> BSc 
						<input type="checkbox" value="<?php
	if(isset($_POST['items[]']))
	{
		echo $_POST['items[]'];
	}?>" name="items[]"> MSc 
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>