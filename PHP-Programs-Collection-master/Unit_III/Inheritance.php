<?php
	class Base
	{
		function display()
		{
			echo "Hello ";
		}
	}
	class Derived extends Base
	{
		function show()
		{
			echo "Friends!!! ";
		}
	}
	$d1=new Derived();
	$d1->display();
	$d1->show();
?>