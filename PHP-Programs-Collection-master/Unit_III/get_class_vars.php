<?php
	class Student
	{
		var $rollno;
		var $name;
		var $marks;
		function display()
		{
			echo "This is display method";
		}
	}
	$m=get_class_vars(Student);
	print_r($m);
?>