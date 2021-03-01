<?php

if(isset($_POST['submit']))
	{
		$iFile = $_POST['iFile'];
		$fileExt = explode('.', $iFile);
		$fileActualExt = strtolower(end($fileExt));
		$allowedExt = array('jpeg', 'jpg', 'png');

		if (in_array($fileActualExt, $allowedExt) == false) {
			echo "Not supported file format.";
			}
		else{

			if (filesize($iFile) > (4096000)){
				echo "Picture size should not be more than 4MB";
			}
			else
			{

				echo "Your profile picture is successfully uploaded.";
			}
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM_1</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset style="width:350px">
			<legend><strong>PROFILE PICTURE</strong></legend>
			 <table>
			 	<tr>
			 		<td><img name="img" width="120px" height="120px" src="user.png"></td> 
			 	</tr>
			 	<tr>
			 		<td><input type="file" name="iFile" value=""><br></td>
			 	</tr>
			 	<tr>
			 		<td><input type="submit" name="submit" value="Submit"></td>
			 	</tr>
			 </table>
		</fieldset>
	</form>
	
</body>
</html>

