<html>
<body>
    <h3>Session Management</h3>

    <form method="GET">
        <input type="submit" name="start" value="Start Session">
        <input type="submit" name="destroy" value="Destroy Session">
    </form>

    <?php
        session_start();

        if (isset($_GET['start'])) 
		{
            $_SESSION['user'] = 'Gaurav Patil';
            echo "Session started. User: " . $_SESSION['user'] . "<br>";
        }

        if (isset($_GET['destroy'])) 
		{
            session_unset();
            session_destroy();
            echo "Session destroyed.<br>";
        }
    ?>
</body>
</html>
