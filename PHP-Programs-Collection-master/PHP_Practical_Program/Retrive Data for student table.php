<?php
	$conn = mysqli_connect("localhost", "root", "", "phpprogram");

	if ($conn) 
	{
		echo "Connection established successfully!!!<br><br>";
	
		$query = "SELECT * FROM student";
		
		$result = mysqli_query($conn, $query);

		if ($result) 
		{
			if (mysqli_num_rows($result) > 0) 
			{
				echo "<table border='1'>
						<tr>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Student Marks</th>
						</tr>";

				while ($row = mysqli_fetch_assoc($result)) 
				{
					echo "<tr>
							<td>" . $row['id'] . "</td>
							<td>" . $row['name'] . "</td>
							<td>" . $row['marks'] . "</td>
						  </tr>";
				}
				echo "</table>";
			} 
			else 
			{
				echo "No data found!";
			}
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
