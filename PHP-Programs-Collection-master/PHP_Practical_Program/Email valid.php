<html>
<body>
    <h3>Email Validation Form</h3>
	
    <form method="POST">
        Email: <input type="text" name="email" required><br><br>
        <input type="submit" name="submit" value="Validate Email">
    </form>

    <?php
        if (isset($_POST['submit'])) 
		{
            $email = $_POST['email'];
			
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
                echo "The email address '$email' is valid.";
            }
			else 
			{
                echo "The email address '$email' is invalid.";
            }
        }
    ?>
</body>
</html>
