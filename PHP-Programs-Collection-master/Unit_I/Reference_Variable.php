<?php
	//Reference variable
	$a=100;
	$b=&$a; // b is a Reference variable of a
	echo "Value of a = $a";
	echo "<br>Value of b = $b";
	$b=500;
	echo "<br>After Updating value of variable b";
	echo "<br>Value of a = $a";
	echo "<br>Value of b = $b";
?>