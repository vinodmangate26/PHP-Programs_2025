<?php
	//Automatically Array using while loop
	$cars = array("Volvo","BMW","Toyota");
	$i=0;
	while($i<count($cars))
	{
		echo"<br>I Like car ".$cars[$i];
		$i++;		
	}
?>