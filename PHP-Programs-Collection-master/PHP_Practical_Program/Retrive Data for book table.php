<?php
	$conn = mysqli_connect("localhost", "root", "", "phpprogram");

	if ($conn) 
	{
		echo "Connection established successfully!!!<br>";

		$query = "SELECT * FROM book";
		
		$result = mysqli_query($conn, $query);

		if ($result) 
		{
			if (mysqli_num_rows($result) > 0) 
			{
				echo "<table border='1'>
						<tr>
							<th>Book ID</th>
							<th>Book Name</th>
							<th>Book Price</th>
						</tr>";

				while ($row = mysqli_fetch_assoc($result)) 
				{
					echo "<tr>
							<td>" . $row['book_id'] . "</td>
							<td>" . $row['book_name'] . "</td>
							<td>" . $row['book_price'] . "</td>
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
