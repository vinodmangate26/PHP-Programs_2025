<?php
	//Graphics Concept using imagecreate() function
	$img=imagecreate(500,500);
	
    $bgcolor=imagecolorallocate($img,150,200,230);
    $fontcolor=imagecolorallocate($img,100,150,175);
	
	imagestring($img,20,50,50,"PHP Programming Language",$fontcolor);
	
	header("Content-Type:image/png");
	imagepng($img);
	imagedestroy($img);
?>