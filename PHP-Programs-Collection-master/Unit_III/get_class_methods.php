<?php
	class Student
	{
		function display()
		{
			echo "This display method";
		}
		function show()
		{
			echo "This show method";
		}
		function getdata()
		{
			echo "This getdata method";
		}
	}
	$m=get_class_methods(Student);
	print_r($m);
?>