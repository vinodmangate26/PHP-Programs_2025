<html>
<body>
	<form action=" " method="GET">
		Username: <input type="text" name="nm"><br>
		Password: <input type="text" name="psw"><br>
		<input type="submit" name="b1" value="Login">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		echo "Your username : ".$_GET['nm'];
		echo "<br>Your Password : ".$_GET['psw'];
	}
?>