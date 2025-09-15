<?php
	interface ParentInterface 
	{
		public function parents();
	}

	interface ChildInterface 
	{
		public function childs();
	}
	class Family implements ParentInterface, ChildInterface 
	{
		public function parents() 
		{
			echo "You are Parent<br>";
		}
		public function childs() 
		{
			echo "You are Child\n";
		}
	}
	$c = new Family();
	$c->parents();
	$c->childs();
?>
