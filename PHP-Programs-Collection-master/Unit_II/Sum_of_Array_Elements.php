<?php
	//Sum of Array Elements
	$num = array(10,20,30,40,50);
	$i=0;
	$sum=0;
	while($i<count($num))
	{
		$sum=$sum+$num[$i];
		$i++;		
	}
	echo "Sum of Array Elements : $sum"
?>