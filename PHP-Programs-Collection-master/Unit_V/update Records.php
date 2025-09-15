<?php
	$conn=mysqli_connect("localhost","root","","phpdatabase");
	if($conn)
	{
		echo "Connection established successfully!!!";
		$query = "update Student set name='Vitthal Nirmal' where rollno=33";
		if(mysqli_query($conn,$query))
		{
			echo "<br>Records Updated successfully!!!";;
		}
		else
		{
			echo "<br>Records not Updated...";
		}	
	}
	else
	{
		echo "Unable to connect";
	}
	mysqli_close($conn);
?>