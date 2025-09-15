<?php
	/*Write a PHP Program which accept five subject marks from 
	user and display total and percentage of student*/
	
	$C_Lang   			= readline("Enter C Language Marks: ");
	$OOP_Lang 			= readline("Enter OOP Language Marks: ");
	$VB_Net_Lang 		= readline("Enter VB.Net Language Marks: ");
	$java_Lang 			= readline("Enter Java Language Marks: ");
	$Advanced_java_Lang = readline("Enter Advanced java Language Marks: ");
	$PHP_Lang 			= readline("Enter PHP Language Marks: ");
	$MAD_Lang 			= readline("Enter MAD Language Marks: ");
	$Python_Lang 		= readline("Enter Python Language Marks: ");
	
	$total=($C_Lang+$OOP_Lang +$VB_Net_Lang+$java_Lang+$Advanced_java_Lang+
			$PHP_Lang+$MAD_Lang+$Python_Lang);
			
	$avg=$total/8;
	
	echo "<br>Total Subject Marks : $total";
	echo "<br>Pecentage Marks : $avg";
?>