<?php
	//Write a PHP Program to check whether number is Prime or Not
	$no=readline("Enter any Integer Number : ");
	$flag=0;
	
	if($no>1)
	{
		for($i=2; $i<$no; $i++)
		{
			if($no%$i==0)
			{
				$flag=1;
				break;
			}
		}
		if($flag==0)
		{
			echo "Number is Prime";
		}
		else
		{
			echo "Number is not Prime";
		}
	}
	else
	{
		echo "Number is not Prime";
	}	
?>