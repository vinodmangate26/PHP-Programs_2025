<?php
	//Creation of PDF Documents
	require('C:\xampp\htdocs\PHP_Program\Unit_II\fpdf186');
	$pdf=new FPDF;
	$pdf->AddPage();
	$pdf->setFont('Arial','B',20);
	$pdf->cell(80,10,"PHP Programming Language");
	$pdf->output();
?>