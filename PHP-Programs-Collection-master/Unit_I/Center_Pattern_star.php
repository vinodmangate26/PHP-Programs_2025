<?php
	/*Generate following output in PHP
	    *	
	   *  *
	  *  *  *
	 *  *  * *
	*  *  *	 *  *
	*/
	
	for($i=1; $i<=5; $i++)
	{
		for($k=4; $k>=$i; $k--)
		{
			echo " ";
		}
		for($j=1; $j<=$i; $j++)
		{
			echo "* ";
		}
		echo "\n";
	}
?>