<?php
	//Bitwise Operators
	$a=12;
	$b=13;
	
	$c=$a and $b;
	echo "Bitwise AND = $c";
	
	$c=$a|$b;
	echo "<br>Bitwise OR = $c";
	
	$c=$a ^ $b;
	echo "<br>Bitwise XOR = $c";
	
	$c=~12;
	echo "<br>Bitwise NOT = $c";
	
	$c=14<<2;
	echo "<br>Bitwise Left Shift = $c";
	
	$c=14>>2;
	echo "<br>Bitwise Right Shift = $c";
?>