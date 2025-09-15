<?php
    //Anonymous Function (Lambda Function)
	$add=create_function('$a,$b','return($a+$b);');
	$m=$add(10,20);
	echo "Addition of two number : $m";
?>