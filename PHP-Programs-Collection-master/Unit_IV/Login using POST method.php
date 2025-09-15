<html>
<body>
	<form action=" " method="POST">
		Username: <input type="text" name="nm"><br>
		Password: <input type="text" name="psw"><br>
		<input type="submit" name="b1" value="Login">
	</form>
</body>
</html>
<?php
	if(isset($_POST['b1']))
	{
		echo "Your username : ".$_POST['nm'];
		echo "<br>Your Password : ".$_POST['psw'];
	}
?>