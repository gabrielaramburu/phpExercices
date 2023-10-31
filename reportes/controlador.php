<?php
require_once "ReporteEstudiantes.php";

$reporte = new ReporteEstudiantes;
$reporte->run()->render();	