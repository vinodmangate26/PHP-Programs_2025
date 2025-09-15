<?php
	//Sum of Array Element using For each Loop
	$num = array(10,20,30,40,50);
	$sum=0;
	foreach($num as $x)
	{
		$sum=$sum+$x;
	}
	echo "Sum of Array Element : $sum";
?>