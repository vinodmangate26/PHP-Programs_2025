<?php
	//Switch Statement : Check day which is match or not 
	$day="Monday";
	
	Switch($day)
	{
		case "Monday"	 :  echo "It is Monday";
							break;
		case "Tuesday"	 :  echo "It is Tuesday";
							break;
		case "Wednessday":  echo "It is Wednessday";
							break;
		case "Thursday"  :  echo "It is Thursday";
							break;
		case "Friday"	 :  echo "It is Friday";
							break;
		case "Saturday"	 :  echo "It is Saturday";
							break;
		case "Sunday"	 :  echo "It is Sunday";
							break;		
		default : echo "Invalied Day!!!";				
	}
?>