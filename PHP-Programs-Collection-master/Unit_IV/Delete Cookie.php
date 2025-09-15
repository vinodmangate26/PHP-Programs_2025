<html>
<body>
	<form method="get">
		Enter Cookie Name:<input type="text" name="tf1"><br><br>
		Enter Cookie Value:<input type="text" name="tf2"><br><br>
		<input type="submit" name="b1" value="Set Cookie">
	</form>
</body>
</html>
<?php
	if(isset($_GET['b1']))
	{
		$cookie_name=$_GET['tf1'];
		$cookie_value=$_GET['tf2'];
		setCookie($cookie_name,$cookie_value,time()-3600); //deleted cookie as time is in past
		if(isset($_COOKIE[$cookie_name]))
		{
			echo "Cookie set successfully with below details:";
			echo "<br>Cookie Name: $cookie_name";
			echo "<br>Cookie Value: $cookie_value<br><br>";
		}
		else
		{
			echo "Cookie is not set";
		}
	}
?>