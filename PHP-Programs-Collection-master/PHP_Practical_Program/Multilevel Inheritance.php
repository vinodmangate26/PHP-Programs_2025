<?php
	class Grandfather
	{
		public function father()
		{
			echo "You are Grandfather<br>";
		}
	}

	class Parents extends Grandfather
	{
		public function parent()
		{
			echo "You are Parent<br>";
		}
	}

	class Childs extends Parents
	{
		public function child()
		{
			echo "You are Child\n";
		}
	}
	$c = new Childs();
	$c->father();
	$c->parent();
	$c->child();
?>
