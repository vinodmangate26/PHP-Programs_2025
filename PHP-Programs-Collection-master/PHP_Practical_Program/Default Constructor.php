<?php
	class Person 
	{  
		public $name;
		public $age;
		public function __construct() 
		{
			$this->name = "Gaurav";
			$this->age = 18;
		}
		public function display() 
		{
			echo "Name: " . $this->name . "\n";
			echo "<br>Age: " . $this->age . "\n";
		}
	}
	$p = new Person();
	$p->display();
?>
