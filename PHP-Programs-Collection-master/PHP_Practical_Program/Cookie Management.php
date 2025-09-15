<html>
<body>
    <h3>Cookie Management</h3>

    <form method="GET">
        Cookie Name: <input type="text" name="cookieName"><br><br>
		Cookie Value: <input type="text" name="cookieValue"><br><br>
		
        <input type="submit" name="create" value="Create Cookie">
        <input type="submit" name="modify" value="Modify Cookie">
        <input type="submit" name="delete" value="Delete Cookie">
    </form>

    <?php
        if (isset($_GET['create'])) 
		{
            $name = $_GET['cookieName'];
            $value = $_GET['cookieValue'];
            setcookie($name, $value, time() + 3600);
            echo "Cookie '$name' created with value '$value'.<br>";
        }

        if (isset($_GET['modify'])) 
		{
            $name = $_GET['cookieName'];
            $value = $_GET['cookieValue'];
            if (isset($_COOKIE[$name])) 
			{
                setcookie($name, $value, time() + 3600);
                echo "Cookie '$name' modified with new value '$value'.<br>";
            } 
			else 
			{
                echo "Cookie '$name' does not exist.<br>";
            }
        }

        if (isset($_GET['delete'])) 
		{
            $name = $_GET['cookieName'];
            if (isset($_COOKIE[$name])) 
			{
                setcookie($name, "", time() - 3600);
                echo "Cookie '$name' deleted.<br>";
            } 
			else 
			{
                echo "Cookie '$name' does not exist.<br>";
            }
        }
    ?>

</body>
</html>