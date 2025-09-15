<?php
	class Student
	{
		function __construct()
		{
			echo "\nConstructor called!!!";
		}
		function __destruct()
		{
			echo "\nDestructor called!!!";
		}
	}
	$s1=new Student();
?>
