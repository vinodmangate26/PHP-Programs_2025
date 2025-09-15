<?php
	$conn=mysqli_connect("localhost","root","","phpdatabase");
	if($conn)
	{
		echo "Connection established successfully!!!";
		$query = "create table Student(id int(10), rollno int(10), name varchar(20), marks decimal(5,2))";
		if(mysqli_query($conn,$query))
		{
			echo "<br>Table Created successfully!!!";
		}
		else
		{
			echo "<br>Table does not Created...";
		}	
	}
	else
	{
		echo "Unable to connect";
	}
	mysqli_close($conn);
?>