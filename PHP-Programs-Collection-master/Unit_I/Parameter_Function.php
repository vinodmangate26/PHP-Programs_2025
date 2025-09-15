<?php
	//Passing Parameter to the Function
	function get_info($no) //Function Defination
	{
		$x=$no*$no;
		return $x;
	}
	$y = get_info(10); //Calling function
	echo "<br>Square of given number = $y";
?>