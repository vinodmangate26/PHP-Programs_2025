<?php
	//Nested-If Statement : Greatest number among 3 number
	$a=100;
	$b=200;
	$c=300;
	
	if($a>$b)
	{
		if($a>$c)
		{
			echo "Greatest number is $a";
		}
		else
		{
			echo "Greatest number is $c";
		}
	}
	else
	{
		if($b>$c)
		{
			echo "Greatest number is $b";
		}
		else
		{
			echo "Greatest number is $c";
		}
	}
?>