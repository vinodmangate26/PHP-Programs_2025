<?php
	//Logical Operators
	$a=100;
	$b=200;
	
	$c=($a<$b and $a<=$b);
	echo "Logical AND ($a<$b and $a<=$b) = $c";
	
	$c=($a<$b or $a>=$b);
	echo "<br>Logical OR ($a<$b or $a>=$b) = $c";
	
	/*If both side are True then xor is false and 
	  If both side are  false then xor is true*/
	$c=($a<$b xor $a<=$b);
	echo "<br>Logical XOR ($a<$b xor $a<=$b) = $c";
	
	$c=!($a<$b and $a<=$b);
	echo "<br>Logical NOT ($a<$b and $a<=$b) = $c";
?>