<?php
	$conn=mysqli_connect("localhost","root","","phpdatabase");
	if($conn)
	{
		echo "Connection established successfully!!!";
	}
	else
	{
		echo "Unable to connect";
	}
	mysqli_close($conn);
?>