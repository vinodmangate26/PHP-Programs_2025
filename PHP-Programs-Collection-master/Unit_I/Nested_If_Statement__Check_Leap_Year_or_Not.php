<?php
	//Nested-If Statement : Check Leap Year or Not
	$year = 2025;
	
	if ($year % 4 == 0) 
	{
		if ($year % 100 == 0 && $year % 400 != 0) 
		{
			echo "$year is Not a Leap Year";
		} 
		else 
		{
			echo "$year is a Leap Year";
		}
	} 
	else 
	{
		echo "$year is Not a Leap Year";
	}
?>
