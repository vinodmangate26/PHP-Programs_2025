<?php
	//str_replace() function
	$str="PHP is a Programming Language";
	$search="Programming";
	$replace="Scripting";
	
	$new_str=str_replace($search,$replace,$str,$count);
	
    echo "Your Original String is $str";
	echo "<br>After replacement your string : $new_str";
	echo "<br>No. of replacement : $count";
?>