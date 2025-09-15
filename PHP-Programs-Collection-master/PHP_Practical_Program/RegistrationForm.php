<html>
<body>
    <form method="GET">
        <h3>Registration Form</h3>
        
        Username: <input type="text" name="tf1"><br><br>

        Password: <input type="password" name="tf2"><br><br>

        Gender: 
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        Hobbies: 
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports
        <input type="checkbox" name="hobbies[]" value="Singing"> Singing
        <input type="checkbox" name="hobbies[]" value="Playing"> Playing <br><br>

        <input type="submit" name="b1" value="Register">
    </form>

<?php
    if (isset($_GET['b1'])) 
	{
        $username = $_GET['tf1'];
        $password = $_GET['tf2'];
        $gender = $_GET['gender'];
        $hobbies = $_GET['hobbies'];

        if (empty($username) || empty($password) || empty($gender) || empty($hobbies)) 
		{
            echo "Please fill out all fields (Username, Password, Gender, and Hobbies).";
        } 
		else 
		{
			echo "Registration successful!!!<br>";
			
			echo "Your Inforamtion<br>";
			echo "<br>UserName:".$username;
			echo "<br>Password:".$password;
			echo "<br>Gender:".$gender;
			echo "<br>Hobbies:<br>1.".$hobbies[0]."<br>2.".$hobbies[1]."<br>3.".$hobbies[2];
        }
    }
?>
</body>
</html>
