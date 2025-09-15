<?php
	$conn=mysqli_connect("localhost","root","","phpdatabase");
	if($conn)
	{
		echo "Connection established successfully!!!";
		$query = "delete from student where rollno=33";
		if(mysqli_query($conn,$query))
		{
			echo "<br>Records Deleted successfully!!!";;
		}
		else
		{
			echo "<br>Records not Deleted...";
		}	
	}
	else
	{
		echo "Unable to connect";
	}
	mysqli_close($conn);
?>