<html>
<body>
	<form method="GET">
		Please select your favourite Color:<br>
		<input type="radio" name="c1" value="white">White<br>
		<input type="radio" name="c1" value="red">Red<br>
		<input type="radio" name="c1" value="green">Green<br>
		<input type="radio" name="c1" value="gray">Gray<br>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html> 
<?php
	if(isset($_GET['b1']))
	{
		$color_name=$_GET['c1'];
		echo "You have selected color : $color_name";
	}
?>