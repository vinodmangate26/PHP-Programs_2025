<?php
	class Student
	{
		function display()
		{
			echo "This is class";
		}
	}
	if(class_exists("Student"))
	{
	    echo "\nGiven class exists";
	}
	else 
	{
	    echo "\nGiven class does not exists";
	}
?>