<?php
	$conn = mysqli_connect("localhost", "root", "", "phpprogram");

	if ($conn) 
	{
		echo "Connection established successfully!!!<br>";

		$employee_id = 1010;
		$employee_name = "Gaurav Patil";
		$employee_salary = 1000000;

		$query = "INSERT INTO employee (id, name, salary) VALUES ('$employee_id', '$employee_name', '$employee_salary')";
		
		$result = mysqli_query($conn, $query);

		if ($result) 
		{
			echo "Employee data inserted successfully!";
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
