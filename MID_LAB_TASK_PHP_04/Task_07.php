<?php

	for ($i=0; $i <3 ; $i++) {
		for ($j=0; $j <= $i ; $j++) { 
	 		echo "*";
	 } 
		echo "\n";
	}
	echo "\n";
	for ($i=0; $i <3 ; $i++) {
	$k = 1;
		for ($j=3; $j > $i ; $j--) { 
	 		echo $k;
	 		$k++; 
	 } 
		echo "\n";
	}
	echo "\n";

	for ($i=0; $i <3 ; $i++) {
		for ($j=0; $j <= $i ; $j++) { 
			for ($char = 'A'; $char <= 'F'; $char++) {
    			echo $char;
    			}
			}
		echo "\n";
	}

 ?>