<html>
<body>
	<form method="GET">
		Enter Your Name:<input type="text" name="tf1"><br>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		if(empty($_GET['tf1']))
		{
			echo "Name is required!!!";
		}
		else
		{
			echo "Welcome ".$_GET['tf1'];
		}
	}
?>