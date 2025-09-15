<?php
	//extract() function (Convert Array into Local Variable)
	$Language = array("pop"=>"C Language","oop"=>"C++ Language","java"=>"Java Language");
	
	extract($Language);
	
	echo "Value of variable \$pop : $pop";
	echo "<br>Value of variable \$oop : $oop";
	echo "<br>Value of variable \$java : $java";
?>