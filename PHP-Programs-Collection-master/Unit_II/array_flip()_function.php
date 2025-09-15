<?php
	//array_flip() function (Exchange all keys)
	$Language = array("pop"=>"C Language","oop"=>"C++ Language","java"=>"Java Language");
	
	$result=array_flip($Language);
	
	print_r($result);
?>