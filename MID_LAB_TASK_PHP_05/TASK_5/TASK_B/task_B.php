<?php

	if(isset($_POST['items[]']))
	{
		echo $_POST['items[]'];
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
		<legend>Degree</legend>
			<table>
				<tr>
					<td> 
						<input type="checkbox" selected value="" name="items[]"> SSC
						<input type="checkbox" value="" name="items[]"> HSC
						<input type="checkbox" value="" name="items[]"> BSc 
						<input type="checkbox" value="" name="items[]"> MSc 
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>