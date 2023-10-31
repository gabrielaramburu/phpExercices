<?php
require_once("listadoEstudiantes.php");
$pdf = new listadoEstudiantes();
  
// Define an alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->headerAttributes();
$pdf->SetFont('Times','',14);
$pdf->datos();
  

$pdf->Output();
  
?>