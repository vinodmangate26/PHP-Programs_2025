<?php
	$conn = mysqli_connect("localhost", "root", "", "phpprogram");

	if ($conn) 
	{
		echo "Connection established successfully!!!<br>";

		$query = "UPDATE student SET marks = '95.00' WHERE id = '1'";

		$result = mysqli_query($conn, $query);

		if ($result) 
		{
			echo "Student data updated successfully!";
		} 
		else 
		{
			echo "Error executing query: " . mysqli_error($conn);
		}
	} 
	else 
	{
		echo "Unable to Connect!!!";
	}

	mysqli_close($conn);
?>
