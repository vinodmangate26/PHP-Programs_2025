<?php
	//Multi-Dimensional Arrays
	$a = array(10,20,30);
	$b = array(40,50,60);
	$c = array(70,80,90);
	
	$multi_array = array($a,$b,$c);
	echo "<br>Your Multi-dimensional Array Element: <br>";
	echo "<br>Value present in 0 row 0 coloum : ".$multi_array[0][0];
	echo "<br>Value present in 0 row 1 coloum : ".$multi_array[0][1];
	echo "<br>Value present in 0 row 2 coloum : ".$multi_array[0][2];
	   
	echo "<br>";
	
	echo "<br>Value present in 1 row 0 coloum : ".$multi_array[1][0];
	echo "<br>Value present in 1 row 1 coloum : ".$multi_array[1][1];
	echo "<br>Value present in 1 row 2 coloum : ".$multi_array[1][2];

	echo "<br>";
	
	echo "<br>Value present in 2 row 0 coloum : ".$multi_array[2][0];
	echo "<br>Value present in 2 row 1 coloum : ".$multi_array[2][1];
	echo "<br>Value present in 2 row 2 coloum : ".$multi_array[2][2];
	
?>