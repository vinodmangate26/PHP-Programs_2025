<html>
<body>
    <form method="GET">
        <h3>Email Validation Form</h3>
        
        Email: <input type="text" name="email"><br><br>

        <input type="submit" name="submit" value="Validate Email">
    </form>

	<?php
		if (isset($_GET['submit'])) 
		{
			$email = $_GET['email'];

			if (empty($email)) 
			{
				echo "Please enter an email address.";
			} 
			else if (is_numeric($email)) 
			{
				echo "The email is invalid. Email addresses cannot be numeric.";
			} 
			else if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				echo "The email address is valid.";
			} 
			else 
			{
				echo "The email address is invalid.";
			}
		}
	?>
</body>
</html>
