<html>
<body>
    <form method="GET">
        <h3>Registration Form</h3>
        
        Username: <input type="text" name="tf1"><br><br>

        Password: <input type="password" name="tf2" ><br><br>

        Gender: 
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        Hobbies: 
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br><br>

        <input type="submit" name="b1" value="Register">
    </form>

<?php
    if (isset($_GET['b1']))
	{
        // Collect form data
        $username = $_GET['tf1'];
        $password = $_GET['tf2'];
        $gender = $_GET['gender'];
        $hobbies = $_GET['hobbies'];

        if (empty($username) || empty($password) || empty($gender) || empty($hobbies)) 
		{
            echo "<p style='color: red;'>Please fill out all fields (Username, Password, Gender, and Hobbies).</p>";
        } 
		else 
		{
            echo "<p style='color: green;'>Registration successful!!!</p>";
        }
    }
    ?>
</body>
</html>
