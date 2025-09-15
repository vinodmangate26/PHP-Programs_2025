<html>
<body>
	<form method="get">
		<input type="submit" name="b1" value="Destroy Session">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		session_unset();
		session_destroy();
	}
?>
