<?php
	class Area
	{
		var $radius;
		function get_radius()
		{
			$this->radius=readline("Enter Radius of Circle : ");
		}
	}
	class Circle extends Area
	{
		var $PI;
		function calc_area_of_circle()
		{
			$this->PI=3.14;
			$area=($this->PI*$this->radius*$this->radius);
		    echo "Area of circle : $area";
		}
	}
	$c1=new circle();
	$c1->get_radius();
	$c1->calc_area_of_circle();
?>