<?php
	//Iterator() function
	$vehicle= array("Bike","Car","Plane","Foot");
	
	$x=current($vehicle);
	echo "<br> current Function : $x";
	
	$x=next($vehicle);
	echo "<br> Next Function : $x";
	
	$x=current($vehicle);
	echo "<br> current Function : $x";
	
	$x=prev($vehicle);
	echo "<br> Previous Function : $x";
	
	$x=reset($vehicle);
	echo "<br> Reset Function : $x";
	
	$x=end($vehicle);
	echo "<br> Last Function : $x";
	
	$x=key($vehicle);
	echo "<br> Key Function : $x";
	
?>