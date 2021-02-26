<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];

		$nlen = strlen($name);
		$plen = strlen($password);
		$checkn =1;
		$checkp =1;
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
			for ($i=0; $i < strlen($name) ; $i++) { 
				if((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || (ord($name[$i]) >= 48 && ord($name[$i]) <= 57) || ($name[$i] == '.') || ($name[$i] == '-') || ($name[$i] == '_'))
            		{
            			if ($i == strlen($name)-1) {
            				# code...
            				$checkn = 0;
            			}
            		
           			}
			}
			
			if ($checkn == 1) {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only";
			}
			elseif (strpos($password, '@') == true || strpos($password, '#') == true || strpos($password, '$') == true || strpos($password, '%') == true) {
				$checkp = 0;
			}
			elseif ($checkp == 1) {
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}
		}

		if ($checkn == 0 && $checkp == 0) {
				echo "Successful";
			}
	}
?>

