<?php
    class Person 
    {
        public $name;
        public $age;
    
        public function __construct($name, $age) 
        {
            $this->name = $name;
            $this->age = $age;
        }
    
        public function display() 
        {
            echo "<br>Name: " . $this->name . "\n";
            echo "<br>Age: " . $this->age . "<br>";
        }
    }
    $p = new Person("Gaurav", 18);
	$p1 = new Person("Vinod", 19);
    $p->display();
	$p1->display();
?>
