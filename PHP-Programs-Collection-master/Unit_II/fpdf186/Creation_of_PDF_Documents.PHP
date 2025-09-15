<?php
	//Creation of PDF Documents
	require('C:\xampp\htdocs\fpdf186\fpdf.php');
	$pdf=new FPDF;
	$pdf->AddPage();
	$pdf->setFont('Arial','B',20);
	$pdf->cell(80,10,"PHP Programming Language");
	$pdf->output();
?>