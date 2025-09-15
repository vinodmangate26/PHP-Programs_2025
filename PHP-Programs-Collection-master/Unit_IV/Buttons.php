<html>
<body>
	<form method="GET">
		<input type="submit" name="b1" value="Submit">
		<input type="button" name="b2" value="Button">
		<input type="reset" name="b3" value="Reset">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		echo "You have selected Button : " .$_GET['b1'] ."<br>";
	}
?>