<?php
	//Object Data Type
	class Student
	{
		public $name=' ';
		function get_stud_info($nm)
		{
			$this->name=$nm;
		}
		function disp_stud_info()
		{
			echo "Hello $this->name";
		}
	}
	$s1=new Student();
	$s1->get_stud_info("Gaurav Patil");
	$s1->disp_stud_info();
?>