<?php
	class AreaofCircle
	{
		var $radius;
		var $PI;
		function __Construct()
		{
			$this->radius=readline("Enter Radius of Circle : ");
			$this->PI=3.14; 
		}
		function disp_Area_of_Circle()
		{
			$area=($this->PI*$this->radius*$this->radius);
		    echo "Area of circle : $area";
		}
	}
	$a1=new AreaofCircle();
	$a1->disp_Area_of_Circle();
?>