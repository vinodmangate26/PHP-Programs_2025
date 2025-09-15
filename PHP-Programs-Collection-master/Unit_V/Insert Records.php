<?php
	$conn=mysqli_connect("localhost","root","","phpdatabase");
	if($conn)
	{
		echo "Connection established successfully!!!";
		$query = "insert into Student values ('2','37','Gaurav Patil','93.29')";
		if(mysqli_query($conn,$query))
		{
			echo "<br>Records created successfully!!!";;
		}
		else
		{
			echo "<br>Records does not Created...";
		}	
	}
	else
	{
		echo "Unable to connect";
	}
	mysqli_close($conn);
?>