<html>
<body>
	<form method="get">
		<input type="submit" name="b1" value="Start Session">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		session_start();
		$_SESSION["favcolor"]="green";
		$_SESSION["favanimal"]="dog";
		echo "<br>Session Variables are set!!!";
		echo "<br><br>Favourite color is ".$_SESSION['favcolor'];
		echo "<br>Favourite animal is ".$_SESSION['favanimal'];
	}
?>