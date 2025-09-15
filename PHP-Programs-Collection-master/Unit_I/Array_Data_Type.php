<?php
	//Array Data Type
	$p = array('a','b','c'); //Predefined Array
	$q = array('first' => '10','second' => '20','third' => '30'); //Customized Array
	echo "<br>Array of p<br>";
	
	echo "<br>value of p array 0 index is $p[0]";
	echo "<br>value of p array 1 index is $p[1]";
	echo "<br>value of p array 2 index is $p[2]";
	
	echo "<br><br>Array of q<br>";
	
	echo "<br>value of q array 0 index is " .$q['first'];
	echo "<br>value of q array 1 index is " .$q['second'];
	echo "<br>value of q array 2 index is " .$q['third'];
?>