<html>
<body>
	<form method="GET">
		<h3>Select your interested programming Language:</h3>
		<input type="checkbox" name="c1[]" value="C Lang">C Lang<br>
		<input type="checkbox" name="c1[]" value="C++ Lang">C++ Lang<br>
		<input type="checkbox" name="c1[]" value="Java Lang">Java Lang<br>
		<input type="checkbox" name="c1[]" value="Python Lang">Python Lang<br>
		<input type="submit" name="b1" value="Submit">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))  
	{
		if(!empty($_GET['c1']))
		{
			$checked_count=count($_GET['c1']);
			echo "You have selected ".$checked_count." options:<br>";
			foreach($_GET['c1'] as $x)
			{
				echo "<br> $x";
			}
		}	
	}
?>