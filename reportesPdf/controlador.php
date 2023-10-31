<?php
require_once("listadoEstudiantes.php");
$pdf = new listadoEstudiantes();
  
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->headerAttributes();
$pdf->SetFont('Times','',14);
$pdf->datos();
  

$pdf->Output();
  
?>