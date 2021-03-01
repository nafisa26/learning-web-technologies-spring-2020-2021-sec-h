<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];

		$nlen = strlen($name);
		$plen = strlen($password);
		$checkn =0;
		$checkp =0;
		if ($name == "" || $password == "") {
			echo "null submission";
		}
		elseif ($nlen < 2) {
			echo "User Name must contain at least 2 characters";
		}
		elseif ($plen < 8) {
			echo "Password must contain at least 8 characters";
		}
		elseif ($nlen > 1 || $plen > 7) {
			if ($name != range(a, z) || $name != range(A, Z) || $name != range(0, 9)) {
				$checkn = 1;
				echo "User Name can contain alpha numeric characters, period, dash or underscore only";
			}
			elseif ($checkn == 0 && $checkp == 0) {
				echo "Successful";
			}
		}
	}
?>