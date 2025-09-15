<html>
<body>
	<form method="GET">
		Enter your Address : <textarea name="tf1" rows=5 cols=50></textarea><br>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		echo "Your Address : ".$_GET['tf1'];
	}
?>