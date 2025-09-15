<html>
<body>
	<form method="GET">
		<select name="transport[]" multiple="multiple">
			<option>Bus</option>
			<option>Car</option>
			<option>Railway</option>
			<option>Airoplane</option>
		</select>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		foreach($_GET['transport'] as $x)
		{
			echo "You have selected item : $x <br>";
		}	
	}
?>