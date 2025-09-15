<html>
<body>
	<form method="GET">
		Enter any number: <input type="text" name="tf1"><br>
		<input type="submit" name="b1" value="Check Even/Odd">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		if($_GET['tf1']!="")
		{
			if($_GET['tf1']%2==0)
			{
				echo "Number is Even";
			}
			else
			{
				echo "Number is Odd";
			}
		}
		else
		{
			echo "Textfield should not be empty";
		}
	}
?>