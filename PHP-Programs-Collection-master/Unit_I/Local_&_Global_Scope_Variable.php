<?php
	//Local & Global scope variable
	$x=100; //Global variable $x
	function scope_variable() //Function Defination
	{
		global $x;
		$y=200; //Local variable $y
		echo "Local variable y value = $y";
		echo "<br>Inside the function, Global variable x value = $x";
		$x=700;
	}
	scope_variable(); //Calling function
	echo "<br>Outside the function, Global variable x value = $x";
?>