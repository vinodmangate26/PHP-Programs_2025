<?php
	class Base
	{
		var $rollno;
	}
	class Derived extends Base
	{
		var $name;
	}
	$m=get_parent_class(Derived);
	echo "Parent class name is $m";
?>