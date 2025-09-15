<?php
	//compact() function (Convert Variable into Array)
	$a=10;
	$b=20;
	$c=30;
	$d=40;
	$e=50;
	
	$number= array("a","b","c","d","e");
	$num_array=compact($number);
	print_r($num_array);
?>