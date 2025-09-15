<?php
	class Base
	{
		function display()
		{
			echo "Display method of Base class";
		}
	}
	class Derived extends Base
	{
		function display()
		{
			echo "\nDisplay method of Derived class";
		}
	}
	$d1=new Derived();
	$d1->display();
?>