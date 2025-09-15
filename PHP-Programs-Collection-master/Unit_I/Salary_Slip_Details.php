<?php
	//Salary slip
	//Basic salary=1000, HRA=10, TA=7, DA=5 
	$Basic_salary=1000;
	
	$HRA = ($Basic_salary*10)/100;
	$TA =( $Basic_salary*7)/100;
	$DA = ($Basic_salary*5)/100;
	$Gross_salary = ($Basic_salary+$HRA+$TA+$DA);
	
	echo "Basic Salary = $Basic_salary";
	echo "<br>HRA = $HRA";
	echo "<br>TA  = $TA";
	echo "<br>DA  = $DA";
	echo "<br>Gross Salary = $Gross_salary";
?>