<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
	<form method="POST" action="../control/addProduct.php">
		<fieldset style="width:250px" >
			<legend><strong>ADD PRODUCT</strong></legend>
    		Name:<br>
    		<input type="text" name="name" value=""><br>
    		Buying Price<br>
    		<input type="number" name="bprice" value=""><br>
    		Selling Price<br>
    		<input type="number" name="sprice" value=""><br>
			<hr><input type="checkbox" name=""> Display<br><br>
			<input type="submit" name="submit" value="Save">
		</fieldset>
	</form>
</body>
</html>
