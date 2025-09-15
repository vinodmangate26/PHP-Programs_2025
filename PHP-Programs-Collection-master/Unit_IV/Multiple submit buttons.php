<html>
<body>
	<h3>Form having multiple submit buttons</h3>
	<form method="POST">
		<input type="submit" name="b1" class="button" value="Button-1">
		<input type="submit" name="b1" class="button" value="Button-2">
		<input type="submit" name="b1" class="button" value="Button-3">
	</form>
	<?php
		switch($_REQUEST['b1'])
		{
			case "Button-1": echo "<h4>You pressed Button 1</h4>";break;
			case "Button-2": echo "<h4>You pressed Button 2</h4>";break;
			case "Button-3": echo "<h4>You pressed Button 3</h4>";break;
		}
	?>
</body>
</html>