<html>
<body>
	<form method="GET">
		Enter your Name : <input type="text" name="tf1"><br>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		echo "Welcome : ".$_GET['tf1'];
	}
?>