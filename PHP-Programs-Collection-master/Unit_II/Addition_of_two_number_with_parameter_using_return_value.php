<?php
    //Addition of two number with parameter using return values
	function Addition($m,$n)
    {
        $a=$m;
		$b=$n;
		$c=$a+$b;
		return $c;
    }
    $x=Addition(10,20);
	echo "Addition of two number : $x";
?>