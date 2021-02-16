<?php

	$number1 = 11;
	$number2 = 1003;
	$number3 = 123;

	if ($number1>$number2) {
		if ($number1>$number3) {
			echo "number1 is the largest number!";
		}
		else{
			echo "number3 is the largest number!";
		}
	}
	else{
		if ($number2>$number3) {
			echo "number2 is the largest number!";
		}
		else{
			echo "number3 is the largest number!";
		}
	}
 ?>