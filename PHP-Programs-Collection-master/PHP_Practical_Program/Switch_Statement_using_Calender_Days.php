<!DOCTYPE html>
<html>
<body>
	<?php
		// Switch Statement using Calendar Months
		$month = 1;

		switch ($month) {
			case 1:
				echo "<b>You are in January month</b>";
				break;
			case 2:
				echo "<b>February</b>";
				break;
			case 3:
				echo "<b>March</b>";
				break;
			case 4:
				echo "<b>April</b>";
				break;
			case 5:
				echo "<b>May</b>";
				break;
			case 6:
				echo "<b>June</b>";
				break;
			case 7:
				echo "<b>July</b>";
				break;
			case 8:
				echo "<b>August</b>";
				break;
			case 9:
				echo "<b>September</b>";
				break;
			case 10:
				echo "<b>October</b>";
				break;
			case 11:
				echo "<b>November</b>";
				break;
			case 12:
				echo "<b>December</b>";
				break;
			default:
				echo "<b>Invalid month number</b>";
		}
	?>
</body>
</html>
