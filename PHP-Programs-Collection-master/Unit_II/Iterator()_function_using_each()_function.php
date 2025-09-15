<?php
	//Iterator() function using each() function
	$num=array(10,20,30,40,50);
	
	while(list($key, $val)= each($num))
	{
		echo "$key => $val  ";
	}
?>