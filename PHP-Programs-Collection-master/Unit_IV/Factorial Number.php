<html>
<body>
	<form method="GET">
		Enter any number : <input type="text" name="tf1"><br>
		<input type="submit" name="b1" value="Calculate Factorial">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		$no=$_GET['tf1'];
		$i=1;
		$fact=1;
		while($i<=$no)
		{
			$fact=$fact*$i;
			$i++;
		}
		echo "Factorial of Number : $fact";
	}
?>