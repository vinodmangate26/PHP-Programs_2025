<?php
	//Nested-If Statement : Smallest number among 3 number
	$a=100;
	$b=200;
	$c=300;
	
	if($a<$b)
	{
		if($a<$c)
		{
			echo "Smallest number is $a";
		}
		else
		{
			echo "Smallest number is $c";
		}
	}
	else
	{
		if($b<$c)
		{
			echo "Smallest number is $b";
		}
		else
		{
			echo "Smallest number is $c";
		}
	}
?>