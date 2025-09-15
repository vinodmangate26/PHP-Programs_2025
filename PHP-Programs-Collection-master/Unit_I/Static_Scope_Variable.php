<?php
	//Static scope variable
	function staticDemo() //Function Defination
	{
		Static $x=0;
		echo "<br>value of x = $x";
		$x++;
	}
	staticDemo(); //Calling function
	staticDemo();
	staticDemo();
?>