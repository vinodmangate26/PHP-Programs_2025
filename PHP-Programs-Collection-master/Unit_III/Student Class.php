<?php
	class Student
	{
		var $rollno;
		var $name;
		var $marks;
		function get_stud_info()
		{
			$this->rollno=1010;
			$this->name="Gaurav";
			$this->marks=93.29;
		}
		function disp_stud_info()
		{
			echo "<br>Student Roll No : $this->rollno";
			echo "<br>Student Name : $this->name";
			echo "<br>Student Marks : $this->marks";
		}
	}
	$s1=new Student();
	$s1->get_stud_info();
	$s1->disp_stud_info();
?>